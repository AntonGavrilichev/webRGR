<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>jewellery shop _ catalog</title>
</head>
<body>

<header>
    @include('layout/header')
</header>

<container class="admin_orders_anchors">
    <a href="#order_tracking"><img src="img\icontracking.svg" alt=""></a>
    <a href="#order_delivered"><img src="img\icondelivered.svg" alt=""></a>
    <a href="#order_accepted"><img src="img\iconaccepted.svg" alt=""></a>
</container>

<!-- тут кнопочка для поднятия наверх -->
<button id="scrollToTopButton" class="scroll-to-top-button">@lang('main.up')</button>
<script>
    @vite(['resources/js/scrollButton.js'])
</script>

<div class="greenscreen">
    <h1 id="order_tracking">@lang('admin.completed_ord')</h1>
</div>
<container class="my_orders">
    @foreach($orders as $order)
        @if($order->status == 1)
            @include('layout/ordersAdmin')
        @endif
    @endforeach
</container>

<!--
<div class="greenscreen">
    <h1 id="order_tracking">@lang('admin.in_the_way_ord')</h1>
</div>
<container class="my_orders">
   @foreach($orders as $order)
       @if($order->status == 2)
       @include('layout/ordersAdmin')
        @endif
   @endforeach
</container>

<div class="greenscreen">
    <h1 id="order_delivered">@lang('admin.accepted_point')</h1>
</div>
<container class="my_orders">

{{--Сменить статус--}}

    @foreach($orders as $order)
        @if($order->status == 3)
        @include('layout/ordersAdmin')
        @endif
    @endforeach

</container>

<div class="greenscreen">
    <h1 id="order_accepted">@lang('admin.issued_orders')</h1>
</div>
<container class="my_orders">

    {{--Сменить статус--}}

    @foreach($orders as $order)
        @if($order->status == 4)
        @include('layout/ordersAdmin')
        @endif
    @endforeach
-->

</container>
<footer>
    @include('layout/footer')
</footer>
</body>
</html>
