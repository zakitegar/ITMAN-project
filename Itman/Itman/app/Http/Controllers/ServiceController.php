<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            'services' => Service::all(),
        ];
        return view('service.index', $data);
    }

    public function formService()
    {
        return view('service.form');
    }

    public function pageIndex()
    {
        return view('service.frontend.index');
    }

    public function postService(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $service->image = $name;
        }

        $service->save();

        return redirect()->route('service.list');
    }
}
