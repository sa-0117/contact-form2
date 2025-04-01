@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group__title">
                <span class="form-label__item">お名前
                </span>
                <span class="form-label__required">必須</span>
            </div>
            <div class="form-group__content">
                <div class="form-input__text">
                    <input type="text" name="name"  placeholder="テスト太郎" />
                </div>
                <div class="form-error">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group__title">
                <span class="form-label__item">メールアドレス
                </span>
                <span class="form-label__required">必須</span>
            </div>

            <div class="form-group__content">
                <div class="form-input__text">
                    <input  type="email" name="email" value="" placeholder="test@example.com" />
                </div>
                <div class="form-error">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group__title">
                <span class="form-label__item">電話番号
                </span>
                <span class="form-label__required">必須</span>
            </div>
            <div class="form-group__content">
                <div class="form-input__text">
                    <input  type="tel" name="tel" value="" placeholder="0901234567" />
                </div>
                <div class="form-error">
                </div>
            </div>
        </div>    
        <div class="form-group">
            <div class="form-group__title">
                <span class="form-label__item">お問い合わせ内容</span>
            </div>
            <div class="form-group__content">
                <div class="form-textarea__text">
                    <textarea name="content" placeholder="資料をいただきたいです"></textarea>
                </div>
            </div>
        </div>

        <div class="form-button">
            <button class="button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection
