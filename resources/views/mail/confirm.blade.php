@extends('meta.head')
@extends('meta.footer')
<main id="mail">

    <div class="title">お問い合わせ</div>
    <div class="recruit_item_title">入力確認</div>


<form method="POST" action="{{ route('mail.send') }}">
    @csrf
        <div class="confirm_contact">
        <table class="confirm_table">
            <tr>
              <th class="confirm_contact_title">お名前</th>
              <td class="confirm_content_item">{{ $inputs['name'] }}
              <input name="name" value="{{ $inputs['name'] }}" type="hidden"　required></td>
            </tr>

            <tr>
              <th class="confirm_contact_title">メールアドレス</th>
              <td class="confirm_content_item">{{ $inputs['email'] }}
              <input name="email" value="{{ $inputs['email'] }}" type="hidden"　required></td>
            </tr>
            <tr>
              <th class="confirm_contact_title">電話番号</th>
              <td class="confirm_content_item">{{ $inputs['telephone'] }}
              <input name="telephone" value="{{ $inputs['telephone'] }}" type="hidden"　required></td>
            </tr>
            <tr>
              <th class="confirm_contact_title">お問い合わせ内容</th>
              <td class="confirm_content_item">{!! nl2br(e($inputs['body'])) !!}
              <input name="body" value="{{ $inputs['body'] }}" type="hidden"></td>
            </tr>
          </table>
          </div>

<div class="aiueo">
    <div class="contact_button">
        <button type="submit" name="action" value="back" class="back_button">
            入力内容修正
        </button>
    </div>
    <div class="contact_button">
        <button type="submit" name="action" value="submit" class="send_button">
            送信する
        </button>
    </div>
</div>





</form>
</main>
