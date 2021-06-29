@extends('layouts.default')

@section('main')
<!-- hc news -->
<section id="hc_news">
    <h4>HC News</h4>
    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide mt-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner" style="border-radius: 15px;">
            <div class="carousel-item active">
                <img src="{{asset('img/504405.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/504409.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- corporate info -->
<section class="mt-4" id="corporate">
    <h4>Corporate</h4>
    <div class="row mt-3">
        <div class="col">
            <img src="{{asset('img/504405.jpg')}}" class="img-fluid" width="400px" alt="" style="border-radius: 15px;">
        </div>
</section>

<!-- My Menu -->
<section class="mt-4">
    <h4>My Menu</h4>
    <div class="row">
        <div class="col-4 text-center p-3">
            <a class="text-decoration-none text-bluega" data-bs-toggle="collapse" href="#collapsepersonaldata"
                aria-expanded="false" aria-controls="collapsepersonaldata">
                <div class="p-5" style="border-radius: 20px; border: solid 2px; border-color: #1C2D5B;">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h6>MyProfile</h6>
                </div>
                <div class="collapse p-3" id="collapsepersonaldata">
                    <div class="card card-body d-grid gap-2" style="border: solid 1px; border-color: #1C2D5B;">
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="personaldata"
                            role="button"><i><img class="me-2" src="{{asset('img/iconcollapse/personaldata.svg')}}"
                                    alt="" width="20px"></i>Personal Data</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/experience.svg')}}" alt=""
                                    width="20px"></i>Experience</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/training.svg')}}" alt=""
                                    width="20px"></i>Training</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/license.svg')}}" alt=""
                                    width="20px"></i>License</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/personalid.svg')}}" alt=""
                                    width="20px"></i>Personal ID's</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/address.svg')}}" alt=""
                                    width="20px"></i>Address</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/communication.svg')}}" alt=""
                                    width="20px"></i>Communication</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/education.svg')}}" alt=""
                                    width="20px"></i>Education</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/family.svg')}}" alt=""
                                    width="20px"></i>Family</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/bankpayroll.svg')}}" alt=""
                                    width="20px"></i>Bank Payroll</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/cv.svg')}}" alt=""
                                    width="20px"></i>CV</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4 text-center p-3">
            <a class="text-decoration-none text-bluega" data-bs-toggle="collapse" href="#collapsemytime"
                aria-expanded="false" aria-controls="collapsemytime">
                <div class="bg-white p-5" style="border-radius: 20px; border: solid 2px; border-color: #1C2D5B;">
                    <i class="far fa-clock"></i>
                    <h6>My Time</h6>
                </div>
                <div class="collapse p-3" id="collapsemytime">
                    <div class="card card-body d-grid gap-2" style="border: solid 1px; border-color: #1C2D5B;">
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/overtime.svg')}}" alt=""
                                    width="20px"></i>Overtime</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/timedata.svg')}}" alt=""
                                    width="20px"></i>Time Data</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/leave.svg')}}" alt=""
                                    width="20px"></i>Leave</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4 text-center p-3">
            <a class="text-decoration-none text-bluega" data-bs-toggle="collapse" href="#collapseslip"
                aria-expanded="false" aria-controls="collapseslip">
                <div class="bg-white p-5" style="border-radius: 20px; border: solid 2px; border-color: #1C2D5B;">
                    <i class="fas fa-receipt"></i>
                    <h6>Employee Slip</h6>
                </div>
                <div class="collapse p-3" id="collapseslip">
                    <div class="card card-body d-grid gap-2" style="border: solid 1px; border-color: #1C2D5B;">
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/payslip.svg')}}" alt=""
                                    width="20px"></i>Payslip</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/payslip.svg')}}" alt=""
                                    width="20px"></i>Taxslip</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/payslip.svg')}}" alt=""
                                    width="20px"></i>Fataslip</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4 text-center p-3">
            <a class="text-decoration-none text-bluega" data-bs-toggle="collapse" href="#collapsepms"
                aria-expanded="false" aria-controls="collapsepms">
                <div class="bg-white p-5" style="border-radius: 20px; border: solid 2px; border-color: #1C2D5B;">
                    <i class="fas fa-chart-line"></i>
                    <h6>PMS</h6>
                </div>
                <div class="collapse p-3" id="collapsepms">
                    <div class="card card-body d-grid gap-2" style="border: solid 1px; border-color: #1C2D5B;">
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/pms.svg')}}" alt="" width="20px"></i>PMS
                            2018</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/pms.svg')}}" alt="" width="20px"></i>PMS
                            2019</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button"><i><img
                                    class="me-2" src="{{asset('img/iconcollapse/pms.svg')}}" alt="" width="20px"></i>PMS
                            2020</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4 text-center p-3">
            <a class="text-decoration-none text-bluega" data-bs-toggle="collapse" href="#collapseconcession"
                aria-expanded="false" aria-controls="collapseconcession">
                <div class="bg-white p-5" style="border-radius: 20px; border: solid 2px; border-color: #1C2D5B;">
                    <i class="fas fa-plane"></i>
                    <h6>Concession</h6>
                </div>
            </a>
        </div>
        <div class="col-4 text-center p-3">
            <a class="text-decoration-none text-bluega" data-bs-toggle="collapse" href="#collapsemyapp"
                aria-expanded="false" aria-controls="collapsemyapp">
                <div class="bg-white p-5" style="border-radius: 20px; border: solid 2px; border-color: #1C2D5B;">
                    <i class="fas fa-tablet-alt"></i>
                    <h6>MyApp</h6>
                </div>
                <div class="collapse p-3" id="collapsemyapp">
                    <div class="card card-body d-grid gap-2" style="border: solid 1px; border-color: #1C2D5B;">
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button">Nama</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button">Experience</a>
                        <a class="btn btn-outline-bluega rounded-pill text-start" href="#" role="button">Etc</a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

@endsection