<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ACSEEZ-公式HP-</title>
  <link rel="stylesheet" href="{{asset('css/test.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
</head>
<body>
    <div class="header">
  <div class="header_inner">
      <img class="header_logo" src="{!! asset('/img/logo.jpg') !!}">
    <div class="header_navgroup">
        <a href="{{ action('HelloController@index') }}">
            <div class="header_navitem">TOP</div>
        </a>
        <a href="{{ action('HelloController@detail') }}">
            <div class="header_navitem">COMPANY</div>
        </a>
        <a href="{{ action('HelloController@recruit') }}">
            <div class="header_navitem">RECRUIT</div>
        </a>
        <a href="{{ action('HelloController@news') }}">
            <div class="header_navitem">NEWS</div>
        </a>
        <a href="{{ action('ContactController@index') }}">
            <div class="header_navitem">CONTACT</div>
        </a>
    </div>
  </div>
</div>



</body>
