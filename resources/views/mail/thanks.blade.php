@include('meta.head')
@extends('meta.footer')

<main id="mail">

    <div class="title">お問い合わせ</div>
    <div class="recruit_item_title">完了画面</div>

<div class="frame">

    <div class="contact_page_title">{{ __('送信完了') }}</div>

    <div class="contact_button_top">
        <a class="send_button_top" href="{{ action('HelloController@index') }}">
            TOPへ戻る
        </a>
    </div>

</div>

</main>
