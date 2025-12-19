<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>@lang('main.profile')</title>
</head>
<body>
<header>
    @include('layout/header')
</header>
<div class="greenscreen">
    <h1>@lang('main.my_data')</h1>
</div>
<div class="profile_info">
    @php
        $user = Illuminate\Support\Facades\Auth::user()
    @endphp
    <h1 id="fio">@lang('main.name'): {{$user->name}}</h1>
    <h1 id="city">@lang('main.city') {{$user->city}}</h1>
    <h1 id="email">@lang('main.email') {{$user->email}}</h1>
</div>
<div class="greenscreen">
    <h1>@lang('main.my_orders')</h1>
</div>
<container class="my_orders">
 @foreach($orders as $order)
     @include('layout/orders')
 @endforeach

</container>
<footer style="margin-top: 43px;">
    @include('layout/footer')
</footer>
</body>
</html>
