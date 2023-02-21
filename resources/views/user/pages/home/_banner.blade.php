<section class="header-image d-flex align-items-center parallax-search8 overlay" id="slider">
    <div class="container">
        <div class="row d-flex align-items-center bg8">
            
            <div class="col-lg-6" data-aos="fade-left">
               <h2 class="pl-3">Search your Tax professionals</h2>
               <p class="pl-3">Tax professionals growing  with us</p>
                <!-- Search Form -->
                <div class="trip-search">
                    <form class="form" action="{{ route('listing') }}">
                        <!-- Form Lookin for -->
                        <div class="form-group looking">
                            <div class="first-select wide">
                                <div class="main-search-input-item">
                                    <input type="text" name="search" placeholder="What are you looking for?" value="" />
                                </div>
                            </div>
                        </div>
                        <!--/ End Form Lookin for -->
                        <!-- Form Location -->
                        <div class="form-group looking my-4">
                            <div class="first-select wide">
                                <div class="main-search-input-item">
                                    <input type="text" name="location" placeholder="where are you looking from?" value="" />
                                </div>
                            </div>
                        </div>
                        <!--/ End Form Location -->
                        <!-- Form Categories -->
                        <div class="form-group categories">
                            <select class="nice-select form-control wide" name="category" tabindex="0"><span class="current"><i class="fa fa-list" aria-hidden="true"></i>All Categories</span>
                                <ul class="list">
                                    <option data-value="1" class="option selected " value="">Select Category</option>
                                    @foreach ($categories as $i)
                                    <option data-value="1" class="option">{{ $i->name }}</option>
                                    @endforeach
                                </ul>
                            </select>
                        </div>
                        <!--/ End Form Categories -->
                        <!-- Form Button -->
                        <div class="form-group button">
                            <button type="submit" class="btn">Search</button>
                        </div>
                        <!--/ End Form Button -->
                    </form>
                </div>
                <!--/ End Search Form -->
            </div>

            <div class="col-lg-6 pr-5 ilust" data-aos="fade-right">
                <div class="left wow fadeInLeft">
                    <img src="storage/theme/theme2/images/bg/slider.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
