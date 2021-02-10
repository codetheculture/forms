<input {!! $attributes->merge([
    'id' => $attributes['id'] ?? $name,
    'type' => 'text',
    'name' => $name,
    'value' => $value(),
    'class' => isset($errors) && $errors->has($name) ? config('forms.classes.text_error') : config('forms.classes.text')
]) !!}>
