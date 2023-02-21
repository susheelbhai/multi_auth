<section class="popular-categories">
    <div class="container">
        <div class="sec-title">
            <h2><span>Popular </span>Categories</h2>
        </div>
        <div class="row">
            @foreach ($categories as $i)
            <div class="col-lg-3 col-md-6 remb-30  mt-4" data-aos="zoom-in">
                <div class="popular-categories-item"> <span class="step-point">01</span>
                    <i class="{{ $i->icon }}"></i>
                    <h3>{{ $i->name }}</h3>
                    <p>500 Listings</p>
                </div>
            </div>
            @endforeach
            
        </div>
        
    </div>
</section>