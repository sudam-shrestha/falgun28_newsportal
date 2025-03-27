<header>
    <div class="container flex flex-col md:flex-row gap-4 md:gap-6 lg:gap-10 items-center justify-between py-2">
        <div>
            <img width="300" height="100" class="h-[40px] md:h-[60px] lg:h-[90px]" src="{{ asset($company->logo) }}"
                alt="Jawaaf Logo">
        </div>
        <div>
            @foreach ($advertises as $advertise)
                @if ($advertise->location == 'header')
                    <a href="{{ $advertise->redirect_url }}" target="_blank">
                        <img class="h-[50px] md:h-[80px] lg:h-[100px]" src="{{ asset($advertise->image) }}"
                            alt="">
                    </a>
                @endif
            @endforeach
        </div>

        <div>
            <p class="text-xs md:text-sm lg:text-base">{{ nepalidate(now()) }}</p>
            <img height="10" class="h-[10px]" src="https://jawaaf.com/frontend/images/redline.png" alt="Underline">
        </div>
    </div>

    <nav class="bg-[var(--primary-color)] text-white py-4 text-xl my-5">
        <div class="lg:hidden container text-right">
            <button class="" aria-label="Open sidebar" type="button" data-drawer-target="drawer-example"
                data-drawer-show="drawer-example" aria-controls="drawer-example">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div class="container hidden lg:flex items-center justify-between">
            <ul class="flex gap-10">
                <li>
                    <a href="{{ route('home') }}" class="font-bold">गृहपृष्ठ</a>
                </li>
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('category', $category->slug) }}">{{ $category->nep_title }}</a>
                    </li>
                @endforeach
            </ul>

            <div>
                search
            </div>
        </div>
    </nav>
</header>


<!-- drawer component -->
<div id="drawer-example"
    class="fixed text-white top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-[var(--primary-color)] w-80 dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-label">
    <h5 id="drawer-label"
        class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
            class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>Info</h5>
    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div>
        <ul class="flex flex-col gap-10">
            <li>
                <a href="{{ route('home') }}" class="font-bold">गृहपृष्ठ</a>
            </li>
            <li>
                <a href="">समाचार</a>
            </li>
            <li>
                <a href="">मनोरञ्जन</a>
            </li>
            <li>
                <a href="">खेलकुद</a>
            </li>
        </ul>

        <div>
            search
        </div>
    </div>
</div>
