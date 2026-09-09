<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transictions;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
public function index(Request $request)
{
    $transactions = Transictions::whereIn(
        'account_id',
        $request->user()->account()->pluck('id')
    )
    ->latest('date')
    ->get();

    return response()->json([
        'status' => 200,
        'transactions' => $transactions,
    ]);
}

public function show(Request $request, $id)
{
    $transaction = Transictions::where('id', $id)
    ->whereIn(
        'account_id',
        $request->user()->account()->pluck('id')
    )
    ->first();

    if (!$transaction) {
        return response()->json([
            'status' => 404,
            'message' => 'Transaction not found',
            'transactions'=>null,
        ], 404);
    }

    return response()->json([
        'status' => 200,
        'message' => 'Transaction found',
        'transaction' => $transaction,
    ]);
    }
}