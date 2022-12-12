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
        <article class="container">
        <h1>お問い合わせフォーム</h1>
        <div class="row">
            <div class="col">
                @foreach($errors->all() as $e)
                    {{$e}}<br>
                @endforeach
                <form action="/check" method="post">
                    @csrf
                    <div class="row">
                        <label class="col-2 col-form-label" for="name">氏名</label>
                        <div class="col-10">
                            <input type="text" name="name" id="name" class="form-control" placeholder="氏名" value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-2 col-form-label" for="name_kana">氏名（カナ）</label>
                        <div class="col-10">
                            <input type="text" name="name_kana" id="name_kana" class="form-control" placeholder="氏名（カナ）"value="{{old('name_kana')}}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-2 col-form-label" for="mailaddress">メールアドレス</label>
                        <div class="col-10">
                            <input type="text" name="mailaddress" id="mailaddress" class="form-control" placeholder="メールアドレス"value="{{old('mailaddress')}}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-2 col-form-label" for="phonenumber">電話番号</label>
                        <div class="col-10">
                            <input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="電話番号"value="{{old('phonenumber')}}">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-2 col-form-label" for="inquiry">お問い合わせ内容</label>
                        <div class="col-10">
                            <input type="text" name="inquiry" id="inquiry" class="form-control" placeholder="お問い合わせ内容"value="{{old('inquiry')}}">
                        </div>
                        <input type="submit"value="送信する">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

