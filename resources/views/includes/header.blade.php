<div class="top-bar">
    <a href="{{ route('index') }}">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" />
            <div class="slogan">
                <h4>Apex Medical</h4>
                <p>PARAMEDICAL STORE</p>
            </div>
        </div>
    </a>
    <form action="{{ route('shop') }}" method="get">
        <div class="search-bar">
            <select class="selectpicker" name="category" data-size="10" title="All Category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                @endforeach
            </select>                    
            <input type="text" placeholder="Enter Keyword" name="search" class="form-control" />
            {{-- <button type="submit"> --}}
                <div onclick="javascript:document.forms[0].submit()" class="search-icon" id="submit-search">
                    <i class="fas fa-search"></i>
                </div>
            {{-- </button> --}}
          
        </div>
    </form>
    <div class="headphone">
        <i class="fas fa-headphones-alt headphone-fas"></i>
        <div class="headphone-text">
            <p>Hotline Free:</p>
            <strong>06-900-6789-09</strong>
        </div>
    </div>
    {{-- <div class="account">
        <i class="far fa-user"></i>
        <p>My Account</p>
    </div> --}}
    {{-- <div class="wishlist">
        <div class="circle-count">0</div>
        <i class="far fa-heart"></i>
        <p>My WishList</p>
    </div> --}}
    <a href="{{ route('my_cart') }}">
        <div class="my-cart">
            <div class="circle-count" id="my_cart_count">{{ Cart::count() }}</div>
            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart.svg') }}" />
            <p>My Cart</p>
        </div>
    </a>
</div>