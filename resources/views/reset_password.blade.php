@extends('layout')

@section('title', __('auth.reset_password'))

@section('body')
    <div class="wrapper wrapper--narrow my-3">
        <h2 class="text-center mb-3">{{ __('auth.reset_password') }}</h2>
        <div class="box">
            <div class="box__section">
                <form method="POST">
                    {{ csrf_field() }}
                    @if ($token)
                        <input type="hidden" name="token" value="{{ $token }}" />
                        <div class="input">
                            <label>Password</label>
                            <input type="password" name="password" />
                        </div>
                        <div class="input">
                            <label>Verify Password</label>
                            <input type="password" name="password_confirmation" />
                        </div>
                    @else
                        <div class="input">
                            <label>E-mail</label>
                            <input type="email" name="email" />
                        </div>
                    @endif
                    <button class="button">{{ __('actions.submit') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
