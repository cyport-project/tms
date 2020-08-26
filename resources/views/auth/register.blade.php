@extends('layouts.base')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">登録</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        -->
                        <div class="form-group row">
                            <label for="s_id" class="col-md-4 col-form-label text-md-right">社員ID</label>

                            <div class="col-md-6">
                                <input id="s_id" type="text" class="form-control @error('email') is-invalid @enderror" name="s_id" value="{{ old('s_id') }}" required autocomplete="s_id">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">確認用パスワード</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mode" class="col-md-4 col-form-label text-md-right">権限モード</label>
                            <div class="col-md-6">
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" id="inlineRadio01" name="mode" value="1" checked="checked">
                                 <label class="form-check-label" for="inlineRadio01">スタッフ</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" id="inlineRadio02"  name="mode" value="2" >
                                 <label class="form-check-label" for="inlineRadio02">事務</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" id="inlineRadio03"  name="mode" value="3" >
                                 <label class="form-check-label" for="inlineRadio03">営業</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" id="inlineRadio04"  name="mode" value="9" >
                                 <label class="form-check-label" for="inlineRadio04">管理者</label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    登録
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
