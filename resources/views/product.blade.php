@extends('templates.main_layout')


@section('content')

<h1>{{ $product->title }}</h1>

<div class="page-body">
    <div class="uk-child-width-1-2@m" uk-grid>
        <div>
            <img src="{{ $product->image }}" alt="alt"/>
        </div>
        
        
        <div>
            <ul class="uk-list uk-list-divider">
                <li>Price: <b>{{ $product->price }}$</b></li>
                <li>{{ $product->description }}</li>
                <li> 
                    <label class="uk-form-label uk-display-block uk-margin-small">Product quantity</label>
                    <input name="product_count" id="quantity-field" class="uk-input uk-width-small" type="number" value="1" min="1" />
                </li>
                <li>
                    <button type="submit" data-id="{{ $product->id }}" class="uk-button uk-button-primary add-to-cart-button">Add to cart</button>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection