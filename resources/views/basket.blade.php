<!DOCTYPE HTML>
<html lang="en">
@vite(['resources/css/catalog.css'])
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>@lang('main.basket')</title>
</head>
<body>
<header>
    @include('layout/header')
</header>
<div class="greenscreen">
    <h1>@lang('main.added')</h1>
</div>


<button id="scrollToTopButton" class="scroll-to-top-button">@lang('main.up')</button>
<script>
    @vite(['resources/js/scrollButton.js'])
</script>

<main>
    <container class="cartproduct">
        @if(isset($order))
            @foreach($order->products as $product)
                @include('layout/cardInBasket', compact('product'))
            @endforeach
    </container>
</main>
<div class="greyback_main" style="margin-bottom: 95.11px;">
    <h1>@lang('main.amount')<b>{{$order->getFullPrice()}} р.</b></h1>
    @if(Auth::check())
    <a href="{{route('basketPlace.index')}}"><button id="modal-btn" class="make_an_order_button" style="align-self: center;">@lang('main.make_order')</button></a>
    @else
        <a href="{{route('login')}}"><button id="modal-btn" class="make_an_order_button" style="align-self: center;">@lang('main.login')</button></a>
    @endif
</div>
@endif
<footer>
    @include('layout/footer')
</footer>
</body>
</html>
