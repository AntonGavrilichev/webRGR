<div class="itemcardback">
<img class="itempic" src="{{$product->image}}" alt="">
    <div id="discription">
        <h1 name="item_name">{{ $product->__('name') }} </h1>
        <p>{{ $product->__('subtitle') }}.</p>
        <div class="add_to_cart">
            <h2>{{ $product->price }}р</h2>
            <form action="{{route('basket.addItem', $product)}}" method="POST">
                @csrf
            <button type="submit">@lang('main.toBasket')</button>
            </form>
        </div>
    </div>
</div>
