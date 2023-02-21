<section class="headings-2 pt-0">
    <div class="pro-wrapper">
        <div class="detail-wrapper-body">
            <div class="listing-title-bar">
                <div class="text-heading text-left">
                    <p class="font-weight-bold mb-0 mt-3">{{ count($data) }} Search results</p>
                </div>
            </div>
        </div>
        <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center grid">
            <div class="input-group border rounded input-group-lg w-auto mr-4 d-none">
                <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                    <option selected>Popularity</option>
                    <option value="1">Average rating</option>
                    <option value="2">Price(low to high)</option>
                    <option value="3">Price(high to low)</option>
                </select>
            </div>
            <div class="sorting-options">
                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                <a href="#" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
            </div>
        </div>
    </div>
</section>