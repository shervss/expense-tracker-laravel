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

        </div>
    </div>
</x-app-layout>
