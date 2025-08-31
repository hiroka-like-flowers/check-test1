<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                FashionablyLate
            </a>
        </div>
        <form action="{{ route('login') }}" method="get">
            <div class="login__button">
                <button class="login__button-submit">login</button>
            </div>
        </form>
    </header>


    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>
            <form class="form" action="{{ route('contact.create') }}" method="get">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="fullname" placeholder="例:山田　太郎" value="{{ $contact['fullname'] }}"/>
                        </div>
                        <div class="form__error">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="email" placeholder="例:test@example.com" value="{{ $contact['email'] }}"/>
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
                        <span class="form__label--item">パスワード</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="password" placeholder="例:coachtechiio6" value="{{ $contact['password'] }}"/>
                        </div>
                        <div class="form__error">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    @foreach(users as $users)
                        <option value="{{ $users->id }}">{{ $users->content }}</option>
                    @endforeach
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit" >登録</button>
                </div>
            </form>
        </div>
    </main>
</body>


</html>



