<h1>会員編集　会員ID;{{$member->id}}</h1>

<div>
名前
{{$member->name}}
</div>

<div>
電話番号
{{$member->phone}}
</div>

<div>
メールアドレス
{{$member->email}}
</div>

<a href='/member/edit/{{$member->id}}'>{{ __('編集') }}</a>
