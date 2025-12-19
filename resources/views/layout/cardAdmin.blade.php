<div class="admin_catalog_itemcardback">
    <img class="itempic" src="{{$product->image}}" alt="">
    <div class="admin_catalog_discription">
        <h1 name="item_name">{{$product->__('name')}}</h1>
        <p>{{$product->__('subtitle')}}</p>
        <h2>{{$product->price}} р</h2>
        <h3>@lang('main.in_stock'){{$product->quantity}}@lang('main.pc')</h3>
        <div class="admin_catalog_buttons">
            <a href={{route('admin.edit_product', ['id' => $product->id]) }}><button>@lang('main.edit')</button></a>
            <form action="{{route('admin.delete_product',['id' => $product->id])}}" method="POST">
                @csrf
                @method('delete')
                <a href="{{route('admin.delete_product',['id' => $product->id])}}"><button>@lang('main.delete')</button></a>
            </form>
        </div>
    </div>
</div>
