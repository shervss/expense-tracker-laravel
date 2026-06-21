<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Personal Expense Tracker
        </h2>
    </x-slot>

```
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="mb-6">
            <a href="{{ route('transactions.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded">
                + Add Transaction
            </a>

            <a href="{{ route('transactions.index') }}"
               class="ml-2 px-4 py-2 bg-gray-600 text-white rounded">
                View Transactions
            </a>

            <a href="{{ url('/reports/monthly') }}"
               class="ml-2 px-4 py-2 bg-green-600 text-white rounded">
                Monthly Reports
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-green-500 text-white p-6 rounded shadow">
                <h3 class="text-lg font-bold">Total Income</h3>
                <p class="text-2xl">₱0.00</p>
            </div>

            <div class="bg-red-500 text-white p-6 rounded shadow">
                <h3 class="text-lg font-bold">Total Expenses</h3>
                <p class="text-2xl">₱0.00</p>
            </div>

            <div class="bg-blue-500 text-white p-6 rounded shadow">
                <h3 class="text-lg font-bold">Balance</h3>
                <p class="text-2xl">₱0.00</p>
            </div>

        </div>

    </div>
</div>
```

</x-app-layout>
