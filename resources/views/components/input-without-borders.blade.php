<div class="inputs-container">
    <div class="input-div pass">
        <div class="div">
            <Label for="{{ $input['name'] }}">{{ $input['title'] }}</Label>
            <input id="{{ $input['name'] }}" value="{{ $input['value'] }}" name="{{ $input['name'] }}"
                type="{{ $input['type'] }}" class="input" autocomplete="{{ $input['name'] }}">
        </div>
    </div>
    @if ($errors->has($input['name']))
        <div class="form-error-div" role="alert">
            <strong>{{ $errors->first($input['name']) }}</strong>
        </div>
    @endif
</div>
