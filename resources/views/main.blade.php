<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>MUSIC STORE</title>
</head>

<body>
    <header>
        @include('layout/header')
    </header>
    <!-- тут кнопочка для поднятия наверх -->
    <button id="scrollToTopButton" class="scroll-to-top-button">@lang('main.up')</button>
    <script>
        @vite(['resources/js/scrollButton.js'])
    </script>
    <!--  -->
    <article>
        <h1>MUSIC STORE</h1>
        <h2>your wave is your choice.</h2>
    </article>

    <container class="inf_about_brand_main">
        <div class="back_main">
            <div>
                <h1>@lang('main.about_brand')</h1>
                <p>@lang('main.title1')<br><br>


                    @lang('main.title2')<br><br>

                    @lang('main.title3')</p>
                <h1>@lang('main.our_advantages')</h1>
                <p>@lang('main.advantages1')<br><br>

                    @lang('main.advantages2')<br><br>

                    @lang('main.advantages3')<br><br>

                    @lang('main.advantages4')<br><br>

                    @lang('main.advantages5')</p>
                <h1>@lang('main.final_main')</h1>
            </div>
        </div>
        <img class="img_main" src="img2\guitar.jpg" alt="">
    </container>

    <container id="pluses_main">
        <div class="greyback_main">
            <div class="plus_pic">
                <div class="custom-block">
                    <h2>@lang('main.label1_title')</h2>
                    <p>@lang('main.label1_sub')</p>
                </div>
                <div class="custom-block">
                    <h2>@lang('main.label2_title')</h2>
                    <p>@lang('main.label2_sub')</p>
                </div>
                <div class="custom-block">
                    <h2>@lang('main.label3_title')</h2>
                    <p>@lang('main.label3_sub')</p>
                </div>
            </div>
        </div>
    </container>

    <main class="pop_items">

        <div id="pop_items" class="product">
            <h1 class="section_name">@lang('main.popular_items')</h1>
            <div class="line"></div>
            <container class="item_block">

                @php $count = 0; @endphp
                @foreach($popularProduct as $product)
                @include('layout/card', compact('product'))
                @php $count++; @endphp
                @if ($count == 6) @break @endif
                @endforeach

            </container>
            <div class="line"></div>
        </div>
    </main>

    <container id="boxes">
        <img class="main_bootom_pictures" src="img2\drums_main2.webp" alt="" style="float:left; padding-top:50px; padding-left:50px;">
        <img class="main_bootom_pictures" src="img2\violin_main2.png" style="float:right; padding-top:75px;" alt="">
        <div id="greyback">
            <h1>@lang('main.free_shipping')</h1>
        </div>
    </container>
    <footer>
        @include('layout/footer')
    </footer>
</body>

</html>