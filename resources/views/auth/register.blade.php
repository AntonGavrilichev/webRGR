<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    @vite(['resources/css/catalog.css'])
    <title>Регистрация</title>
</head>

<body>
    <div class="account_block">
        <container id="contactform">
            <article>
                <h1>@lang('main.auth.register')</h1>
            </article>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input class="inputcontact" id="name" name="name" type="text" placeholder="@lang('main.your_fio')" required autofocus>
                @if($errors->has('name'))
                    <p style="color: red">{{ $errors->get('name')[0] }}</p>
                @endif
                <input class="inputcontact" id="email" type="text" name="email" placeholder="@lang('main.your_email')" required>
                @if($errors->has('email'))
                    <p style="color: red">{{ $errors->get('email')[0] }}</p>
                @endif
                <input class="inputcontact" id="city" type="text" name="city" placeholder="@lang('main.your_city')" required>
                <input class="inputcontact" id="password" type="text" name="password" placeholder="@lang('main.your_password')" required>
                @if($errors->has('password'))
                    <p style="color: red">{{ $errors->get('password')[0] }}</p>
                @endif
                <div>
                    <center>
                        <button class="butcontact">@lang('main.register')</button>
                    </center>
                </div>
            </form>
        </container>
    </div>
</body>
</html>


