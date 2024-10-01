@php
$label ??= null;
$type ??= 'text';
$class ??= null;
$name ??= '';
$value ??= '';
@endphp

<div @@class(['form-group', $class])>
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror">{{ old($name, $value)}}</textarea>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="form-control @error($name) is-invalid @enderror" value="{{ old($name, $value)}}">
    @endif
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
