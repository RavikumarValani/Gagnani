@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'container alert-success mt-5 pt-2 pb-2']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
