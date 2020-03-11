@extends('+.master')
@section('title','Товар ')
@section('content')
    <div class="starter-template">
        <h1>HTC One S</h1>
        <h2>{{$product}}</h2>
        <h2>Мобильные телефоны</h2>
        <p>Цена: <b>12490 руб.</b></p>
        <img src="http://internet-shop.tmweb.ru/storage/products/htc_one_s.png">
        <p>Зачем платить за лишнее? Легендарный HTC One S</p>

        <form action="/basket/add/3" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

            <input type="hidden" name="_token" value="txEX9GLQe2KPNyrY7w9G3dZ8ziR5Bui4yZENdW37">        </form>
    </div>
@endsection

