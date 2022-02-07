@extends('templates.main_layout')



@section('content')

<div class="uk-margin-medium-bottom">
    <h1>{{ $category->title }}</h1>
    <hr class="uk-divider-small" />
</div>

<div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
@foreach($products as $product)
    @include('templates.includes.productCard', ['product' => $product])
@endforeach
</div>

@endsection