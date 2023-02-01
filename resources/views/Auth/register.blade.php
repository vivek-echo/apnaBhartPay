<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 15:34:56 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('images/favicon/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.png')}}" type="image/x-icon">
    <title>Tivo - Premium Admin Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/feather-icon.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
</head>

<body>
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div> -->
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo text-center" href="index.html"><img class="img-fluid for-light" src="{{asset('images/logo/ABP.png')}}" alt="looginpage" width="320"></a></div>
                        <div class="login-main">
                        <form method="POST" action="{{ route('register') }}"  class="theme-form">
                        @csrf
                          
                                <h4 class="text-center">Create your account</h4>
                                <p class="text-center">Enter your personal details to create account</p>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Member Type</label>
                                        <select name="memberType" id="memberType" class="form-select">
                                            <option value="0">--Select--</option>
                                            <option value="1">District Mananger</option>
                                            <option value="1">Agent</option>
                                        </select>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">First Name</label>
                                        <input name="firstName" id="firstName" class="form-control" type="text" required="" placeholder="First name">

                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Last Name</label>
                                        <input name="lastName" id="lastName" class="form-control" type="text" required="" placeholder="First name">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Email</label>
                                        <input name="email" id="email" class="form-control" type="text" required="" placeholder="Email">

                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Shop Name</label>
                                        <input name="ShopName" id="ShopName" class="form-control" type="text" required="" placeholder="Shop name">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Date Of Birth</label>
                                        <input name="dateOfBirth" id="dateOfBirth" class="form-control" type="text" required="" placeholder="Date Of Birth">

                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Pin Code</label>
                                        <input name="pinCode" id="pinCode" class="form-control" type="text" required="" placeholder="Pin Code">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">State</label>
                                        <input name="state" id="state" class="form-control" type="text" disabled placeholder="State">
                                        <input name="stateId" id="stateId" class="form-control" type="hidden" disabled placeholder="State">
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">City</label>
                                        <input name="city" id="city" class="form-control" type="text" disabled placeholder="City">
                                        <input name="cityId" id="cityId" class="form-control" type="hidden" disabled placeholder="City">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Address</label>
                                        <input name="address" id="address" class="form-control" type="text" required="" placeholder="Address">

                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Referral Code</label>
                                        <input name="referralCode" id="referralCode" class="form-control" type="text" required="" placeholder="Enter Referral Code">

                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <label class="col-form-label pt-0">Your Name</label>
                                    <div class="row g-2">
                                        <div class="col-6">
                                            <input class="form-control" type="text" required="" placeholder="First name">
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="text" required="" placeholder="Last name">
                                        </div>
                                    </div>
                                </div> -->

                                <!-- <div class="form-group">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox">
                                        <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="javascript:void(0)">Privacy Policy</a></label>
                                    </div>
                                </div> -->

                                <div class="form-group text-center mt-2">
                                    <button class="btn btn-primary" type="submit">Create Account</button>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <!-- <ul class="login-social">
                      <li><a href="https://www.linkedin.com/" target="_blank"><i data-feather="linkedin"></i></a></li>
                      <li><a href="https://twitter.com/" target="_blank"><i data-feather="twitter"></i></a></li>
                      <li><a href="https://www.facebook.com/" target="_blank"><i data-feather="facebook"></i></a></li>
                      <li><a href="https://www.instagram.com/" target="_blank"><i data-feather="instagram"></i></a></li>
                    </ul> -->
                                </div>
                                <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="login.html">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
        <!-- Bootstrap js-->
        <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <!-- feather icon js-->
        <script src="{{asset('js/icons/feather-icon/feather.min.js')}}"></script>
        <script src="{{asset('js/icons/feather-icon/feather-icon.js')}}"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{asset('js/config.js')}}"></script>
        <!-- Template js-->
        <script src="{{asset('js/script.js')}}"></script>
        <script>
            $(document).ready(function() {
                $("#pinCode").focusout(function() {
                    var pinCode = $(this).val();

                    $.ajax({
                        url: "{{url('/getState')}}",
                        data:{pinCode:pinCode},
                        success: function(res) {
                            $('#state').val(res.data.state);
                            $('#stateId').val(res.data.stateId);
                            $('#city').val(res.data.district);
                            $('#cityId').val(res.data.districtId);
                        }
                    });
                });
            });
        </script>
        <!-- login js-->
    </div>
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jan 2023 15:34:56 GMT -->

</html>