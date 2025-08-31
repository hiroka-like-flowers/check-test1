<!DOCTYPE html>
<html lang="ja">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>


<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                FashionablyLate
            </a>
        </div>
        <form action="/register" method="get">
            <div class="login__button">
                <button class="login__button-submit">register</button>
            </div>
        </form>
    </header>
    <main>
        <div class="admin-form__content">
            <div class="admin-form__heading">
                <h2>Admin</h2>
            </div>
            <div class="form__group">
                <div class="form__group--item">
                    <form method="GET" action="{{ route('searchproduct') }}">
                        <div class="form__group-name">
                            
                        </div>
                    </form>
                </div>
                <form action=""></form>
                <div class="form__input--name">
                    <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" />
                </div>
                <div class="form__input--gender">
                    
                </div>
            </div>
        </div>


    </main>

</html>
