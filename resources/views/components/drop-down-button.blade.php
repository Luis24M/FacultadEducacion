<div class="mx-2 my-4 dropdown">
    <div class="hover:bg-black hover:text-white transition-all duration-300 flex text-center border border-black rounded-md p-2 bg-[#eee] shadow-lg">
        <div class="flex w-full">
            <button type="button" href="/pregrado/CDLC" class="flex justify-center items-center w-full dropdown-button" aria-expanded="false" aria-haspopup="true" data-dropdown>
                {{ $title }}
                <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <div class="mt-2 w-full rounded-md shadow-lg bg-[#eee] ring-1 ring-black ring-opacity-5 max-h-0 overflow-hidden transition-all duration-300 ease-in-out dropdown-menu" role="menu" aria-orientation="vertical" tabindex="-1" data-dropdown-menu>
        <div class="py-1" role="none">
            @foreach($list as $item)
                @if (isset($item['children']) && count($item['children']) > 0)
                    <!-- Submenu -->
                    <div class="relative group">
                        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem">
                            {{ $item['name'] }}
                            <svg class="ml-2 h-5 w-5 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <div class="absolute left-full top-0 w-48 bg-[#eee] border border-gray-200 rounded-md shadow-lg mt-2 hidden group-hover:block transition-all duration-300 ease-in-out">
                            @foreach($item['children'] as $child)
                                <a href="{{ $child['url'] }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $child['name'] }}</a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <!-- Normal link -->
                    <a href="{{ $item['url'] }}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem">{{ $item['name'] }}</a>
                @endif
            @endforeach
        </div>
    </div>
</div>
<<<<<<< HEAD

=======
>>>>>>> 6fad4f6 (prueba)
