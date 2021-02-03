<!-- ======= Portfolio Section ======= -->
<div id="portfolio" class="paddsection">

    <div class="container">
        <div class="section-title text-center">
            <h2>My Portfolio</h2>
        </div>
    </div>

    <div class="container">

        <div class="row">
            @php
            $categories= App\Models\PortfolioCategory::where('is_active',1)->orderBy('order','asc')->get();
            @endphp
            @if($categories)
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    @foreach($categories as $category)
                    <li data-filter="{{$category->data_filter}}" class="{{$category->data_filter=='*' ? 'filter-active' : ''}}">{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- End Portfolio Section -->