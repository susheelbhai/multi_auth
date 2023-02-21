<div class="partners bg-gray">
    <div class="container">
        <div class="sec-title">
            <h2><span>Important </span>Links</h2>
            <p>The Companies That Represent Us.</p>
        </div>
        <div class="owl-carousel style2">
            @foreach ($important_links as $i)
            <div class="owl-item" data-aos="fade-up"><img src="{{ asset('storage/common/images/important_link/')}}/{{ $i->image }}" alt=""></div>
            @endforeach
        </div>
    </div>
</div>