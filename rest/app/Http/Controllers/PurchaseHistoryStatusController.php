<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseHistory;

class PurchaseHistoryStatusController extends Controller
{
    public function index($id = null)
{
    $purchaseHistories = PurchaseHistory::all();
    $purchaseHistory = $id ? PurchaseHistory::find($id) : null;

    return view('admin.dashboard', compact('purchaseHistories', 'purchaseHistory'));
}
    public function edit($id)
{
    $purchaseHistory = PurchaseHistory::find($id);
    return view('admin.edit-purchase-history', compact('purchaseHistory'));
}

public function update(Request $request, $id)
{
    $purchaseHistory = PurchaseHistory::find($id);
    $purchaseHistory->status = $request->input('status');
    $purchaseHistory->save();

    return redirect()->route('admin.dashboard')->with('success', 'Status updated successfully');
}
}
