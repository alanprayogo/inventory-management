<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.index');
    }

    public function showManageProduct()
    {
        $products = DB::select('SELECT * FROM products');
        return view('admin.manage-product', compact('products'));
    }

    public function showManageVendor()
    {
        return view('admin.manage-vendor');
    }

    public function showManageMember()
    {
        return view('admin.manage-member');
    }

    public function showDiscountMember()
    {
        return view('admin.discount-member');
    }

    public function showStockProduct()
    {
        return view('admin.stock-product');
    }

    public function showProcurement()
    {
        return view('admin.procurement');
    }

    public function showReceiving()
    {
        return view('admin.receiving');
    }

    public function showSales()
    {
        return view('admin.sales');
    }
}
