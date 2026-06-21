<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl px-6 py-3 rounded-xl inline-block bg-blue-600 text-white shadow-lg">
            💰 Personal Expense Tracker
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-center mb-8">
                <div class="flex flex-wrap gap-4">

                    <a href="{{ route('transactions.create') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition duration-300">
                        ➕ Add Transaction
                    </a>

                    <a href="{{ route('transactions.index') }}"
                       class="bg-gray-700 hover:bg-gray-800 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition duration-300">
                        📋 View Transactions
                    </a>

                    <a href="{{ url('/reports/monthly') }}"
                       class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition duration-300">
                        📊 Monthly Reports
                    </a>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-gradient-to-r from-green-500 to-green-700 text-white p-6 rounded-2xl shadow-xl">
                    <h3 class="text-lg font-bold mb-2">💰 Total Income</h3>
                    <p class="text-3xl font-bold">₱0.00</p>
                </div>

                <div class="bg-gradient-to-r from-red-500 to-red-700 text-white p-6 rounded-2xl shadow-xl">
                    <h3 class="text-lg font-bold mb-2">💸 Total Expenses</h3>
                    <p class="text-3xl font-bold">₱0.00</p>
                </div>

                <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white p-6 rounded-2xl shadow-xl">
                    <h3 class="text-lg font-bold mb-2">🏦 Balance</h3>
                    <p class="text-3xl font-bold">₱0.00</p>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>
