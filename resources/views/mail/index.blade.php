@extends('meta.head')
@extends('meta.footer')

<main id="mail">

    <div class="title">お問い合わせ</div>
    <div class="recruit_item_title">入力フォーム</div>

    <form method="POST" action="{{ route('mail.confirm') }}">
        @csrf
        <div class="frame">
        <div class="contact">
            <div class="contact_item">
                <dl>
                    <dt>
                        <label class="contact_title_reg">お名前</label>
                    </dt>
                    <dd>
                        <input name="name" value="{{ old('name') }}" type="text" class="contact_text" placeholder="例）サンプル　太郎"　　required>
                        @if ($errors->has('name'))
                            <p class="error-message">{{ $errors->first('name') }}</p>
                        @endif
                    </dd>
                </dl>
            </div>

        <div class="contact_item">
            <dl>
                <dt>
                    <label class="contact_title_reg">メールアドレス</label>
                </dt>
                <dd>
                    <input name="email" value="{{ old('email') }}" type="text" class="contact_text" placeholder="例）sample@sample.com"　required>
                    @if ($errors->has('email'))
                        <p class="error-message">{{ $errors->first('email') }}</p>
                    @endif
                </dd>
            </dl>
        </div>
        <div class="contact_item">
            <dl>
                <dt>
                    <label class="contact_title_reg">電話番号</label>
                </dt>
                <dd>
                    <input name="telephone" value="{{ old('telephone') }}" type="text" class="contact_text" placeholder="例）000-0000-0000"　required>
                    @if ($errors->has('telephone'))
                        <p class="error-message">{{ $errors->first('telephone') }}</p>
                    @endif
                </dd>
            </dl>
        </div>

        <div class="contact_item">
            <dl>
                <dt>
                    <label class="contact_title_any">お問い合わせ内容</label>
                </dt>
                <dd>
                    <textarea name="body" class="text_area">{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <p class="error-message">{{ $errors->first('body') }}</p>
                    @endif
                </dd>
            </dl>
        </div>

        <div class="contact_button">
            <button type="submit" class="send_button">
                入力内容確認
            </button>
        </div>
    </div>
    </form>

</main>
