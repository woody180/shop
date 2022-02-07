<div>
    <div class="uk-card uk-card-default">
        <div class="uk-card-media-top uk-cover-container uk-height-medium">
            <a href="{{ url('products/' . $product->id) }}"> <img class="uk-" src="{{ $product->image }}" alt="" uk-cover> </a>
        </div>
        <div class="uk-card-body">
            <h3 class="uk-card-title uk-margin-remove"><a href="{{ url('products/'.$product->id) }}">{{ $product->title }}</a></h3>
            <p class="uk-margin-remove-top">Price: <span class="uk-text-bold">{{ $product->price }}$</span></p>
            <p class="uk-margin-remove-top">{{ $product->description }}</p>

            <a data-id="{{$product->id}}" href="#" class="uk-button uk-button-primary uk-width-1-1 add-to-cart-button">Add to cart</a>
        </div>
    </div>
</div>