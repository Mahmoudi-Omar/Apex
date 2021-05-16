<div class="row">
    <div class="col-md-3 categoires-responsive">
        <div class="categoires">
            <div class="cat-title">
                <i class="fas fa-bars"></i>
                <span class="title">ALL CATEGORIES</span>
            </div>
            <div class="cat-list">
                <ul>
                    @foreach ($side_categories as $category)
                        <a href="{{ route('shop','category='.$category->id) }}" >
                            <div class="li-content">
                                <li>
                                    <i class="fas fa-tv"></i>
                                    <p> {{ $category->cat_name }} </p>
                                </li>
                            </div>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9 col-xs-12">
        <div class="custom-navbar">
            <span class="fas fa-home"></span>
            <h4> <a style="color:#5ea606" href="{{ route('index') }}"> HOME </a> </h4>
            <h4><a href="{{ route('shop') }}"> SHOP </a></h4>
            <h4> <a href="{{ route('about-us') }}"> ABOUT US </a></h4>
            <h4>CONTACT US</h4>
        </div>
        <div class="slider-content">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="slider">
                        <div class="slider-img">
                            <img src="{{ asset('assets/images/1603552064.jpg') }}" />
                        </div>
                        <div class="slider-img">
                            <img src="{{ asset('assets/images/1603481671.jpg') }}" />
                        </div>
                        <div class="slider-img">
                            <img src="{{ asset('assets/images/markus-frieauff-IJ0KiXl4uys-unsplash.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="aside-img-slider">
                <img src="{{ asset('assets/images/markus-frieauff-IJ0KiXl4uys-unsplash.jpg') }}" />
            </div>
            <div class="aside-img-bottom-slider">
                <img src="{{ asset('assets/images/markus-frieauff-IJ0KiXl4uys-unsplash.jpg') }}" />
            </div>
        </div>

    </div>
</div>