<p>
    下記の内容でお問い合わせがありました<br>
</p>

@component('mail::message')


[ お問い合わせ内容 ]
<p>名前：{{ $name }}さん</p>
<p>名前：{{ $name_kana }}さん</p>
<p>メールアドレス：{{ $mailaddress }}</p>
<p>電話番号：{{ $phonenumber }}さん</p>
<p>---以下メッセージが送信されました---</p>
<p>
    内容 : {{ $inquiry}}
</p>



@endcomponent
