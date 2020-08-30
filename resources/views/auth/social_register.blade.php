@extends('app')

@section('title', 'ユーザー登録')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <div class="card mt-3">
                <div class="card-body text-center">
                    <h2 class="h3 card-title text-center mt-2">ユーザー登録</h2>

                    @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('register.{provider}', ['provider' => $provider]) }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="md-form">
                                <label for="name">ユーザー名 (1〜32文字)</label>
                                <input class="form-control" type="text" id="name" name="name" required>

                            </div>
                            <div class="md-form">
                                <label for="email">メールアドレス</label>
                                <input class="form-control" type="text" id="email" name="email" value="{{ $email }}"
                                    disabled>
                            </div>
                            <button class="btn btn-block btn-mdb-color mt-2 mb-2" type="submit">ユーザー登録</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection