@extends('layouts.app')

@section('css')
 <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
@stop

@section('barra')
<h2>Alocação E-commerce product list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>E-commerce</a>
                        </li>
                        <li class="active">
                            <strong>Product list</strong>
                        </li>
                    </ol>
@endsection

@section('content')

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="label label-primary pull-right">NEW</span>
                            <h5>IT-01 - Design Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a1.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a2.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a3.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a5.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a6.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">48%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 48%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    12
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    4th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $200,913 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>IT-04 - Marketing Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a4.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a5.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a6.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a8.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">32%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 32%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    24
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    3th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $190,325 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>IT-07 - Finance Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a4.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a8.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">73%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 73%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    11
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    6th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $560,105 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>IT-02 - Developers Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a8.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a4.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a1.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">61%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 61%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    43
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    1th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $705,913 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="label label-warning pull-right">DEADLINE</span>
                            <h5>IT-05 - Administration Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a2.jpg') }}x"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a2.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a6.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a3.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a4.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">14%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 14%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    8
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    7th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $40,200 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>IT-08 - Lorem ipsum Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a1.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a8.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a3.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Many desktop publishing packages and web page editors now use Lorem Ipsum as their. ometimes by accident, sometimes on purpose (injected humour and the like).
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">25%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 25%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    25
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    4th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $140,105 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ibox">
                        <div class="ibox-title">

                            <h5>IT-02 - Graphic Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a3.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a4.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a2.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">82%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 82%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    68
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    2th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $701,400 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>IT-06 - Standard  Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a1.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a2.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a4.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('css/bootstrap.min.css') }}{{ asset('img/a8.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">26%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 26%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    16
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    8th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $160,100 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>IT-09 - Modern Team</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="team-members">
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a2.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a3.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a8.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a6.jpg') }}"></a>
                                <a href="#"><img alt="member" class="img-circle" src="{{ asset('img/a7.jpg') }}"></a>
                            </div>
                            <h4>Info about Design Team</h4>
                            <p>
                                Words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in.
                            </p>
                            <div>
                                <span>Status of current project:</span>
                                <div class="stat-percent">18%</div>
                                <div class="progress progress-mini">
                                    <div style="width: 18%;" class="progress-bar"></div>
                                </div>
                            </div>
                            <div class="row  m-t-sm">
                                <div class="col-sm-4">
                                    <div class="font-bold">PROJECTS</div>
                                    53
                                </div>
                                <div class="col-sm-4">
                                    <div class="font-bold">RANKING</div>
                                    9th
                                </div>
                                <div class="col-sm-4 text-right">
                                    <div class="font-bold">BUDGET</div>
                                    $60,140 <i class="fa fa-level-up text-navy"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
      @endsection
