<div class="cart_item">
    <img src="{{$product->image}}" alt="">
    <div class="cart_item_discription">
        <h1 name="item_name">{{ $product->__('name') }}</h1>
        <p>{{$product->__('subtitle')}}</p>
        <div class="price_amount_line">
            <h2><b>{{$product->price}} p.</b></h2>
            <h3>{{$product->pivot->count}} шт. </h3>
        </div>
    </div>
</div>
