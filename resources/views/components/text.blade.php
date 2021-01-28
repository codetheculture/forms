<input
    type="text"
    name="{{ $name }}"
    value="{{ $value() }}"

    {!! $attributes->merge([
        'id' => $attributes['id'] ?? $name,
        'class' => $errors->has($name) ? config('forms.classes.text_error') : config('forms.classes.text')
    ]) !!}
>
