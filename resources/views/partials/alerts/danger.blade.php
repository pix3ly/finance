<div class="row {{ $payload['classes'] }}" style="
    padding: 15px;
    color: #FFF;
    background: #F86380;
    border-radius: 5px;
">
    <div class="row__column row__column--compact">
        <i class="fas fa-times fa-fw"></i>
    </div>
    <div class="row__column text-center" style="font-weight: 600;">{{ __('messages.' . $payload['message']) }}</div>
</div>
