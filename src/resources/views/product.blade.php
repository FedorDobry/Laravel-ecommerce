@extends('master')

@section('title', 'Товар')

@section('content')
    <div class="container">
        <div class="starter-template">
            <h1>{{$product}}</h1>
            <h2>Мобильные телефоны</h2>
            <p>Цена: <b>71990 ₽</b></p>
            <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
            <p>Отличный продвинутый телефон с памятью на 64 gb</p>

            <form action="http://internet-shop.tmweb.ru/basket/add/1" method="POST">
                <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

                <input type="hidden" name="_token" value="HbKaH2m3B1NLVwlKXkwYQ4ZDk7xEU5GuZnCbH8wX"></form>
        </div>
    </div>
@endsection
