@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="list-page">
    <div class="sideber">
        <div class="sideber__title">
            <h2>商品一覧</h2>
        </div>

        <div class="sideber__search">
            <input class="search--item" type="text" placeholder="商品名で検索">
        </div>
        <div class="sideber__button">
            <button class="search--button" type="submit">検索</button>
        </div>

        <div class="sideber__order">
            <div class="order--title">
                <h3>価格帯で表示</h3>
            </div>
            <div class="order--select">
                <select class="select--group" name="price">
                    <option value="" hidden>価格で並び替え</option>
                    <option>高い順に表示</option>
                    <option>低い順に表示</option>
                </select>
            </div>
        </div>
    </div>

    <div class="product-list">
        <div class="addition__button">
            <button class="addition--item">+ 商品を追加</button>
        </div>
        <div class="list__item">
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/kiwi.png') }}" alt="キウイ"></a>
                </div>
                <div class="list__type">
                    <p>キウイ</p>
                    <p>￥800</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/strawberry.png') }}" alt="ストロベリー"></a>
                </div>
                <div class="list__type">
                    <p>ストロベリー</p>
                    <p>￥1200</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/orange.png') }}" alt="オレンジ"></a>
                </div>
                <div class="list__type">
                    <p>オレンジ</p>
                    <p>￥850</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/watermelon.png') }}" alt="スイカ"></a>
                </div>
                <div class="list__type">
                    <p>スイカ</p>
                    <p>￥700</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/peach.png') }}" alt="ピーチ"></a>
                </div>
                <div class="list__type">
                    <p>ピーチ</p>
                    <p>￥1000</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/muscat.png') }}" alt="マスカット"></a>
                </div>
                <div class="list__type">
                    <p>シャインマスカット</p>
                    <p>￥1400</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/pineapple.png') }}" alt="パイナップル"></a>
                </div>
                <div class="list__type">
                    <p>パイナップル</p>
                    <p>￥800</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/grapes.png') }}" alt="ブドウ"></a>
                </div>
                <div class="list__type">
                    <p>ブドウ</p>
                    <p>￥1100</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/banana.png') }}" alt="バナナ"></a>
                </div>
                <div class="list__type">
                    <p>バナナ</p>
                    <p>￥600</p>
                </div>
            </div>
            <div class="list__group">
                <div class="list-img">
                    <a href=""><img src="{{ asset('storage/img/melon.png') }}" alt="メロン"></a>
                </div>
                <div class="list__type">
                    <p>メロン</p>
                    <p>￥900</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection