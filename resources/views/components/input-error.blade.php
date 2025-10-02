@props(['messages'])

@if ($messages)

        @foreach ((array) $messages as $message)
            <span {{ $attributes->merge(['class' => 'text-danger alert alert-danger']) }}> {{ $message }}</span>
        @endforeach
@endif
