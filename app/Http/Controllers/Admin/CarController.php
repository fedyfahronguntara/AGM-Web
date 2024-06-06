<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreCarRequest;

class CarController extends Controller
{
    public function index() : View
    {
        $cars = Car::get();

        return view('admin.cars.index', compact('cars'));
    }

    public function create() : View
    {
        return view('admin.cars.create');
    }

    public function store(StoreCarRequest $request) : RedirectResponse
    {
        $data = $request->all();
        $data['image1'] = $request->file('image1')->store(
            'assets/car', 'public'
        );
        $data['image2'] = $request->file('image2')->store(
            'assets/car', 'public'
        );
        $data['image3'] = $request->file('image3')->store(
            'assets/car', 'public'
        );

        Car::create($data);

        return redirect()->route('admin.cars.index')->with('message', 'Added Successfully !');
    }

    public function edit(Car $car) : View
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(StoreCarRequest $request, Car $car)
    {
        if($request->image){
            File::delete('storage/' . $car->image);
        }
        
        $data = $request->all();
        $data['image'] = $request->image ? $request->file('image')->store(
            'assets/car', 'public'
        ) : $car->image;

        $car->update($data);

        return redirect()->route('admin.cars.index')->with('message', 'Updated Successfully !');
    }

    public function destroy(Car $car)
    {
        $car->delete();

        return redirect()->route('admin.cars.index')->with('message', 'Deleted Successfully !');
    }
}
