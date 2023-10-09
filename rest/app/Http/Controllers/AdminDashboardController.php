<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseHistory;
class AdminDashboardController extends Controller
{
 
public function index($id = null)
{
    $purchaseHistories = PurchaseHistory::all();
    $purchaseHistory = $id ? PurchaseHistory::find($id) : null;

    return view('admin.dashboard', compact('purchaseHistories', 'purchaseHistory'));
}

}
