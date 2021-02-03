<div id="footer" class="text-center">
    <div class="container">
        <div class="socials-media text-center">
            @php
            $SocialMedia= App\Models\SocialMedia::where('is_active',1)->orderBy('order','asc')->get();
            @endphp
            @if($SocialMedia)
            <ul class="list-unstyled">
                @foreach($SocialMedia as $sm)
                @if($sm->is_email)
                <li><a href="mailto:{{$sm->url}}"><i class="{{$sm->icon}}"></i></a></li>
                @else
                <li><a href="{{$sm->url}}"><i class="{{$sm->icon}}"></i></a></li>
                @endif
                @endforeach
            </ul>
            @endif
        </div>

        <p>Developed by CodingBeanie 2021</p>
    </div>
</div>
<!-- 
<li><a href="#"><i class="ion-social-twitter"></i></a></li>
<li><a href="#"><i class="ion-social-instagram"></i></a></li>
<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
<li><a href="#"><i class="ion-social-tumblr"></i></a></li>
<li><a href="#"><i class="ion-social-dribbble"></i></a></li> -->