<a href="{{ route('order.show', ['orderId' => $order->id]) }}">
    <div class="order_card_background">
        <div class="order_card_details">
            <h1>@lang('main.order')<b>{{$order->id}}</b></h1>
            <h1>@lang('main.amount')<b>{{$order->total_price}}</b></h1>
            <h1>@lang('main.city')
                @if ($order->user && $order->user->city)
                    {{$order->user->city}}
                @endif
                </h1>
        </div>
    </div>
</a>