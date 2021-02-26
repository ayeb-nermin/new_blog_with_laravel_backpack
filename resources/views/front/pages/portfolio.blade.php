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

        @php
        $portfolios = App\Models\Portfolio::where('is_active',1)->orderBy('order','asc')->get();
        @endphp
        @if($portfolios)
        <div class="row portfolio-container">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <img src="{{$portfolio->image}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{$portfolio->title}}</h4>
                    <p>{{$portfolio->description}}</p>
                    <a href="{{$portfolio->image}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="{{route('portfolio.details',$portfolio->id)}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
            @endforeach
        </div>
        @endif

    </div>

</div>
<!-- End Portfolio Section -->