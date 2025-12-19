<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>Заказ</title>
</head>
<body>
<div class="greenscreen">
    <h1>@lang('main.order')<b>{{$order->id}}</b></h1>
</div>

<main class="order_block">
    <container class="cartproduct">
        @foreach($order->products as $product)
            @include('layout/cardInOrder')
        @endforeach
    </container>

    @php
        $user = Illuminate\Support\Facades\Auth::user()
    @endphp
    <div class="order_info_block">
        <h1 id="fio"> {{$user->name}}</h1>
        <h1 id="email">@lang('main.email'): {{$user->email}}</h1>
        <h1 id="final_cost">@lang('main.amount') {{$order->total_price}}</h1>
        <h1 id="issue_point">@lang('main.city') {{$user->city}}</h1>
        <h1 id="order_status">@lang('main.status_order'): @lang('main.status')</h1>
    </div>
</main>
    @if ($user->isAdmin())
<div class="order_bottom">
    <a href="{{ route('admin.orders_index') }}" ><button class="make_an_order_button">@lang('main.go_to_list_orders')</button></a>
</div>
    @else
        <div class="order_bottom">
            <a href="{{ route('profile.index') }}" ><button class="make_an_order_button">@lang('main.go_to_list_orders')</button></a>
        </div>
        @endif
</body>
</html>
