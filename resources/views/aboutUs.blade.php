<!DOCTYPE HTML>
<html lang="en">
<head>
    @vite(['resources/css/catalog.css'])
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>О нас</title>
</head>
<body>
<header>
    @include('layout/header')
</header>
<main id="mainabout">
    <div class="left_right_pic_about_main">
        <img id="handaboutbrand" src="img2\about1.jfif" alt="">
        <div id="infabout">
            <div id="textaboutbrand">
                <p>@lang('main.title1')<br><br>
                    @lang('main.title2')<br><br>
                    @lang('main.title3')</p>
            </div>
        </div>
        <img id="chestaboutbrand" src="img2\about2.jfif" alt="">
    </div>
</main>

<container class="inf_about_brand_aboutpage">
    <h1>@lang('main.our_advantages')</h1>
    <p>@lang('main.advantages1')<br><br>

        @lang('main.advantages2')<br><br>

        @lang('main.advantages3')<br><br>

        @lang('main.advantages4')<br><br>

        @lang('main.advantages5')</p>
    <h1>@lang('main.final_main')</h1>
</container>

<footer>
    @include('layout/footer')
</footer>
</body>
</html>
