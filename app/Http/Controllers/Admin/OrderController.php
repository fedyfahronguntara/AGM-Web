<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Car;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreOrderRequest;

class OrderController extends Controller
{
    public function index() : View
    {
        $orders = Order::get();

        return view('admin.orders.index', compact('orders'));
    }

    public function create() : View
    {
        return view('admin.orders.create');
    }

    public function store(StoreOrderRequest $request) : RedirectResponse
    {
        Order::create($data);

        return redirect()->route('admin.orders.index')->with('message', 'Added Successfully !');
    }

    public function edit(Order $order) : View
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(StoreOrderRequest $request, Order $order)
    {
        
        $data = $request->all();
        $request->validate([
        'id' => 'required', // Add any other validation rules you need
        ]);

    // Find the user by ID
    $car = Car::findOrFail($request->car_id);

    // Update the email column
    

        $order->update($data);
        if ($request->Status == '2'){
            $car->status = '1';
            $car->save();
        }else{
            $car->status = '0';
            $car->save();
        }
        return redirect()->route('admin.orders.index')->with('message', 'Updated Successfully !');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.orders.index')->with('message', 'Deleted Successfully !');
    }
}
