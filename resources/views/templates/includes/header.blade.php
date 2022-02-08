<header class="uk-background-secondary uk-light uk-box-shadow-large" uk-sticky>

    <div class="uk-container">
        <nav uk-navbar>

            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="{{ url('/') }}">Home page</a></li>
                    <li><a href="#">Categories</a>
                        <div class="uk-navbar-dropdown">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                               <li><a href="{{ url('categories/apples') }}">Apples</a></li>
                               <li><a href="{{ url('categories/bananas') }}">Bananas</a></li>
                               <li><a href="{{ url('categories/limes') }}">Limes</a></li>
                           </ul>
                       </div>
                    </li>
                    
                    @if (Auth::check())
                    <li><a href="{{ url('logout') }}">Logout</a></li>
                    @endif
                </ul>

            </div>

            
            
            
            <div class="uk-navbar-right">

                <div>
                    <a href="{{ url('cart/1') }}" class="uk-button uk-button-default uk-position-relative" type="button" >
                        cart
                    
                        <span class="uk-badge uk-position-absolute" id="shop-cart-count" style="top: -5px; right: -5px;">0</span>
                    </a>
                </div>

            </div>

        </nav>
    </div>
    
</header>