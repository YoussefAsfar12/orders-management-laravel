<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $orders= Order::paginate(10);
        return view("orders-list", ["orders" => $orders]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'orderNumber' => 'required|string',
                'status' => 'required|string',
                'comments' => 'nullable|string',
                'customerNumber' => 'required|exists:customers,customerNumber',
                'requiredDate' => 'required|date',
                'shippedDate' => 'nullable|date',
            ]);
    

            $order = new Order();
            $order->orderNumber = $validatedData['orderNumber'];
            $order->status = $validatedData['status'];
            $order->comments = $validatedData['comments'];
            $order->customerNumber = $validatedData['customerNumber'];
            $order->orderDate = date('Y-m-d');
            $order->requiredDate = $validatedData['requiredDate'];
        $order->shippedDate = $validatedData['shippedDate'];
    

            $order->save();
            return redirect('/orders')->with('success', 'Order created successfully.');
    }
    public function create()
    {   
        $customers= Customer::all();
        return view("orders-create", ["customers" => $customers]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $order= Order::find($id);
        return view("orders-detail", ["order" => $order]);
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
