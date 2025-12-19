<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    @vite(['resources/css/catalog.css'])--}}
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>log in</title>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
<style>
    form {
        max-width: 400px;
    }
    form input, select, textarea {
        box-sizing: border-box;
        width: 100%;
        display: block;
    }
</style>
<div>
    <article>
        <h1>РЕДАКТИРОВАНИЕ ТОВАРА</h1>
    </article>
    <form method="post" action="{{route('admin.update_product',['id' => $product->id])}}" enctype="multipart/form-data">
        @csrf
        <div>
            <input name="name" type="text" placeholder="@lang('admin.name_product')" value="{{$product->name}}">
        </div>
        <div>
            <textarea id="ckeditor" name="subtitle" placeholder="@lang('admin.description')">{{$product->subtitle}}</textarea>
        </div>
        <div>
            <select name="category">
                <option value="chain" {{$product->category == 'chain' ? 'selected' : ''}}>
                    @lang('main.chain')
                </option>
                <option value="bracelet" {{$product->category == 'bracelet' ? 'selected' : ''}}>
                    @lang('main.bracelet')
                </option>
                <option value="ring" {{$product->category == 'ring' ? 'selected' : ''}}>
                    @lang('main.ring')
                </option>
                <option value="earrings" {{$product->category == 'earrings' ? 'selected' : ''}}>
                    @lang('main.earrings')
                </option>
            </select>
        </div>
        <div>
            <input name="price" type="text" placeholder="@lang('admin.price')" value="{{$product->price}}">
        </div>
        <div>
            <input name="quantity" type="number" min="1" placeholder="@lang('admin.count')" value="{{$product->quantity}}">
        </div>
        <div>
            <input name="popularity" type="number" min="0" max="10" placeholder="@lang('popularity')" value="{{$product->popularity}}">
        </div>
        <div>
            <input name="name_en" type="text" placeholder="@lang('main.local_name')" value="{{$product->name_en}}">
        </div>
        <div>
            <input name="subtitle_en" type="text" placeholder="@lang('main.local_sub')" value="{{$product->subtitle_en}}">
        </div>
        <div>
            <input name="image" type="file"value="{{$product->image}}">
        </div>
        <br/>
        <div>
            <button type="submit" class="butcontact">@lang('admin.save')</button>
        </div>
    </form>
</div>
<script>
    CKEDITOR.replace(document.getElementById('ckeditor'), {
        startupFocus: true,
        toolbar: [
            ['ajaxsave'],
            ['Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink'],
            ['Cut', 'Copy', 'Paste', 'PasteText'],
            ['Undo', 'Redo', '-', 'RemoveFormat'],
            ['TextColor', 'BGColor'],
            ['Maximize', 'Image']
        ],
        autoParagraph: false
    });
</script>
</body>
</html>
