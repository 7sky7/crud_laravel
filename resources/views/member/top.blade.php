<body>

<div style="width: 500px; margin: 100px auto;">
<div style="text-align:right;">

<a href='/member/create'>>>登録</a>
</div>
<div>
<h1>会員一覧画面</h1>

<table border="1" style="margin: 10px">

<tr>
    <th>ID</th>
    <th>名前</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
    <th>  </th>
</tr>
@foreach($members as $member)
<tr>
    <td>{{$member->id}}</td>
    <td>{{$member->name}}</td>
    <td>{{$member->phone}}</td>
    <td>{{$member->email}}</td>
    <td><th><a href='/member/edit/{{$member->id}}'>>>編集</a></th></td>
</tr>
@endforeach
</table>
</div>
</div>