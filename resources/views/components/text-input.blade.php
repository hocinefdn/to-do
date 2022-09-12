@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'rounded-md shadow-sm border-red-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50',
]) !!}>
