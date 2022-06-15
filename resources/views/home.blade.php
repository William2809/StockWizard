<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-green-300">
                {{ __('StockWizard') }}
            </h2>
            <ul class="flex font-semibold text-xl">
                <li class="pr-4 pl-4 text-green-300"><a href="/home">Home</a></li>
                <li class="pr-4 pl-4 text-white hover:text-green-400"><a href="{{ route('predictStock') }}">Predict
                        Stock</a></li>
                <li class="pr-4 pl-4 text-white hover:text-green-400"><a
                        href="{{ route('predictInvestment') }}">Predict Investment</a></li>
            </ul>
        </div>

    </x-slot>

    <div class="py-[100px]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center">
                <div class="w-[920px] mr-[20px]">
                    <h1 class=" mb-[50px] text-green-300 font-semibold
                    text-[50px]">
                        Welcome to StockWizard
                    </h1>
                    <p class="text-white w-[500px] text-[20px] mb-11">
                        Predicting how our stock will perform is an essential part of investing. StockWizard provides a
                        basic stock prediction that you can use totally free of charge. Our machine learning algorithm
                        will help you to predict how well your investment might be in the future.
                    </p>
                    <div class="flex justify-center mr-[72px]">
                        <a href="{{ route('predictStock') }}"
                            class="w-[365px] h-[90px] inline-flex justify-center items-center px-4 py-2 bg-green-300 border border-transparent rounded-[50px] text-[36px] text-[#22222] font-medium hover:bg-green-500 hover:text-white disabled:opacity-25 transition ease-in-out duration-150' ">
                            <div class="flex items-center ">
                                <div class="pr-5">
                                    Let's Start
                                </div>
                                <svg class="w-[38px] h-[38px] fill-black hover:fill-white" width="39" height="39"
                                    viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    Let's Start
                                    <path
                                        d="M38 18.3125C37.8513 17.9289 37.6283 17.5784 37.3437 17.2813L21.7188 1.65625C21.4274 1.36488 21.0815 1.13375 20.7008 0.976064C20.3201 0.818375 19.9121 0.737213 19.5 0.737213C18.6678 0.737213 17.8697 1.0678 17.2812 1.65625C16.9899 1.94762 16.7588 2.29353 16.6011 2.67422C16.4434 3.05491 16.3622 3.46294 16.3622 3.875C16.3622 4.70719 16.6928 5.5053 17.2812 6.09375L27.5938 16.375H3.875C3.0462 16.375 2.25134 16.7042 1.66529 17.2903C1.07924 17.8763 0.75 18.6712 0.75 19.5C0.75 20.3288 1.07924 21.1237 1.66529 21.7097C2.25134 22.2958 3.0462 22.625 3.875 22.625H27.5938L17.2812 32.9063C16.9883 33.1968 16.7559 33.5424 16.5972 33.9232C16.4386 34.304 16.3569 34.7125 16.3569 35.125C16.3569 35.5375 16.4386 35.946 16.5972 36.3268C16.7559 36.7076 16.9883 37.0532 17.2812 37.3438C17.5718 37.6367 17.9174 37.8691 18.2982 38.0278C18.679 38.1864 19.0875 38.2681 19.5 38.2681C19.9125 38.2681 20.321 38.1864 20.7018 38.0278C21.0826 37.8691 21.4282 37.6367 21.7188 37.3438L37.3437 21.7188C37.6283 21.4216 37.8513 21.0711 38 20.6875C38.3126 19.9267 38.3126 19.0733 38 18.3125Z" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div>
                    <img src="picture\illustration.svg" alt="illustration pict">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
