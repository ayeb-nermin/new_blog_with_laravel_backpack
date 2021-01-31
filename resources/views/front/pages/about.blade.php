<!-- ======= About Section ======= -->
<div id="about" class="paddsection">
    <div class="container">
       @php
        $about= App\Models\About::where('is_active',1)->first();
       @endphp
       @if($about)
       {!!$about->content!!}
       @endif
    </div>
</div>
<!-- End About Section -->