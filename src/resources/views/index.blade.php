<!-- フォーム入力画面 -->
@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')

<div class="contacts-form__content">
    <div class="contacts-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text-e">
                    <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                </div>
                <div class="form__input-text-d">
                    <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}" />
                </div>
                <div class="form__error">
                    @error('last_name')
                        {{ $message }}
                    @enderror
                    @error('first_name')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text-a">
                    <input type="radio" name="gender" value="{{ old('gender1') }}" />男性
                </div>
                <div class="form__input-text-b">
                    <input type="radio" name="gender" value="{{ old('gender2') }}" />女性
                </div>
                <div class="form__input-text-c">
                    <input type="radio" name="gender" value="{{ old('gender3') }}" />その他
                </div>
                <div class="form__error">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text-f">
                    <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}" />-
                    <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}" />-
                    <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}" />
                </div>
                <div class="form__error">
                    @error('tel1')
                        {{ $message }}
                    @enderror
                    @error('tel2')
                        {{ $message }}
                    @enderror
                    @error('tel3')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
                <div class="form__error">
                    @error('building')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text-i">
                    <select name="category_id">
                        <option selected>選択してください</option>
                        @foreach(categories as $category)
                        <option value="{{ $category->id }}">{{ $category->Test }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-textarea">
                    <input type="textarea" name="detail" placeholder="お問い合わせ内容をご記載してください" value="{{ old('detail') }}">
                </div>
                <div class="form__error">
                    @error('detail')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>







@endsection


