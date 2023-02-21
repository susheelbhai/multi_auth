<aside class="col-lg-4 col-md-12 car">
    <div class="widget">
        <!-- Search Fields -->
        <form class="form">
            <div class="widget-boxed main-search-field">
                <div class="widget-boxed-header">
                    <h4>Filters</h4>
                </div>
                <!-- Search Form -->
                <div class="trip-search">
                    <div class="form">
                        <!-- Form Lookin for -->
                        <div class="form-group looking">
                            <div class="first-select wide">
                                <div class="main-search-input-item">
                                    <input type="text" name="search" placeholder="Enter Keyword..."
                                        value="{{ request()->search }}" />
                                </div>
                            </div>
                        </div>
                        <!--/ End Form Lookin for -->
                        <!-- Form Location -->
                        <div class="form-group looking my-4">
                            <div class="first-select wide">
                                <div class="main-search-input-item">
                                    <input type="text" name="location" placeholder="where are you looking from?"
                                        value="{{ request()->location }}" />
                                </div>
                            </div>
                        </div>
                        <!--/ End Form Location -->

                    </div>
                </div>
                <!--/ End Search Form -->
                <!-- Price Fields -->
                <div class="main-search-field-2 d-none">
                    <!-- Area Range -->
                    <div class="range-slider">
                        <label>60 KM</label>
                        <div id="km" data-min="0" data-max="1300" data-unit="KM"></div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    <!-- Price Range -->
                    <div class="range-slider">
                        <label>Price Range</label>
                        <div id="price-range-km" data-min="0" data-max="600000" data-unit="$"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- More Search Options -->
                {{-- <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Advanced Features" data-close-title="Advanced Features"></a>

            <div class="more-search-options relative">
                <!-- Checkboxes -->
                <div class="checkboxes one-in-row margin-bottom-10">
                    <input id="check-2" type="checkbox" name="check">
                    <label for="check-2">Air Conditioning</label>
                    <input id="check-3" type="checkbox" name="check">
                    <label for="check-3">Swimming Pool</label>
                    <input id="check-4" type="checkbox" name="check">
                    <label for="check-4">Central Heating</label>
                    <input id="check-5" type="checkbox" name="check">
                    <label for="check-5">Laundry Room</label>
                    <input id="check-6" type="checkbox" name="check">
                    <label for="check-6">Gym</label>
                    <input id="check-7" type="checkbox" name="check">
                    <label for="check-7">Alarm</label>
                    <input id="check-8" type="checkbox" name="check">
                    <label for="check-8">Window Covering</label>
                    <input id="check-9" type="checkbox" name="check">
                    <label for="check-9">WiFi</label>
                    <input id="check-10" type="checkbox" name="check">
                    <label for="check-10">TV Cable</label>
                    <input id="check-11" type="checkbox" name="check">
                    <label for="check-11">Dryer</label>
                    <input id="check-12" type="checkbox" name="check">
                    <label for="check-12">Microwave</label>
                    <input id="check-13" type="checkbox" name="check">
                    <label for="check-13">Washer</label>
                    <input id="check-14" type="checkbox" name="check">
                    <label for="check-14">Refrigerator</label>
                    <input id="check-15" type="checkbox" name="check">
                    <label for="check-15">Outdoor Shower</label>
                </div>
                <!-- Checkboxes / End -->
            </div> --}}
                <!-- More Search Options / End -->
                <div class="col-lg-12 no-pds">
                    <div class="at-col-default-mar">
                        <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>

        <!-- Start: Opening hour -->
        <div class="widget-boxed mt-5">
            <div class="widget-boxed-header">
                <h4>  Category</h4>
            </div>
            <div class="widget-boxed-body">
                <div class="side-list">
                    <ul>
                        @foreach ($categories as $i)
                            <a href="{{ $i->name }}">
                                <li> {{ $i->name }} </li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- End: Opening hour -->


    </div>
</aside>
