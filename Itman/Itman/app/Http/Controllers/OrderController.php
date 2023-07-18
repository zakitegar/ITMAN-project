<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $data = [
            'orders' => Order::all(),
        ];
        return view('order.index', $data);
    }
    public function cetak_pdf()
    {
        $data = [
            'orders' => Order::all(),
        ];

        // dd($data);
        $pdf = \PDF::loadView('order.cetak_pdf', $data);

        // dd($pdf);
        return $pdf->download('order-asd.pdf');
    }
}
