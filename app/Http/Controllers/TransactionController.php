<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $transactions = $request->user()
            ->transactions()
            ->latest()
            ->get();

        return view('pages.transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $categories = $request->user()
            ->categories()
            ->get();

        return view('pages.transactions.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $validated = $request->validated();

        $userTimezone = 'Asia/Jakarta';

        $transactionAtLocal = Carbon::createFromFormat(
            'l, d M Y H:i',
            $validated['transaction_date'] . ' ' . $validated['transaction_time'],
            $userTimezone
        );

        $transactionAtUtc = $transactionAtLocal->clone()->utc();

        $request->user()->transactions()->create([
            'amount' => $validated['amount'],
            'note' => $validated['note'] ?? null,
            'transaction_date' => $transactionAtUtc,
            'category_id' => $validated['category_id']
        ]);

        return redirect()->route('transactions')->with('success', 'Transaction added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
