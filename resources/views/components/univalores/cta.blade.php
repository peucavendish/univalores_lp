@props([
    'href' => '#cadastro',
    'variant' => 'primary',
    'label' => 'Quero fazer parte',
])
@php
    $base =
        'ui-button group/button inline-flex items-center justify-center gap-1 rounded-3xl px-5 py-1.5 duration-500 outline-none cursor-pointer border-2';
    $classes =
        $variant === 'outline'
            ? $base .
                ' border-transparent bg-primary text-white hover:bg-transparent hover:border-current hover:text-secondary-500'
            : $base . ' border-transparent bg-primary text-white hover:bg-primary';
@endphp
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    <x-univalores.chevron class="h-6 w-6 shrink-0 duration-500 group-hover/button:-rotate-180" />
    <span>{{ $label }}</span>
</a>
