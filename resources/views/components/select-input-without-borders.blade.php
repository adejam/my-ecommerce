<div class="inputs-container">
    <div class="input-div pass">
        <div class="div">
            <Label for="{{ $input['name'] }}">{{ $input['title'] }}</Label>
            <select name="{{ $input['name'] }}" id="{{ $input['name'] }}" class="input appearance-none"
                data-field_to_target="{{ $input['field_to_target'] }}"
                data-object_to_check="{{ $input['object_to_check'] }}">
                <option value="{{ old($input['value']) }}"></option>
                @foreach ($options as $country => $code)
                    <option value="{{ $country }}">{{ $country . ' ' . $code }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @if ($errors->has($input['name']))
        <span class="" role="alert">
            <strong>{{ $errors->first($input['name']) }}</strong>
        </span>
    @endif
</div>
