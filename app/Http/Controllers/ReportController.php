<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class ReportController extends Controller
{
    public function monthly()
    {
        $totalIncome = Transaction::where('user_id', auth()->id())
            ->where('type', 'income')
            ->sum('amount');

        $totalExpense = Transaction::where('user_id', auth()->id())
            ->where('type', 'expense')
            ->sum('amount');

        $balance = $totalIncome - $totalExpense;

        return view('reports.monthly', compact(
            'totalIncome',
            'totalExpense',
            'balance'
        ));
    }
}