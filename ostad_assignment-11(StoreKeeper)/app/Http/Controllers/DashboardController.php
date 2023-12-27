<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardController extends Controller
{
    public function dashboardCard()
    {
        $totalAmount = DB::table('transections')->whereDate('created_at',now())->sum('total_amount');
        $total_qty = DB::table('transections')->whereDate('created_at',now())->sum('qty');
        $today = $totalAmount * $total_qty;

        $yesterdayAmount = DB::table('transections')->whereDate('created_at', now()->subDay())->sum('total_amount');
        $yesterdayQty = DB::table('transections')->whereDate('created_at', now()->subDay())->sum('qty');
        $yesterday = $yesterdayAmount * $yesterdayQty;

        $thisMonthAmount = DB::table('transections')->whereMonth('created_at',now()->startOfMonth())->sum('total_amount');
        $thisMonthQty = DB::table('transections')->whereMonth('created_at',now()->startOfMonth())->sum('qty');
        $thisMonth = $thisMonthAmount * $thisMonthQty;

        $lastMonthAmount = DB::table('transections')->whereMonth('created_at', now()->subMonth()->startOfMonth())->sum('total_amount');
        $lastMonthQty = DB::table('transections')->whereMonth('created_at', now()->subMonth()->startOfMonth())->sum('qty');
        $lastMonth = $lastMonthAmount * $lastMonthQty;

        return view('admin.home.home',compact('today','yesterday','thisMonth','lastMonth'));
    }
}
