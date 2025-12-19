<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <title>Вход</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="account_block">
    <container id="contactform">
        <article>
            <h1>@lang('main.login')</h1>
        </article>

<form method="POST" action="{{ route('login') }}">
    @csrf

    <input class="inputcontact" id="email" type="text" name="email" placeholder="@lang('main.your_email')" required>
    <input class="inputcontact" id="password" type="text" name="password" placeholder="@lang('main.your_password')" required>
    <div>
        <center>
            <button class="butcontact">@lang('main.login')</button>
        </center>
    </div>
    <center>
        <div id="no_account">
            <a href="{{ route('register') }}" id="no_account">@lang('main.no_acc')</a>
    </div>
    </center>
</form>
    </container>
</div>
</body>
</html>
