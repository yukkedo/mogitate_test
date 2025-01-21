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
            <a class="addition--item" href="/products/register">+ 商品を追加</a>
        </div>
        <div class="product-list__item">
            @foreach($products as $product)
            <div class="product-list__group">
                <div class="product-list-img">
                    <a href="{{ route('product.detail', $product->id) }}"><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"></a>
                </div>
                <div class="product-list__type">
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="product__paginate">
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection