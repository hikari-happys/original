<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo App</title>
  <link rel="stylesheet" href="{{asset('css/test.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
  <div class="header_inner">
      <img class="header_logo" src="{!! asset('/img/logo.jpg') !!}">
    <div class="header_navgroup">
        <a href="{{ ('index')}}">
            <div class="header_navitem">TOP</div>
        </a>
        <a href="{{ ('company')}}">
            <div class="header_navitem">COMPANY</div>
        </a>
        <a href="{{ ('recruit')}}">
            <div class="header_navitem">RECRUIT</div>
        </a>
        <a href="{{ ('news')}}">
            <div class="header_navitem">NEWS</div>
        </a>
        <a href="{{ ('contact')}}">
            <div class="header_navitem">CONTACT</div>
        </a>
    </div>
  </div>
</div>


</body>
