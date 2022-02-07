@extends('templates.main_layout')

@section('title', 'home')

@section('banner')
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 10:2; autoplay: true; pause-on-hover: false; autoplay-interval: 4000">

    <ul class="uk-slideshow-items">
        <li>
            <img src="https://picsum.photos/id/340/1920/400" alt="" uk-cover>
        </li>
        <li>
            <img src="https://picsum.photos/id/519/1920/400" alt="" uk-cover>
        </li>
        <li>
            <img src="https://picsum.photos/id/819/1920/400" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
@endsection

@section('content')

    <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
    @foreach($products as $product)
        @include('templates.includes.productCard', ['product' => $product])
    @endforeach
    </div>


    <div class="uk-margin-medium-top uk-flex uk-flex-center">
        {{ $products->links() }}
    </div>

@endsection