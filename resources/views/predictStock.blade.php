<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-green-300">
                {{ __('StockWizard') }}
            </h2>
            <ul class="flex font-semibold text-xl">
                <li class="pr-4 pl-4 text-white hover:text-green-400"><a href="/home">Home</a></li>
                <li class="pr-4 pl-4 text-green-300"><a href="{{ route('predictStock') }}">Predict
                        Stock</a></li>
                <li class="pr-4 pl-4 text-white hover:text-green-400"><a
                        href="{{ route('predictInvestment') }}">Predict Investment</a></li>
            </ul>
        </div>

    </x-slot>

    <div class="py-12 flex content-center">

        <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-[600px] text-center">
                <h1 class="text-green-300 text-[50px] font-semibold mb-10">
                    Stock Prediction
                </h1>
                <form action="" method="post">
                    @csrf
                    <div class="flex justify-between items-center mb-5">
                        <p class="text-white text-[28px] font-medium">Stock Name</p>
                        <input
                            class="w-[360px] h-[48px] block rounded-xl border-2 border-green-300 focus:ring focus:ring-green-100 focus:border-green-400 transition duration-200 bg-transparent text-white text-[20px]"
                            type="text" name="ticker" id="ticker" placeholder="Example 'AAPL'" required>
                    </div>
                    <div class="flex justify-between items-center mb-5">
                        <p class="text-white text-[28px] font-medium">Input Date</p>
                        <div class="flex justify-between">
                            <input
                                class="w-[360px] h-[48px] block rounded-xl border-2 border-green-300 focus:ring focus:ring-green-100 focus:border-green-400 transition duration-200 bg-transparent text-gray-400 text-[20px]"
                                type="date" name="endDate" id="endDate" required>

                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="flex w-[200px] h-[40px] items-center justify-center px-4 py-2 bg-green-300 border border-transparent rounded-lg font-semibold text-xs text-black hover:bg-green-400 disabled:opacity-25 transition ease-in-out duration-150 text-[20px]">Predict</button>
                    </div>
                </form>
                <div>
                    @if ($result != 0)
                        <div class="flex justify-between items-center mb-5 mt-10 ">
                            <p class="text-white text-[28px] font-medium">Result</p>
                            <p
                                class="w-[360px] h-[48px] flex items-center justify-center rounded-xl text-black text-[24px] font-semibold bg-green-300">
                                ${{ $result }}
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
