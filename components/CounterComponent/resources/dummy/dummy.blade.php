<div {{ $attributes->except('class') }} @class([$className, $attributes->get('class')])>
    {{ $slot }}
</div>
