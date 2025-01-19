@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">

    <nav class="detail__nav">
        <a href="" class="nav--page">商品一覧</a> > キウイ
    </nav>

    <div class="detail__contents">
        <div class="detail__contents--flex">
            <div class="content__item--img-parts">
                <div class="content__item">
                    <div class="content__item--img">
                        <img class="img--display" src="{{ asset('storage/img/kiwi.png') }}" alt="キウイ">
                        <label for="uplode" class="content__custom--button">ファイルを選択</label>
                        <input id="uplode" class="content__content--button" type="file" hidden>
                    </div>
                    <div class="content__item--error">

                    </div>
                </div>
            </div>

            <div class="content__item--text-parts">
                <div class="content__item">
                    <div class="content__item--product">
                        <span class="content__item--name">商品名</span>
                        <input type="text" class="content__item--form" placeholder="商品名を入力">
                    </div>
                    <div class="content__item--error">

                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item--product">
                        <span class="content__item--name">値段</span>
                        <input type="text" class="content__item--form" placeholder="値段を入力">
                    </div>
                    <div class="content__item--error">

                    </div>
                </div>
                <div class="content__item">
                    <div class="content__item--product">
                        <span class="content__item--name">季節</span>
                        <div class="radio--group">
                            <input class="content__item--radio" type="checkbox">春
                            <input class="content__item--radio" type="checkbox">夏
                            <input class="content__item--radio" type="checkbox">秋
                            <input class="content__item--radio" type="checkbox">冬
                        </div>
                    </div>
                    <div class="content__item--error">

                    </div>
                </div>
            </div>
        </div>
        <div class="content__item">
            <div class="content__item--product">
                <span class="content__item--name">商品説明</span>
                <textarea class="content__item--text" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="content__item--error">

            </div>
        </div>

        <div class="content__button">
            <button class="content__button--back" type="submit">戻る</button>
            <button class="content__button--change" type="submit">変更を保持
            </button>
        </div>
    </div>
</div>
</div>
@endsection