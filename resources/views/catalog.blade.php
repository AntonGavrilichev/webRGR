<!DOCTYPE HTML>
<html lang="en">

<head>
    @vite(['resources/css/catalog.css'])

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>Каталог</title>
</head>

<body>
    <header>
        @include('layout/header')
    </header>
    <div class="greenscreen">
        <h1>@lang('main.catalog')</h1>
    </div>
    <container class="menucactalog">

        <container class="col">
            <container class="horiz">
                <a href="#piano">
                    <div class="image-container">
                        <img src="img2\piano.jfif" alt="">
                        <div class="menucactalog_text">@lang('main.piano')</div>
                    </div>
                </a>
                <a href="#violin">
                    <div class="image-container">
                        <img src="img2\violin.jfif" alt="">
                        <div class="menucactalog_text">@lang('main.violin')</div>
                    </div>
                </a>
                <a href="#drum">
                    <div class="image-container">
                        <img src="img2\drums.jfif" alt="">
                        <div class="menucactalog_text">@lang('main.drum')</div>
                    </div>
                </a>
            </container>

            <container class="horiz">
                <a href="#new">
                    <div class="image-container">
                        <img src="img2\new2.jfif" alt="">
                        <div class="menucactalog_text">@lang('main.new')</div>
                    </div>
                </a>
                <a href="#guitar">
                    <div class="image-container">
                        <img src="img2\guitar2.jfif" alt="">
                        <div class="menucactalog_text">@lang('main.guitar')</div>
                    </div>
                </a>
            </container>
        </container>
    </container>
    <div class="greenscreen"></div>

    <!-- тут кнопочка для поднятия наверх -->
    <button id="scrollToTopButton" class="scroll-to-top-button">@lang('main.up')</button>
    <script>
        @vite(['resources/js/scrollButton.js'])
    </script>
    <!--  -->

    <!-- кольца -->
    <div id="piano" class="product">
        <h1 class="section_name">@lang('main.piano')</h1>
        <div class="line"></div>
        <container class="item_block">

            @foreach($products as $product)
            @if ($product->category === 'piano')
            @include('layout/card', compact('product'))
            @endif
            @endforeach
        </container>
    </div>


    <div id="violin" class="product">
        <h1 class="section_name">@lang('main.violin')</h1>
        <div class="line"></div>
        <container class="item_block">

            @foreach($products as $product)
            @if ($product->category === 'violin')
            @include('layout/card', compact('product'))
            @endif
            @endforeach

    </div>
    </container>
    </div>

    <div id="guitar" class="product">
        <h1 class="section_name">@lang('main.guitar')</h1>
        <div class="line"></div>
        <container class="item_block">

            @foreach($products as $product)
            @if ($product->category === 'guitar')
            @include('layout/card', compact('product'))
            @endif
            @endforeach

        </container>
    </div>

    <div id="drum" class="product">
        <h1 class="section_name">@lang('main.drum')</h1>
        <div class="line"></div>
        <container class="item_block">

            @foreach($products as $product)
            @if ($product->category === 'drum')
            @include('layout/card', compact('product'))
            @endif
            @endforeach

        </container>
    </div>

    <!-- новинки -->
    <div id="new" class="product">
        <h1 class="section_name">@lang('main.new')</h1>
        <div class="line"></div>
        <container class="item_block">

            @foreach($newProducts->take(3) as $product)
            @include('layout/card', compact('product'))
            @endforeach

        </container>
    </div>
    <footer>
        @include('layout/footer')
    </footer>
</body>

</html>