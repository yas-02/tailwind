<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <!-- Styles -->
    <style>
        button{
            cursor: pointer;
        }
    </style>
</head>
<body class="font-sans">
<header class="fixed inset-x-0 top-0 z-50 h-20 shadow-xl">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class=" font-serif text-xl underline decoration-solid decoration-red-50">AppLight</span>
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#home" class="text-sm/6 font-semibold text-gray-900">Home</a>
            <a href="#about" class="text-sm/6 font-semibold text-gray-900">About</a>
            <a href="#feature" class="text-sm/6 font-semibold text-gray-900">Feature</a>
            <a href="#team" class="text-sm/6 font-semibold text-gray-900">team</a>
            <a href="#testimonials" class="text-sm/6 font-semibold text-gray-900">Testimonials</a>
            <a href="#faq" class="text-sm/6 font-semibold text-gray-900">FAQ</a>
            <a href="#contact" class="text-sm/6 font-semibold text-gray-900">Contact</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>

    <!-- Mobile menu, show/hide based on menu open state. -->
    {{--        <div class="lg:hidden" role="dialog" aria-modal="true">--}}
    {{--            <!-- Background backdrop, show/hide based on slide-over state. -->--}}
    {{--            <div class="fixed inset-0 z-50"></div>--}}
    {{--            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">--}}
    {{--                <div class="flex items-center justify-between">--}}
    {{--                    <a href="#" class="-m-1.5 p-1.5">--}}
    {{--                        <span class="sr-only">Your Company</span>--}}
    {{--                        <img class="h-8 w-auto" src="https://tailwindui.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">--}}
    {{--                    </a>--}}
    {{--                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">--}}
    {{--                        <span class="sr-only">Close menu</span>--}}
    {{--                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
    {{--                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />--}}
    {{--                        </svg>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="mt-6 flow-root">--}}
    {{--                    <div class="-my-6 divide-y divide-gray-500/10">--}}
    {{--                        <div class="space-y-2 py-6">--}}
    {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>--}}
    {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>--}}
    {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>--}}
    {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>--}}
    {{--                        </div>--}}
    {{--                        <div class="py-6">--}}
    {{--                            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
</header>

{{--home section --}}
<div class="w-full mt-20">
    <div id="home" class="lg:flex isolate pt-14 block w-full sm:justify-center place-items-center mb-10">
        <img class="lg:w-120 w-100" src="{{ asset('images/iphone.png') }}" alt="Image Description">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
             aria-hidden="true">
            <div
                class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div>
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span
                            class="absolute inset-0" aria-hidden="true"></span>Read more <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center justify-center place-items-center">
                <h1 class="lg:text-4xl text-3xl w-100 font-semibold tracking-tight text-balance text-purple-950 ">Data to enrich your online business</h1>
                <p class="mt-8 sm:text-xl md:w-100 w-70 text-sm font-medium text-pretty text-gray-500">Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Curabitur hendrerit neque massa, sit amet tristique ante porta ut. In
                    sodales et justo vel vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada
                    fames acturpis egestas.</p>
                <div class="mt-10 flex items-center justify-center gap-x-3">
                    <a href="#" class="flex bg-black text-white font-semibold text-gray-900 sm:w-40 w-30 h-13 rounded-md p-2 gap-1 justify-center place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="30" viewBox="0 0 512 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"/>
                        </svg>
                        <div class="block mx-2">
                            <p class="text-xs sm:text-md">Get it on</p>
                            <h1 class="text-xs sm:text-md font-bold">Google Play</h1>
                        </div>
                    </a>
                    <a href="#" class="flex bg-black text-white font-semibold text-gray-900 sm:w-40 w-30 h-13 rounded-md p-2 gap-1 justify-center place-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="35" width="30" viewBox="0 0 384 512">
                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path fill="#ffffff"
                                  d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                        </svg>
                        <div class="block mx-2">
                            <p class="text-xs sm:text-md">Download on the</p>
                            <h1 class="text-xs sm:text-md font-bold">App Store</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div
                class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </div>
</div>

{{--about section --}}
<div id="about" class="bg-whit text-center block justify-center place-items-center w-full">
    <h1 class="lg:text-4xl text-3xl text-purple-950">About</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900 "></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin
        consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>
    <div class="lg:flex justify-center place-items-center sm:block m-10">
        <div class="justify-center place-items-center m-5">
            <div class="sm:w-50 sm:h-50 w-40 h-40 flex items-center justify-center  rounded-full bg-gradient-to-r from-purple-200 to-purple-400">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#ffffff"
                          d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                </svg>
            </div>
            <h1 class="sm:text-3xl text-xl m-2">Support</h1>
            <p class="sm:text-xl text-md w-50 sm:w-70 text-center">Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae
                condimentum nulla.</p>
        </div>
        <div class="justify-center place-items-center m-5">
            <div class="sm:w-50 sm:h-50 w-40 h-40 flex items-center justify-center  rounded-full bg-gradient-to-r from-purple-200 to-purple-400">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#ffffff"
                          d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                </svg>
            </div>
            <h1 class="sm:text-3xl text-xl m-2">Support</h1>
            <p class="sm:text-xl text-md w-50 sm:w-70 text-center">Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae
                condimentum nulla.</p>
        </div>
        <div class="justify-center place-items-center m-5">
            <div class="sm:w-50 sm:h-50 w-40 h-40 flex items-center justify-center  rounded-full bg-gradient-to-r from-purple-200 to-purple-400">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path fill="#ffffff"
                          d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                </svg>
            </div>
            <h1 class="sm:text-3xl text-xl m-2">Support</h1>
            <p class="sm:text-xl text-md w-50 sm:w-70 text-center">Phasellus lobortis justo a magna facilisis, in commodo tellus rutrum. Sed vitae
                condimentum nulla.</p>
        </div>
    </div>
    <div class="justify-center place-items-center">
        <button
            class="border-1 rounded-md w-50 h-10 border-purple-900 text-purple-900 hover:bg-purple-900 hover:text-white text-2xl ">
            Learn More
        </button>
    </div>
</div>

{{--    video section --}}
<div
    class="w-auto h-100 my-10 bg-purple-200 bg-[url('{{ asset('images/iphone.png') }}')] bg-blend-soft-light justify-center place-items-center">
    <h1 class="text-4xl text-white pt-30 pb-10">Watch Now</h1>
    <div class="w-25 h-25 flex items-center justify-center  rounded-full bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 256 512">
            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path fill="#3c0366"
                  d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"/>
        </svg>
    </div>
</div>

{{--feature section --}}
<div id="feature" class="bg-whit text-center block justify-center place-items-center w-full">
    <h1 class="lg:text-4xl text-3xl text-purple-950">Features</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900 "></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>
    <div class="xl:flex justify-center place-items-center block m-10 h-auto w-full">
        {{--        component --}}
        <div class="block m-5 justify-center place-items-center">
            <div class="bg-white rounded-md shadow-xl sm:w-100 w-70 sm:h-30 h-40 p-5 mb-10  flex">
                <div class="block text-right px-5 ">
                    <h1 class="text-md font-bold">Fast Processing</h1>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididugnt ut
                        labore</p>
                </div>
                <div class="w-15 h-15 flex items-center justify-center rounded-full border-1 border-purple-900 px-5 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="27" viewBox="0 0 384 512">
                        <path fill="#3c0366"
                              d="M0 256L28.5 28c2-16 15.6-28 31.8-28H228.9c15 0 27.1 12.1 27.1 27.1c0 3.2-.6 6.5-1.7 9.5L208 160H347.3c20.2 0 36.7 16.4 36.7 36.7c0 7.4-2.2 14.6-6.4 20.7l-192.2 281c-5.9 8.6-15.6 13.7-25.9 13.7h-2.9c-15.7 0-28.5-12.8-28.5-28.5c0-2.3 .3-4.6 .9-6.9L176 288H32c-17.7 0-32-14.3-32-32z"/>
                    </svg>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-xl sm:w-100 w-70 sm:h-30 h-40 p-5 mb-10  flex">
                <div class="block text-right px-5 ">
                    <h1 class="text-md font-bold">Low Power Consuming</h1>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididugnt ut
                        labore</p>
                </div>
                <div class="w-15 h-15 flex items-center justify-center rounded-full border-1 border-purple-900 px-5 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="27" viewBox="0 0 576 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#3c0366"
                              d="M464 160c8.8 0 16 7.2 16 16l0 160c0 8.8-7.2 16-16 16L80 352c-8.8 0-16-7.2-16-16l0-160c0-8.8 7.2-16 16-16l384 0zM80 96C35.8 96 0 131.8 0 176L0 336c0 44.2 35.8 80 80 80l384 0c44.2 0 80-35.8 80-80l0-16c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l0-16c0-44.2-35.8-80-80-80L80 96zm368 96L96 192l0 128 352 0 0-128z"/>
                    </svg>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-xl sm:w-100 w-70 sm:h-30 h-40 p-5 mb-10  flex">
                <div class="block text-right px-5 ">
                    <h1 class="text-md font-bold">Wifi Compatibility</h1>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididugnt ut
                        labore</p>
                </div>
                <div class="w-15 h-15 flex items-center justify-center rounded-full border-1 border-purple-900 px-5 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="27" viewBox="0 0 640 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#3c0366"
                              d="M54.2 202.9C123.2 136.7 216.8 96 320 96s196.8 40.7 265.8 106.9c12.8 12.2 33 11.8 45.2-.9s11.8-33-.9-45.2C549.7 79.5 440.4 32 320 32S90.3 79.5 9.8 156.7C-2.9 169-3.3 189.2 8.9 202s32.5 13.2 45.2 .9zM320 256c56.8 0 108.6 21.1 148.2 56c13.3 11.7 33.5 10.4 45.2-2.8s10.4-33.5-2.8-45.2C459.8 219.2 393 192 320 192s-139.8 27.2-190.5 72c-13.3 11.7-14.5 31.9-2.8 45.2s31.9 14.5 45.2 2.8c39.5-34.9 91.3-56 148.2-56zm64 160a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/>
                    </svg>
                </div>
            </div>
        </div>
        {{--        image --}}
        <img class="w-100 m-10 sm:flex hidden" src="{{ asset('images/iphone.png') }}" alt="Image Description">

        {{--        component --}}

        <div class="block m-5 justify-center place-items-center">
            <div class="bg-white rounded-md shadow-xl sm:w-100 w-70 sm:h-30 h-40 p-5 mb-10 flex">
                <div class="w-15 h-15 flex items-center justify-center rounded-full border-1 border-purple-900 px-5 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="21" viewBox="0 0 448 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#3c0366"
                              d="M342.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 178.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l80 80c12.5 12.5 32.8 12.5 45.3 0l160-160zm96 128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 402.7 54.6 297.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l256-256z"/>
                    </svg>
                </div>
                <div class="block text-left px-5">
                    <h1 class="text-md font-bold">Regular Updates</h1>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididugnt ut
                        labore</p>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-xl sm:w-100 w-70 sm:h-30 h-40 p-5 mb-10 flex">
                <div class="w-15 h-15 flex items-center justify-center rounded-full border-1 border-purple-900 px-5 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="15" viewBox="0 0 320 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#3c0366"
                              d="M160 0c17.7 0 32 14.3 32 32l0 35.7c1.6 .2 3.1 .4 4.7 .7c.4 .1 .7 .1 1.1 .2l48 8.8c17.4 3.2 28.9 19.9 25.7 37.2s-19.9 28.9-37.2 25.7l-47.5-8.7c-31.3-4.6-58.9-1.5-78.3 6.2s-27.2 18.3-29 28.1c-2 10.7-.5 16.7 1.2 20.4c1.8 3.9 5.5 8.3 12.8 13.2c16.3 10.7 41.3 17.7 73.7 26.3l2.9 .8c28.6 7.6 63.6 16.8 89.6 33.8c14.2 9.3 27.6 21.9 35.9 39.5c8.5 17.9 10.3 37.9 6.4 59.2c-6.9 38-33.1 63.4-65.6 76.7c-13.7 5.6-28.6 9.2-44.4 11l0 33.4c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-34.9c-.4-.1-.9-.1-1.3-.2l-.2 0s0 0 0 0c-24.4-3.8-64.5-14.3-91.5-26.3c-16.1-7.2-23.4-26.1-16.2-42.2s26.1-23.4 42.2-16.2c20.9 9.3 55.3 18.5 75.2 21.6c31.9 4.7 58.2 2 76-5.3c16.9-6.9 24.6-16.9 26.8-28.9c1.9-10.6 .4-16.7-1.3-20.4c-1.9-4-5.6-8.4-13-13.3c-16.4-10.7-41.5-17.7-74-26.3l-2.8-.7s0 0 0 0C119.4 279.3 84.4 270 58.4 253c-14.2-9.3-27.5-22-35.8-39.6c-8.4-17.9-10.1-37.9-6.1-59.2C23.7 116 52.3 91.2 84.8 78.3c13.3-5.3 27.9-8.9 43.2-11L128 32c0-17.7 14.3-32 32-32z"/>
                    </svg>
                </div>
                <div class="block text-left px-5">
                    <h1 class="text-md font-bold">Save Money</h1>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididugnt ut
                        labore</p>
                </div>
            </div>
            <div class="bg-white rounded-md shadow-xl sm:w-100 w-70 sm:h-30 h-40 p-5 mb-10 flex">
                <div class="w-15 h-15 flex items-center justify-center rounded-full border-1 border-purple-900 px-5 my-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="27" viewBox="0 0 576 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#3c0366"
                              d="M64 64C28.7 64 0 92.7 0 128l0 7.4c0 6.8 4.4 12.6 10.1 16.3C23.3 160.3 32 175.1 32 192s-8.7 31.7-21.9 40.3C4.4 236 0 241.8 0 248.6L0 320l576 0 0-71.4c0-6.8-4.4-12.6-10.1-16.3C552.7 223.7 544 208.9 544 192s8.7-31.7 21.9-40.3c5.7-3.7 10.1-9.5 10.1-16.3l0-7.4c0-35.3-28.7-64-64-64L64 64zM576 352L0 352l0 64c0 17.7 14.3 32 32 32l48 0 0-32c0-8.8 7.2-16 16-16s16 7.2 16 16l0 32 96 0 0-32c0-8.8 7.2-16 16-16s16 7.2 16 16l0 32 96 0 0-32c0-8.8 7.2-16 16-16s16 7.2 16 16l0 32 96 0 0-32c0-8.8 7.2-16 16-16s16 7.2 16 16l0 32 48 0c17.7 0 32-14.3 32-32l0-64zM192 160l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32s32 14.3 32 32zm128 0l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32s32 14.3 32 32zm128 0l0 64c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32s32 14.3 32 32z"/>
                    </svg>
                </div>
                <div class="block text-left px-5">
                    <h1 class="text-md font-bold">Unlimited Storage</h1>
                    <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididugnt ut
                        labore</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{--team section --}}
<div id="team" class="text-center block justify-center place-items-center mb-0 w-full h-auto bg-gray-50">
    <h1 class="lg:text-4xl text-3xl text-purple-950 pt-10">Our Team</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900 "></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin
        consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>
    <div class="lg:flex justify-center place-items-center block my-5">
        <div class="w-50 justify-center place-items-center mb-10 mx-5">
            <img class="sm:w-50 sm:h-50 w-40 h-40 flex items-center justify-center rounded-full" src="{{ asset('images/OIP.jpg') }}">
            <h1 class="text-3xl m-2 text-purple-900">yasmen</h1>
            <p class="w-80 text-center text-gray-400">Backend Developer</p>
        </div>
        <div class="w-50 justify-center place-items-center mb-10 mx-5">
            <img class="sm:w-50 sm:h-50 w-40 h-40 flex items-center justify-center rounded-full"
                 src="{{ asset('images/OIP (1).jpg') }}">
            <h1 class="text-3xl m-2 text-purple-900">Lena</h1>
            <p class="w-80 text-center text-gray-400">Backend Developer</p>
        </div>
        <div class="w-50 justify-center place-items-center mb-10 mx-5">
            <img class="sm:w-50 sm:h-50 w-40 h-40 flex items-center justify-center rounded-full"
                 src="{{ asset('images/OIP (2).jpg') }}">
            <h1 class="text-3xl m-2 text-purple-900">Qadi</h1>
            <p class="w-80 text-center text-gray-400">Backend Developer</p>
        </div>
    </div>
</div>

{{--Testimonials section --}}
<div id="testimonials" class="text-center block justify-center place-items-center w-full h-auto  bg-gradient-to-r from-purple-200 to-purple-400 ">
    <h1 class="lg:text-4xl text-3xl text-purple-950 pt-10">Testimonials</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900 "></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty text-gray-100 sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin
        consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>
    <div class="block my-5">
        <div class="flex sm:w-180 sm:h-40 w-70 h-40 bg-neutral-200/60 rounded-lg my-5 ">
            <img class="sm:w-30 sm:h-30 w-20 h-20 flex items-center justify-center rounded-full sm:my-5 my-10 px-1" src="{{ asset('images/OIP (2).jpg') }}">
            <div class="block text-left text-sm sm:text-lg sm:my-5 my-3 px-5">
                <h1 class="font-bold">Yasmen Zuher</h1>
                <h1>Backend Developer</h1>
                <p>Euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</p>
            </div>
        </div>
        <div class="flex sm:w-180 sm:h-40 w-70 h-40 bg-neutral-200/60 rounded-lg my-5">
            <img class="sm:w-30 sm:h-30 w-20 h-20 flex items-center justify-center rounded-full sm:my-5 my-10 px-1" src="{{ asset('images/OIP (2).jpg') }}">
            <div class="block text-left text-sm sm:text-lg sm:my-5 my-3 px-5">
                <h1 class="font-bold">Yasmen Zuher</h1>
                <h1>Backend Developer</h1>
                <p>Euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</p>
            </div>
        </div>
        <div class="flex sm:w-180 sm:h-40 w-70 h-40 bg-neutral-200/60 rounded-lg my-5">
            <img class="sm:w-30 sm:h-30 w-20 h-20 flex items-center justify-center rounded-full sm:my-5 my-10 px-1" src="{{ asset('images/OIP (2).jpg') }}">
            <div class="block text-left text-sm sm:text-lg sm:my-5 my-3 px-5">
                <h1 class="font-bold">Yasmen Zuher</h1>
                <h1>Backend Developer</h1>
                <p>Euismod tincidunt ut laoreet dolore magna aliquam eratvo lutpat. Ut wisi enim ad minim veniam, quis nostrud v</p>
            </div>
        </div>
    </div>
</div>

{{--faq section --}}
<div id="faq" class="text-center block justify-center place-items-center w-full h-auto bg-gray-50">
    <h1 class="lg:text-4xl text-3xl text-purple-950 pt-10">Frequently Asked Questions</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900 "></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin
        consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>

    <div class="w-3/4 bg-white p-8 rounded-lg shadow-lg">
        <div class="space-y-4">
            <!-- Question 1 -->
            <div>
                <button onclick="toggleAnswer(1)"
                        class="w-full text-left bg-gray-300 p-4 rounded-lg flex justify-between">
                    <span>Nam tellus felis, dignissim quis dui ?</span>
                    <span id="icon1">+</span>
                </button>
                <div id="answer1" class="hidden p-4 bg-gray-100 rounded-lg mt-2">
                    Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac,
                    euismod placerat orci. Donec commodo.
                </div>
            </div>

            <!-- Question 2 -->
            <div>
                <button onclick="toggleAnswer(2)"
                        class="w-full text-left bg-gray-300 p-4 rounded-lg flex justify-between">
                    <span>Mauris scelerisque, dui non faucibus vulputate ?</span>
                    <span id="icon2">+</span>
                </button>
                <div id="answer2" class="hidden p-4 bg-gray-100 rounded-lg mt-2">
                    Sed tempus in neque ac rhoncus. Phasellus vehicula, erat tempor malesuada egestas, mauris tellus
                    malesuada erat, at vestibulum nulla ex et lectus. Nullam elit est, ultricies et tellus ac, euismod
                    placerat orci.
                </div>
            </div>

            <!-- Question 3 -->
            <div>
                <button onclick="toggleAnswer(3)"
                        class="w-full text-left bg-gray-300 p-4 rounded-lg flex justify-between">
                    <span>Nullam elit est, ultricies et tellus ac ?</span>
                    <span id="icon3">+</span>
                </button>
                <div id="answer3" class="hidden p-4 bg-gray-100 rounded-lg mt-2">
                    Ut vestibulum euismod aliquet. Quisque nec malesuada nibh. Vivamus euismod nunc eu leo faucibus, vel
                    elementum justo posuere. In sed varius nisi. Curabitur id porta ipsum, et vestibulum dui.
                </div>
            </div>

            <!-- Question 4 -->
            <div>
                <button onclick="toggleAnswer(4)"
                        class="w-full text-left bg-gray-300 p-4 rounded-lg flex justify-between">
                    <span>Suspendisse fermentum placerat enim, at pellentesque augue elit est ?</span>
                    <span id="icon4">+</span>
                </button>
                <div id="answer4" class="hidden p-4 bg-gray-100 rounded-lg mt-2">Vivamus euismod nunc eu leo faucibus,
                    vel elementum justo posuere. In sed varius nisi.
                </div>
            </div>

            <!-- Question 5 -->
            <div>
                <button onclick="toggleAnswer(5)"
                        class="w-full text-left bg-gray-300 p-4 rounded-lg flex justify-between">
                    <span>Ut vestibulum euismod aliquet. Quisque nec malesuada nibh ?</span>
                    <span id="icon5">+</span>
                </button>
                <div id="answer5" class="hidden p-4 bg-gray-100 rounded-lg mt-2">
                    Suspendisse fermentum placerat enim, at pellentesque augue. Nullam elit est, ultricies et tellus ac,
                    euismod placerat orci. Donec commodo dapibus congue.
                </div>
            </div>

            <!-- Question 6 -->
            <div>
                <button onclick="toggleAnswer(6)"
                        class="w-full text-left bg-gray-300 p-4 rounded-lg flex justify-between">
                    <span>Donec commodo dapibus congue ?</span>
                    <span id="icon6">+</span>
                </button>
                <div id="answer6" class="hidden p-4 bg-gray-100 rounded-lg mt-2">
                    Nullam elit est, ultricies et tellus ac, euismod placerat orci fermentum placerat enim, at
                    pellentesque augue. Nullam elit est, ultricies et tellus ac, euismod placerat orci. Donec commodo
                    dapibus congue.
                </div>
            </div>
        </div>
    </div>

</div>

{{--contact section --}}
<div id="contact" class="text-center block justify-center place-items-center w-full">
    <h1 class="lg:text-4xl text-3xl text-purple-950 pt-10">Contact us</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900 "></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin
        consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>
    <div class="xl:flex block my-10 justify-center place-items-center ">
        {{--        form section --}}
        <form class="block sm:w-150 lg:mx-5 w-70 h-auto justify-center place-items-center my-5">
            <div class="sm:flex block">
                <input type="text" id="first_name" class="border border-gray-300 text-gray-900 text-sm rounded-full w-60 p-3 my-3 sm:w-70 sm:mx-2"
                       placeholder="Full Name" required/>
                <input type="email" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-full w-60 p-3 my-3 sm:w-70"
                       placeholder="john.doe@company.com" required/>
            </div>
            <div>
                <input type="text" id="first_name"
                       class=" border border-gray-300 text-gray-900 text-sm rounded-full w-60 p-3 my-3 sm:w-140"
                       placeholder="Email" required/>
            </div>
            <div class="flex p-5">
                <textarea id="subject" name="subject"
                          class=" border border-gray-300 text-gray-900 text-sm rounded-xl w-60 p-3 my-3 sm:w-140"
                          placeholder="Write something.." style="height:200px"></textarea>
            </div>
            <div class="flex px-5">
                <input type="submit" id="submit"
                       class=" border border-gray-300 text-gray-900 text-sm rounded-full w-60 p-3 my-3 sm:w-140 text-center bg-gradient-to-r from-purple-200 to-purple-400"
                       placeholder="submit" required/>
            </div>
        </form>
        {{--        contact section --}}
        <div class=" sm:w-100 sm:h-100 w-70 h-70 bg-gradient-to-r from-purple-200 to-purple-400 rounded-xl sm:py-20 py-5 sm:px-5 px-2">
            <div class="flex w-80 mb-5">
                <div class="mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 384 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffffff"
                              d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <h1>ADDRESS</h1>
                    <h1>New Delhi, India</h1>
                </div>
            </div>
            <div class="flex w-80 mb-5">
                <div class="mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 384 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffffff"
                              d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <h1>Phone</h1>
                    <h1>009900990099</h1>
                </div>
            </div>
            <div class="flex w-80 mb-5">
                <div class="mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 384 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffffff"
                              d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <h1>E-mail</h1>
                    <h1>info@domain.com</h1>
                </div>
            </div>
            <div class="flex w-80 mb-5">
                <div class="mx-5">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 384 512">
                        <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path fill="#ffffff"
                              d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                </div>
                <div class="text-left text-white">
                    <h1>Working Hours</h1>
                    <h1>Mon-Fri 9.00 AM to 5.00PM.</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="relative h-auto pb-15 text-center block justify-center place-items-center w-full bg-gradient-to-r from-purple-200 to-purple-400">
    <h1 class="sm:text-5xl text-3xl text-white pt-10">Download Our App</h1>
    <div class="flex my-5">
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
        <div class="mx-1 border-1 w-20 border-purple-900"></div>
        <div class="w-20 border-1 border-dashed border-purple-900"></div>
    </div>
    <p class="mt-8 text-lg font-medium text-pretty text-white sm:text-xl/8 w-5/6">Sed quis nisi nisi. Proin
        consectetur
        porttitor dui sit amet viverra. Fusce sit amet lorem <br>faucibus, vestibulum ante in, pharetra ante.</p>
    <div class="mt-10 flex items-center justify-center gap-x-3">
        <a href="#" class="flex bg-black text-white font-semibold text-gray-900 sm:w-40 w-30 h-13 rounded-md p-2 gap-1 justify-center place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="35" width="30" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path fill="#ffffff"
                      d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"/>
            </svg>
            <div class="block mx-2">
                <p class="text-xs sm:text-md">Get it on</p>
                <h1 class="text-xs sm:text-md font-bold">Google Play</h1>
            </div>
        </a>
        <a href="#" class="flex bg-black text-white font-semibold text-gray-900 sm:w-40 w-30 h-13 rounded-md p-2 gap-1 justify-center place-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="35" width="30" viewBox="0 0 384 512">
                <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path fill="#ffffff"
                      d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
            </svg>
            <div class="block mx-2">
                <p class="text-xs sm:text-md">Download on the</p>
                <h1 class="text-xs sm:text-md font-bold">App Store</h1>
            </div>
        </a>
    </div>
    <div class="absolute bottom-0 right-0 left-0 sm:text-md text-sm "> 2045 © All Rights Reserved | Design by W3Template</div>
</footer>

<script>
    function toggleAnswer(num) {
        const answer = document.getElementById(`answer${num}`);
        const icon = document.getElementById(`icon${num}`);
        answer.classList.toggle('hidden');
        icon.innerHTML = answer.classList.contains('hidden') ? '+' : '×';
    }
</script>
</body>
</html>
