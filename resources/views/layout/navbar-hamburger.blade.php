<button
    {{ $attributes->merge([
        'id' => 'navbarToggler',
        'class' => 'absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden',
    ]) }}
>
    <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
    <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
    <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
</button>
