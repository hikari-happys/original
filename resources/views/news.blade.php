@extends('meta.head')
@extends('meta.footer')


<main id="news">

<div class="title">News</div>

<div class="frame">


    <div class="news_box">
         <div class="news_pict"><img class="news_top_image" src="{!! asset('/img/top_01.jpg') !!}" alt=""></div>
            <div class="news_text">
                <p>{{$newses->news_text}}</p>
            </div>
    </div>





</div>
