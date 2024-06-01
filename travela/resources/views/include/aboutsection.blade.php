<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                    <img src="{{ asset('images/' . $abtdata->photo) }}" alt="photo" class="img-fluid w-100 h-100">
                </div>
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">{{$abtdata->title1}}</h5>
                <h1 class="mb-4">{{$abtdata->title}}<span class="text-primary">Travela</span></h1>
                <p class="mb-4">{{$abtdata->content}}</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>