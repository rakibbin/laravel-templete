<!-- Services Start -->
<div class="container-fluid bg-light service py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Searvices</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    @forelse ($serdata as $s)
                        
                    <div class="col-6">
                        <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">{{$s->title}}</h5>
                                <p class="mb-0">{{$s->content}}</p>
                            </div>
                            <div class="service-icon p-4">
                                <i class=""><img src="{{asset('images/'. $s->photo) }}" alt="photo" height="100" ></i>
                            </div>
                        </div>
                    </div>
                    @empty
                        Data not update
                    @endforelse
                </div>
            </div>
            
            <div class="col-12">
                <div class="text-center">
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Service More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->