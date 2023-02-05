@extends('InnerPannel.Layouts.MainLayout')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Services</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row project-cards">
            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6 p-0 d-flex">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="B2Bservices-tab" data-bs-toggle="tab"
                                        href="#B2Bservices" role="tab" aria-controls="B2Bservices"
                                        aria-selected="true"><i data-feather="target"></i>B2B Services</a></li>
                                <li class="nav-item"><a class="nav-link" id="Legalservices-tab" data-bs-toggle="tab"
                                        href="#Legalservices" role="tab" aria-controls="Legalservices"
                                        aria-selected="false"><i data-feather="target"></i>Legal Services</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html"> <i
                                    data-feather="plus-square"> </i>Create New Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="B2Bservices" role="tabpanel"
                                aria-labelledby="B2Bservices-tab">
                                <div class="mb-3">
                                    <h4>B2B Services</h4>
                                </div>

                                <div class="file-manager">
                                    <ul class="quick-file d-flex flex-row">
                                        <li>
                                            <a href="#"><div class="quick-box"><i class="myicon-mobile-payment"></i></div>
                                            <h6>Recharge</h6></a>   
                                        </li>
                                        <li>
                                            <a href="#"><div class="quick-box"><i class="myicon-online-banking-2"></i></div>
                                            <h6>Money Transfer</h6></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>


                            <div class="tab-pane fade" id="Legalservices" role="tabpanel"
                                aria-labelledby="Legalservices-tab">
                                <div class="mb-3">
                                    <h4>Legal Services</h4>
                                </div>

                                <div class="file-manager">
                                    <ul class="quick-file d-flex flex-row">
                                        <li>
                                            <div class="quick-box"><i class="fa fa-youtube-play font-danger"></i></div>
                                            <h6>Videos</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-th font-info"></i></div>
                                            <h6>Apps</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-file-text-o font-secondary"></i></div>
                                            <h6>Document</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-music font-warning"></i></div>
                                            <h6>Music</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-download font-primary"></i></div>
                                            <h6>Download</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-folder font-info"></i></div>
                                            <h6>Folder</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-file-archive-o font-secondary"></i></div>
                                            <h6>Zip File</h6>
                                        </li>
                                        <li>
                                            <div class="quick-box"><i class="fa fa-trash font-danger"></i></div>
                                            <h6>Trash</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#serviceLink').addClass('activeLink');

        });
    </script>
@endsection