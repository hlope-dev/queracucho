@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
