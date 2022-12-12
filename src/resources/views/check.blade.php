<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div>
        <h1>お問い合わせフォーム</h1>
        <form action="/check" method="post" >
            @csrf
            <div class="element_wrap">
                <label>氏名</label>
                <p>{{$name}}</p>
            </div>
            <div class="element_wrap">
                <label>氏名（カナ）</label>
                <p>{{$name_kana}}</p>
            </div>
            <div class="element_wrap">
                <label>メールアドレス</label>
                <p>{{$mailaddress}}</p>
            </div>
            <div class="element_wrap">
                <label>電話番号</label>
                <p>{{$phonenumber}}</p>
            </div>
            <div>
                <label>お問い合わせ内容</label>
                <p>{{ $inquiry }}</p>
            </div>
        </form>
        <form action='/'>
            <input type="submit" value="戻る">
        </form>
        <form action='/OK'>
            @csrf
            <input type="hidden" name="name" value="{{ $name }}" />
            <input type="hidden" name="name_kana" value="{{ $name_kana }}" />
            <input type="hidden" name="mailaddress" value="{{ $mailaddress }}" />
            <input type="hidden" name="phonenumber" value="{{ $phonenumber }}" />
            <input type="hidden" name="inquiry" value="{{ $inquiry }}" />
            <input type="submit" value="送信する">
        </form>
    </body>
</html>

