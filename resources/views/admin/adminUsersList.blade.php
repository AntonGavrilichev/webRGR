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

<!-- тут кнопочка для поднятия наверх -->
<button id="scrollToTopButton" class="scroll-to-top-button">@lang('main.up')</button>
    @vite(['resources/js/scrollButton.js'])
</script>

<div class="greenscreen">
    <h1>@lang('main.users')</h1>
</div>

<div class="admin_users_block">
    <table>
        <thead>
        <tr>
            <th>@lang('main.name')</th>
            <th>@lang('main.email')</th>
            <th>@lang('main.date_reg')</th>
            <th>@lang('main.city')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr class="white_text">
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->city}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

<footer>
    @include('layout/footer')
</footer>
</body>
</html>
