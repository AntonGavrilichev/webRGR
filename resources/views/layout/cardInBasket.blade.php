<div class="cart_item">
    <img src="{{$product->image}}" alt="">
    <div class="cart_item_discription">
        <h1 name="item_name">{{$product->__('name')}}</h1>
        <p>{!! $product->__('subtitle') !!}</p>
        <h2><b>{{$product->getPriceForCount()}} р</b></h2>
    </div>

    <div class="cart_plus_minus">
        <!-- Форма для уменьшения количества товара на 1 -->
        <form action="{{ route('basket.deleteItem', ['id' => $product->id]) }}" method="POST">
            @method('delete')
            @csrf
            <button style="background:none; border:none; padding:0;">
                <img src="img\minus_cart.svg" title="УМЕНЬШИТЬ КОЛИЧЕСТВО ДАННОГО ТОВАРА НА 1">
            </button>
        </form>
        <h1>{{$product->pivot->count}}</h1>
        <!-- Форма для увеличения количества товара на 1 -->
        <form action="{{ route('basket.addItem', ['id' => $product->id]) }}" method="POST">
            @csrf
            <button style="background:none; border:none; padding:0;">
                <img src="img\plus_cart.svg" title="УВЕЛИЧИТЬ КОЛИЧЕСТВО ДАННОГО ТОВАРА НА 1">
            </button>
        </form>
    </div>


    <form action="{{ route('basket.deleteItem', ['id' => $product->id]) }}" method="POST">
        @method('delete')
        @csrf
        <button style="background:none; border:none; padding:0;">
            <img id="trashicon" src="img\trashicon_black.png" title="УДАЛИТЬ ТОВАР ИЗ КОРЗИНЫ">
        </button>
    </form>
</div>
