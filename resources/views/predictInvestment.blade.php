<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-green-300">
                {{ __('StockWizard') }}
            </h2>
            <ul class="flex font-semibold text-xl">
                <li class="pr-4 pl-4 text-white hover:text-green-400"><a href="/home">Home</a></li>
                <li class="pr-4 pl-4 text-white hover:text-green-400"><a href="{{ route('predictStock') }}">Predict
                        Stock</a></li>
                <li class="pr-4 pl-4 text-green-300"><a href="{{ route('predictInvestment') }}">Predict Investment</a>
                </li>
            </ul>
        </div>

    </x-slot>

    <div class="flex content-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-[700px] text-center mt-10">
                <h1 class="text-green-300 text-[50px] font-semibold mb-10">
                    Predict Your Investment
                </h1>
                <form action="" method="post">
                    @csrf
                    <div class="flex justify-between items-center mb-5">
                        <p class="text-white text-[28px] font-medium">Stock Name</p>
                        <input
                            class="w-[400px] h-[48px] block rounded-xl border-2 border-green-300 focus:ring focus:ring-green-100 focus:border-green-400 transition duration-200 bg-transparent text-white text-[20px]"
                            type="text" name="ticker" id="ticker" placeholder="Example 'AAPL'" required>
                    </div>
                    <div class="flex justify-between items-center mb-5">
                        <p class="text-white text-[28px] font-medium">Initial Investment</p>
                        <div>
                            <input
                                class="w-[400px] h-[48px] block rounded-xl border-2 border-green-300 focus:ring focus:ring-green-100 focus:border-green-400 transition duration-200 bg-transparent text-white text-[20px] "
                                type="text" name="investment" id="investment" placeholder="in USD" required>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mb-5">
                        <p class="text-white text-[28px] font-medium">Target Date</p>
                        <div>
                            <input
                                class="w-[400px] h-[48px] block rounded-xl border-2 border-green-300 focus:ring focus:ring-green-100 focus:border-green-400 transition duration-200 bg-transparent text-gray-400 text-[20px]"
                                type="date" name="endDate" id="endDate" placeholder="mm/dd/yyyy" required>

                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="flex w-[200px] h-[40px] items-center justify-center px-4 py-2 bg-green-300 border border-transparent rounded-lg font-semibold text-xs text-black hover:bg-green-400 disabled:opacity-25 transition ease-in-out duration-150 text-[20px]">Calculate</button>
                    </div>
                </form>
                <div>
                    @if ($num != 0)
                        <div class="mt-5 text-left">
                            <p class="text-white text-2xl ">Current price '<a
                                    class="text-green-300">${{ $current }}</a></p>
                            <p class="text-white text-2xl ">Predicted price '<a
                                    class="text-green-300">${{ $predict }}</a></p>

                        </div>
                        <div class="flex mt-5 w-[800px]">
                            <p class="text-white text-2xl">Your total investment of '<a
                                    class="text-green-300">{{ $stock }}</a>' stock in
                                <a class="text-green-300">{{ $date }}</a> will be
                                <a class="text-green-300">
                                    ${{ $num }}</a>.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
