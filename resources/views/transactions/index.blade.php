<h1>Transactions</h1>

<a href="{{ route('transactions.create') }}">
    Add Transaction
</a>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Type</th>
        <th>Category</th>
        <th>Amount</th>
        <th>Description</th>
    </tr>

    @forelse($transactions as $transaction)

        <tr>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->type }}</td>
            <td>{{ $transaction->category?->name ?? 'No Category' }}</td>
            <td>{{ $transaction->amount }}</td>
            <td>{{ $transaction->description }}</td>
        </tr>

    @empty

        <tr>
            <td colspan="5">No transactions found.</td>
        </tr>

    @endforelse

</table>