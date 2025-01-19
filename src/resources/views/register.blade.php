@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('content')
<div class="register">
    <div class="register__title">
        <h1>商品登録</h1>
    </div>
    <form class="register-form">
        <div class="form__group">
            <div class="form__item">
                <span class="form__item--name">商品名</span>
                <span class="form__item--required">必須</span>
            </div>
            <div class="form__content">
                <input class="form__content--input" type="text" placeholder="商品名を入力">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__item">
                <span class="form__item--name">値段</span>
                <span class="form__item--required">必須</span>
            </div>
            <div class="form__content">
                <input class="form__content--input" type="text" placeholder="値段を入力">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__item">
                <span class="form__item--name">商品画像</span>
                <span class="form__item--required">必須</span>
            </div>
            <div class="form__content">
                <label for="uplode" class="form__custom--button">ファイルを選択</label>
                <input id="uplode" class="form__content--button" type="file" hidden>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__item">
                <span class="form__item--name">季節</span>
                <span class="form__item--required">必須</span>
                <span class="form__item--radio">※ 複数選択可</span>
            </div>
            <div class="form__content">
                <input class="form__content--radio" type="checkbox">春
                <input class="form__content--radio" type="checkbox">夏
                <input class="form__content--radio" type="checkbox">秋
                <input class="form__content--radio" type="checkbox">冬
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__item">
                <span class="form__item--name">商品説明</span>
                <span class="form__item--required">必須</span>
            </div>
            <div class="form__content">
                <textarea class="form__content--text" placeholder="商品の説明を入力"></textarea>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__button">
            <button class="form__button--back" type="submit">戻る</button>
            <button class="form__button--register">登録</button>
        </div>
    </form>
</div>
@endsection