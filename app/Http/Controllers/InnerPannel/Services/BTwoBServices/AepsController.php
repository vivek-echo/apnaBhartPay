<?php

namespace App\Http\Controllers\InnerPannel\Services\BTwoBServices;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;

class AepsController extends Controller
{


    public function index()
    {
        $msg = "";
        $status = "";
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $a = Auth::user();
        $params['merchantcode'] = $a->userId;
        $params['mobile'] = $a->mobile;
        $params['is_new'] = 0;
        $params['email'] = $a->email;
        $params['firm'] = $a->shopName;
        $params['callback'] = url('/aepsKycCallBack');
        $payBill =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($params), 'application/json')
            ->post('https://paysprint.in/service-api/api/v1/service/onboard/onboardnew/getonboardurl')->json();
        if ($payBill) {
            $redirect = $payBill['redirecturl'];
        } else {
            $redirect = "";
        }
        $viewVar['redirectUrl'] =  $redirect;
        $viewVar['msg'] = $msg;
        $viewVar['status'] = $status;
       
        return view('InnerPannel/Services/BtwoBServices/AepsService', $viewVar);
    }

    public function aepsKycCallBack()
    {
        $getData = request()->all();
        $msg = "";
        $status = "";
        $decodeData = json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $getData['data'])[1]))));

        if ($decodeData->status == 1) {
            $updateKyc = DB::table('users')->where('userId', $decodeData->merchantcode)->where('deletedFlag', 0)->update([
                'kycStatus' => 1,
                'kycRiefId' => $decodeData->refno,
                'taxInId' => $decodeData->txnid,
                'statusbank2' => $decodeData->statusbank2
            ]);
            if ($updateKyc) {
                $msg = "KYC Done Successfully";
                $status = true;
            } else {
                $msg = "Something Went Wrong . Please try again later. ";
                $status = False;
            }
        }

        session()->flash('msg', $msg);
        session()->flash('status', $status);

        return redirect()->route('aeps');
    }

    public function getBankNameList()
    {
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $runApi =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->post('https://paysprint.in/service-api/api/v1/service/aeps/banklist/index')->json();

        return response()->json([
            'data' => $runApi['banklist']['data'],
            'status' => $runApi['banklist']['status'],
        ]);
    }

    public function getBEAeps(){
         $key = '9bcdc458b999fe5b'; //(provided by PAYSPRINT)
        $iv =   'd289a7648f269f61';  
        $getData = request()->all();
        $apiKey = config('constant.API_KEY');
        $token = Controller::getToken();
        $a = Auth::user();
        $datapost['latitude'] = $getData['lat'];
        $datapost['longitude'] =$getData['long'];
        $datapost['mobilenumber'] = $getData['cstmrMobNo'];
        $datapost['referenceno'] =mt_rand(10000000, 99999999);
        $datapost['ipaddress'] = $this->get_client_ip();
        $datapost['adhaarnumber'] = $getData['aadharNo'];
        $datapost['nationalbankidentification'] = $getData['bankName'];
        $datapost['data'] = $getData['txtPidData'];
        // $datapost['submerchantid'] = $a->userid;
        $datapost['accessmodetype'] = "SITE";
      $datapost['requestremarks'] = "requestremarks";
        $datapost['pipe'] = "bank1";
        $datapost['timestamp'] = now();
        $datapost['transactiontype'] = "BE";
        $datapost['submerchantid'] = $a->userId;
        $datapost['is_iris'] = "Yes";
         $cipher  =   openssl_encrypt(json_encode($datapost, true), 'AES-128-CBC', $key, $options = OPENSSL_RAW_DATA, $iv);
        $param['body'] =       base64_encode($cipher);
        $runApi =  Http::withHeaders([
            'accept' => 'application/json',
            'Authorisedkey' => $apiKey,
            'Token' => $token
        ])->withBody(json_encode($param), 'application/json')
        ->post('https://paysprint.in/service-api/api/v1/service/aeps/balanceenquiry/index')->json();
        dd($runApi);
       
    }

    public function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
