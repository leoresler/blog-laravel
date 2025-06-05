<div {{ $attributes->merge(['class' => ' p-4 text-sm rounded-sm ' . $class]) }} role="alert">
  <span class="font-medium">{{ $title ?? 'title no definido' }}</span> {{ $slot }}
</div>