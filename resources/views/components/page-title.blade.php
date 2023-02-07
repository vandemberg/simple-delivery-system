<div class="w-full flex flex-row justify-between">
    <h2>
      @if(isset($attributes['backLink']))
        <a href="{{ $attributes['backLink'] }}"><i class="fas fa-arrow-left mr-2"></i></a>
      @endif

      {{ $attributes['title']}}
    </h2>

    {{ $slot }}
</div>
