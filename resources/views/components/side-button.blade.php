<a href="{{ $route }}"
    class="mx-2 hover:bg-black hover:text-white transition-all duration-300 flex text-center border items-center border-black rounded-md p-2 bg-[#eee] shadow-lg my-4">
    <img src="{{ asset('icons/' . $icon) }}" alt="" class="icon-svg w-6 h-6 mr-2">
    <p class="text-center w-full">
        {{ $title }}
    </p>
</a>

<style>
    a:hover .icon-svg {
        filter: invert(1);
    }
</style>
