<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        @if (isset($attributes['titleLink']))
            <a class="underline" href="{{ $attributes['titleLink'] }}">{{$attributes['title']}}</a> / {{ $attributes['subtitle'] }}
        @else
            {{ $attributes['title'] }}
        @endif
    </h2>

    {{ $slot }}
</x-slot>
