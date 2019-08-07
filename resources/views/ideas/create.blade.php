@extends('layout')

@section('title', __('actions.create') . ' ' . __('models.idea'))

@section('body')
    <div class="wrapper my-3">
        <div class="box">
            <form method="POST" action="/ideas">
                {{ csrf_field() }}
                <div class="box__section">
                    <div class="input input--small">
                        <label>{{ __('fields.type') }}</label>
                        <select name="type">
                            <option value="bug">{{ __('fields.bug_or_error') }}</option>
                            <option value="feature_request">{{ __('fields.feature_request_or_suggestion') }}</option>
                        </select>
                        @include('partials.validation_error', ['payload' => 'type'])
                    </div>
                    <div class="input input--small">
                        <label>{{ __('fields.body') }}</label>
                        <textarea name="body"></textarea>
                        @include('partials.validation_error', ['payload' => 'body'])
                    </div>
                    <button class="button">{{ __('actions.submit') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
