<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Category;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Transaction::where('user_id', auth()->id());

        if ($request->search) {
            $query->where(
                'description',
                'like',
                '%' . $request->search . '%'
            );
        }
    $transactions = Transaction::where('user_id', auth()->id())
        ->latest()
        ->paginate(10);

    return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view(
            'transactions.create',
            compact('categories')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
    'category_id' => 'required',
    'type' => 'required',
    'amount' => 'required|numeric',
    'transaction_date' => 'required|date',
    ]);
    Transaction::create([
        'user_id' => auth()->id(),
        'category_id' => $request->category_id,
        'type' => $request->type,
        'amount' => $request->amount,
        'description' => $request->description,
        'transaction_date' => $request->transaction_date,
    ]);

    return redirect()->route('transactions.index');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}