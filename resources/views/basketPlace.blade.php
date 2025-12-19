<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>Оформление заказа</title>
</head>
<body>
<header>
    @include('layout/header')
</header>
<div class="greenscreen">
    <h1>@lang('main.checkout')</h1>
</div>

{{--<div id="modal" class="modal" >--}}
{{--    <div class="modal-content">--}}
        <div class="bascket_place_head">
        <p>@lang('main.checkout1')</p>
        <h1>@lang('main.point')</h1>
</div>
        <form class="order_form" action="{{ route('basket.makeOrder') }}" method="POST">
            @csrf
            <div class="order_details">
                <h1>@lang('main.your_order')</h1>
                <h2>@lang('main.count'){{$order->getFullCount()}}@lang('main.pc') </h2>
                <h2>@lang('main.amount') {{$order->getFullPrice()}} р.</h2>
                <h2>@lang('main.outcome'){{$order->getFullPrice()}} р.</h2>
            </div>
            <div>
                <center>
                    <button class="butcontact" type="submit">@lang('main.ordering')</button>
                </center>
            </div>
        </form>
{{--    </div>--}}
{{--</div>--}}

<footer>
    @include('layout/footer')
</footer>
</body>
</html>
