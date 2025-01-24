@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="detail__page">
        <nav class="detail__nav">
            <a href="/products" class="nav--page">商品一覧</a> > {{ $product->name }}
        </nav>

        <form class="detail__contents" action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="detail__contents--flex">
                <div class="content__item--img-parts">
                    <div class="content__item">
                        <div class="content__item--img">
                            <img class="img--display" name="image" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            <label for="uplode" class="content__custom--button">ファイルを選択</label>
                            <input id="uplode" class="content__content--button" type="file" hidden>
                        </div>
                        <div class="content__item--error" style="color: red;">
                            @error('image')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="content__item--text-parts">
                    <div class="content__item">
                        <div class="content__item--product">
                            <span class="content__item--name">商品名</span>
                            <input type="text" class="content__item--form" name="name" placeholder="商品名を入力" value="{{ old('name', $product->name) }}">
                            <input type="hidden" name="id" value="{{ $product['id'] }}">
                        </div>
                        <div class="content__item--error" style="color: red;">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class=" content__item">
                        <div class="content__item--product">
                            <span class="content__item--name">値段</span>
                            <input type="text" class="content__item--form" name="price" placeholder="値段を入力" value="{{ old('price', $product->price) }}">
                            <input type="hidden" name="id" value="{{ $product['id'] }}">
                        </div>
                        <div class="content__item--error" style="color: red;">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="content__item">
                        <div class="content__item--product">
                            <span class="content__item--name">季節</span>
                            <div class="radio--group">
                                <input class="content__item--radio" type="checkbox" name="season[]" value="春" {{ in_array('春', $seasons->pluck('name')->toArray()) ? 'checked' : '' }}>春
                                <input class="content__item--radio" type="checkbox" name="season[]" value="夏" {{ in_array('夏', $seasons->pluck('name')->toArray()) ? 'checked' : '' }}>夏
                                <input class="content__item--radio" type="checkbox" name="season[]" value="秋" {{ in_array('秋', $seasons->pluck('name')->toArray()) ? 'checked' : '' }}>秋
                                <input class="content__item--radio" type="checkbox" name="season[]" value="冬" {{ in_array('冬', $seasons->pluck('name')->toArray()) ? 'checked' : '' }}>冬
                                <input type="hidden" name="id" value="{{ $product['id'] }}">
                            </div>
                        </div>
                        <div class="content__item--error" style="color: red;">
                            @error('season')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="content__item">
                <div class="content__item--product">
                    <span class="content__item--name">商品説明</span>
                    <textarea class="content__item--text" name="description" placeholder="商品の説明を入力">{{ old('description', $product->description) }}"</textarea>
                </div>
                <div class="content__item--error" style="color: red;">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="content__button">
                <a class="content__button--back" href="/products">戻る</a>
                <button class="content__button--change">変更を保持</button>
            </div>
        </form>
        <form class="delete__contents" action="{{ route('products.delete', $product->id) }}" method="post">
            @method('DELETE')
            @csrf
            <div class="content__button">
                <input type="hidden" name="id" value="{{ $product['id'] }}">
                <button class="content__button--delete">
                    <i class="fa-solid fa-trash" style="color: #fd0707;"></i>
                </button>
            </div>
        </form>
    </div>

</div>
</div>
</div>
@endsection