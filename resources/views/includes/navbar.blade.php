<div class="row">
    <div class="col-md-3">
        <div class="categoires" id="navbar">
            <div class="cat-title">
                <i class="fas fa-bars"></i>
                <span class="title">ALL CATEGORIES</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="cat-list">
                <ul>
                    @foreach ($side_categories as $category)
                        <div class="li-content">
                            <li>
                                <i class="fas fa-tv"></i>
                                <p> {{ $category->cat_name }} </p>
                            </li>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="custom-navbar">
            <span class="fas fa-home"></span>
            <h4> <a style="color:#5ea606" href="{{ route('index') }}"> HOME </a> </h4>
            <h4><a href="{{ route('shop') }}"> SHOP </a></h4>
            <h4> <a href="{{ route('about-us') }}"> ABOUT US </a> </h4>
            <h4>CONTACT US</h4>
        </div>
    </div>
</div>