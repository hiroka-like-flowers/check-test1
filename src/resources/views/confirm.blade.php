<!-- 入力内容確認画面 -->
@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection


@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>お問い合わせ内容確認</h2>
    </div>
    <form class="form" action="/thanks" method="POST">
        @csrf<!-- actionでフォームを指定することで必ずそのフォームに情報が送信される-->
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        {{ $contact['last_name'] }} {{ $contact['first_name'] }}
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly />
                        <?php
                        if ($contact['gender'] == '1') {
                            echo '男性';
                        } elseif ($contact['gender'] == '2') {
                            echo '女性';
                        } elseif ($contact['gender'] == '3') {
                            echo 'その他';
                        }
                        ?>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        {{ $contact['email'] }}
                        <input type="hidden" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        {{ $contact['tel1'] }}-{{ $contact['tel2'] }}-{{ $contact['tel3'] }}
                        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}" readonly />
                        <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}" readonly />
                        <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        {{ $contact['address'] }}
                        <input type="hidden" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        {{ $contact['building'] }}
                        <input type="hidden" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせの種類</th>
                    <td class="confirm-table__text">
                        {{ $category->name ?? '未選択' }}
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問合せ内容</th>
                    <td class="confirm-table__text">
                        <p>{!! nl2br(e($contact['detail'])) !!}
                        </p>
                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}" readonly />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit" name="update">送信</button>
        </div>
    </form>

    <div class="correct-form">
        <div class="correct-form__button">
            <a href="/" class="correct-form__button-submit" type="submit">修正</a>
        </div>
    </form>
</div>






@endsection


