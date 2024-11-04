<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = $request->query('limit', 10);
        $suppliers = Supplier::paginate($limit);
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string|unique.suppliers:email',
            'name' => 'required|string',
            'contact_person' => 'required|string',
            'phone_number' => 'required|string|max:14',
            'address' => 'required|string',
        ]);

        Supplier::create($data);
        return redirect()->route('suppliers.index')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'email' => 'required|string|email|',
            'name' => 'required|string',
            'contact_person' => 'required|string',
            'phone_number' => 'required|string|max:14',
            'address' => 'required|string'
        ]);

        $supplier = Supplier::findOrFail($id);

        $supplier->update($data);
        return redirect()->route('suppliers.index')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Category::find($id);
        if (!$data) {   
            return redirect()->back()->with('error', 'Data not found');
        }

        $data->delete();
        return redirect()->route('suppliers.index')->with('success', 'Data deleted successfully');
    }
}
