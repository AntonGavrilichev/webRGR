<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/catalog.css'])
    <link href="https://fonts.cdnfonts.com/css/avenir-next-cyr" rel="stylesheet">
    <link href="https://myfonts.ru/myfonts?fonts=hoefler-text" rel="stylesheet" type="text/css" />
    <title>jewellery shop _ order</title>
</head>
<body>
<div class="greenscreen">
    <h1>заказ - <b>09324865</b></h1>
</div>

<main class="order_block">
    <container class="cartproduct">
        <div class="cart_item">
            <img src="img\chainimg.svg" alt="">
            <div class="cart_item_discription">
                <h1 name="item_name">колечко</h1>
                <p>Очень красивое колецко, всем советую</p>
                <div class="price_amount_line">
                    <h2><b>1200 р</b></h2>
                    <h3>1 шт.</h3>
                </div>
            </div>
        </div>

        <div class="cart_item">
            <img src="img\chainimg.svg" alt="">
            <div class="cart_item_discription">
                <h1 name="item_name">колечко</h1>
                <p>Очень красивое колецко, всем советую</p>
                <div class="price_amount_line">
                    <h2><b>1200 р</b></h2>
                    <h3>1 шт.</h3>
                </div>
            </div>
        </div>

        <div class="cart_item">
            <img src="img\chainimg.svg" alt="">
            <div class="cart_item_discription">
                <h1 name="item_name">колечко</h1>
                <p>Очень красивое колецко, всем советую</p>
                <div class="price_amount_line">
                    <h2><b>1200 р</b></h2>
                    <h3>1 шт.</h3>
                </div>
            </div>
        </div>
    </container>

    <div class="order_info_block">
        <h1 id="fio">Получатель: Александрова Александра Александровна</h1>
        <h1 id="email">E-mail: alex_alex_alex@mail.ru</h1>
        <h1 id="amount_of_items">Количетсво наименований заказа: 3 шт.</h1>
        <h1 id="final_cost">Сумма к оплате: 3600 р</h1>
        <h1 id="issue_point">Пункт выдачи по адресу:  ул. Университетская 33, г. Севастополь, Россия</h1>
        <h1 id="order_status">Статус заказа: В ПУТИ</h1>
    </div>
</main>
<div class="order_bottom">
    <a href="admin_orders.html" ><button class="make_an_order_button"  >ВЕРНУТЬСЯ К СПИСКУ ЗАКАЗОВ</button></a>
</div>

</body>
</html>
