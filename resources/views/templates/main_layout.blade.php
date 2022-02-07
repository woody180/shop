@include('templates.includes.head')
    
    @include('templates.includes.header')

    @yield('banner')

    <section class="uk-section">
        <div class="uk-container">
            @yield('content')
        </div>
    </section>
        
@include('templates.includes.footer')