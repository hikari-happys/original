@extends('meta.head')

<main id="contact">

<div class="title">Contact</div>

<div class="Form">
  <div class="Form-Item">
    <p class="Form-Item-Label">
      <span class="Form-Item-Label-Required">必須</span>会社名
    </p>
    <input type="text" class="Form-Item-Input" placeholder="例）株式会社○○○">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>氏名</p>
    <input type="text" class="Form-Item-Input" placeholder="例）山田太郎">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
    <input type="text" class="Form-Item-Input" placeholder="例）000-0000-0000">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
    <input type="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
    <textarea class="Form-Item-Textarea"></textarea>
  </div>
  <input type="submit" class="Form-Btn" value="送信する">
</div>
