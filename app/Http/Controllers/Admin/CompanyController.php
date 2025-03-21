<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**admin.company.index
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::first();
        return view('admin.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::first();
        if ($company) {
            toast('Company already exists', 'warning');
            return redirect()->route('admin.company.index');
        }
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255",
            "email" => "required|email",
            "contact" => "required|numeric|digits:10",
            "address" => "required|max:255",
            "logo" => "required|mimes:jpg,png,jpeg,gif,svg,avif|max:2048",
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->contact = $request->contact;
        $company->address = $request->address;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $file = $request->logo;
        if ($file) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $company->logo = "images/$filename";
        }
        $company->save();
        toast('Company Saved Successfully', 'success');
        return redirect()->route('admin.company.index');
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
        $company = Company::findOrFail($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "email" => "required|email",
            "contact" => "required|numeric|digits:10",
            "address" => "required|max:255",
            "logo" => "nullable|mimes:jpg,png,jpeg,gif,svg,avif|max:2048",
        ]);

        $company = Company::find($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->contact = $request->contact;
        $company->address = $request->address;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $file = $request->logo;
        if ($file) {
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images', $filename);
            $company->logo = "images/$filename";
        }
        $company->save();
        toast('Company Updated Successfully', 'success');
        return redirect()->route('admin.company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);
        $company->delete();
        toast('Company Deleted Successfully', 'success');
        return redirect()->route('admin.company.index');
    }
}
