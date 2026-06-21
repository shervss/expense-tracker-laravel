<h1>Add Transaction</h1>

<form action="{{ route('transactions.store') }}" method="POST">

    @csrf

    <label>Type</label>

    <select name="type">
        <option value="income">Income</option>
        <option value="expense">Expense</option>
    </select>

    <br><br>

    <label>Category</label>

    <select name="category_id">

        @foreach($categories as $category)

            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>

        @endforeach

    </select>

    <br><br>

    <label>Amount</label>

    <input type="number"
           step="0.01"
           name="amount">

    <br><br>

    <label>Description</label>

    <input type="text"
           name="description">

    <br><br>

    <label>Date</label>

    <input type="date"
           name="transaction_date">

    <br><br>

    <button type="submit">

        Save Transaction

    </button>

</form>