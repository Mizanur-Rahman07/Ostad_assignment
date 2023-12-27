<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TransectionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('products')->join('transactions', 'products.id', '=', 'transactions.product_id')
            ->groupBy('transactions.product_id')
            ->select('transactions.product_id', 'transactions.name', 'transactions.total_amount', 'transactions.created_at', DB::raw('sum(transactions.qty) as total_quantity'))
            ->get();

        return view('admin.home.home', compact('transactions'));
    }
}
