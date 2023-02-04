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
                <li class="nav-item"><a class="nav-link active" id="B2Bservices-tab" data-bs-toggle="tab" href="#B2Bservices" role="tab" aria-controls="B2Bservices" aria-selected="true"><i data-feather="target"></i>B2B Services</a></li>
                <li class="nav-item"><a class="nav-link" id="Legalservices-tab" data-bs-toggle="tab" href="#Legalservices" role="tab" aria-controls="Legalservices" aria-selected="false"><i data-feather="target"></i>Legal Services</a></li>
                </ul>
            </div>
            <div class="col-md-6 p-0">                    
                <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" href="projectcreate.html"> <i data-feather="plus-square"> </i>Create New Project</a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
            <div class="tab-content" id="top-tabContent">
                <div class="tab-pane fade show active" id="B2Bservices" role="tabpanel" aria-labelledby="B2Bservices-tab">
                    <div class="mb-3">
                        <h4>B2B Services</h4>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-primary">B2B Services</span>
                            <h6>Endless admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Themeforest, australia</p>
                            </div>
                            </div>
                            <p>Endless Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-primary">12 </div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-primary">5</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-primary">7</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+10 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>70% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-secondary">Done</span>
                            <h6>Universal admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Envato, australia</p>
                            </div>
                            </div>
                            <p>Universal Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-secondary">24</div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-secondary">24</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-secondary">40</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+3 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>100% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-success">Done</span>
                            <h6>Poco admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Envato, australia</p>
                            </div>
                            </div>
                            <p>Poco Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-success">40</div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-success">40</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-success">20</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+2 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>100% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-info">Done</span>
                            <h6>Xolo admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Envato, australia</p>
                            </div>
                            </div>
                            <p>Xolo Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-info">24</div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-info">24</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-info">40</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+3 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>100% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-info" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-warning">Doing</span>
                            <h6>Zeta admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Themeforest, australia</p>
                            </div>
                            </div>
                            <p>Zeta Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-warning">12 </div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-warning">5</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-warning">7</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+10 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>70% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-warning progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-danger">Done</span>
                            <h6>Tivo admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Envato, australia</p>
                            </div>
                            </div>
                            <p>Tivo Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-danger">40</div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-danger">40</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-danger">20</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+2 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>100% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-danger" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="Legalservices" role="tabpanel" aria-labelledby="Legalservices-tab">
                <div class="mb-3">
                    <h4>Legal Services</h4>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                        <div class="project-box"><span class="badge badge-primary">Legal Services</span>
                            <h6>Endless admin Design</h6>
                            <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                            <div class="flex-grow-1">
                                <p class="mb-0">Themeforest, australia</p>
                            </div>
                            </div>
                            <p>Endless Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                            <div class="row details">
                            <div class="col-6"><span>Issues </span></div>
                            <div class="col-6 font-primary">12 </div>
                            <div class="col-6"> <span>Resolved</span></div>
                            <div class="col-6 font-primary">5</div>
                            <div class="col-6"> <span>Comment</span></div>
                            <div class="col-6 font-primary">7</div>
                            </div>
                            <div class="customers">
                            <ul>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                <li class="d-inline-block ms-2">
                                <p class="f-12">+10 More</p>
                                </li>
                            </ul>
                            </div>
                            <div class="project-status mt-4">
                            <div class="d-flex mb-0">
                                <p>70% </p>
                                <div class="flex-grow-1 text-end"><span>Done</span></div>
                            </div>
                            <div class="progress" style="height: 5px">
                                <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                    <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Universal admin Design</h6>
                        <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title="">
                        <div class="flex-grow-1">
                            <p class="mb-0">Envato, australia</p>
                        </div>
                        </div>
                        <p>Universal Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                        <div class="row details">
                        <div class="col-6"><span>Issues </span></div>
                        <div class="col-6 font-primary">24</div>
                        <div class="col-6"> <span>Resolved</span></div>
                        <div class="col-6 font-primary">24</div>
                        <div class="col-6"> <span>Comment</span></div>
                        <div class="col-6 font-primary">40</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+3 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="d-flex mb-0">
                            <p>100% </p>
                            <div class="flex-grow-1 text-end"><span>Done</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                    <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Poco admin Design</h6>
                        <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                        <div class="flex-grow-1">
                            <p class="mb-0">Envato, australia</p>
                        </div>
                        </div>
                        <p>poco Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                        <div class="row details">
                        <div class="col-6"><span>Issues </span></div>
                        <div class="col-6 font-primary">40</div>
                        <div class="col-6"> <span>Resolved</span></div>
                        <div class="col-6 font-primary">40</div>
                        <div class="col-6"> <span>Comment</span></div>
                        <div class="col-6 font-primary">20</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+2 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="d-flex mb-0">
                            <p>100% </p>
                            <div class="flex-grow-1 text-end"><span>Done</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                    <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Tivo admin Design</h6>
                        <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                        <div class="flex-grow-1">
                            <p class="mb-0">Envato, australia</p>
                        </div>
                        </div>
                        <p>Tivo Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                        <div class="row details">
                        <div class="col-6"><span>Issues </span></div>
                        <div class="col-6 font-primary">24</div>
                        <div class="col-6"> <span>Resolved</span></div>
                        <div class="col-6 font-primary">24</div>
                        <div class="col-6"> <span>Comment</span></div>
                        <div class="col-6 font-primary">40</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+3 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="d-flex mb-0">
                            <p>100% </p>
                            <div class="flex-grow-1 text-end"><span>Done</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                    <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Enzo admin Design</h6>
                        <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                        <div class="flex-grow-1">
                            <p class="mb-0">Themeforest, australia</p>
                        </div>
                        </div>
                        <p>Enzo Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                        <div class="row details">
                        <div class="col-6"><span>Issues </span></div>
                        <div class="col-6 font-primary">12 </div>
                        <div class="col-6"> <span>Resolved</span></div>
                        <div class="col-6 font-primary">5</div>
                        <div class="col-6"> <span>Comment</span></div>
                        <div class="col-6 font-primary">7</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+10 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="d-flex mb-0">
                            <p>70% </p>
                            <div class="flex-grow-1 text-end"><span>Done</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 box-col-33 col-md-6">
                    <div class="project-box"><span class="badge badge-primary">Doing</span>
                        <h6>Xolo admin Design</h6>
                        <div class="d-flex"><img class="img-20 me-2 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title="">
                        <div class="flex-grow-1">
                            <p class="mb-0">Envato, australia</p>
                        </div>
                        </div>
                        <p>Xolo Admin is a full featured, multipurpose, premium bootstrap admin template.</p>
                        <div class="row details">
                        <div class="col-6"><span>Issues </span></div>
                        <div class="col-6 font-primary">40</div>
                        <div class="col-6"> <span>Resolved</span></div>
                        <div class="col-6 font-primary">40</div>
                        <div class="col-6"> <span>Comment</span></div>
                        <div class="col-6 font-primary">20</div>
                        </div>
                        <div class="customers">
                        <ul>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                            <li class="d-inline-block ms-2">
                            <p class="f-12">+2 More</p>
                            </li>
                        </ul>
                        </div>
                        <div class="project-status mt-4">
                        <div class="d-flex mb-0">
                            <p>100% </p>
                            <div class="flex-grow-1 text-end"><span>Done</span></div>
                        </div>
                        <div class="progress" style="height: 5px">
                            <div class="progress-bar-animated bg-primary" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection