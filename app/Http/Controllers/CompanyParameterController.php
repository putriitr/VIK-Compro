<?php

namespace App\Http\Controllers;

use App\Models\CompanyParameter;
use Illuminate\Http\Request;

class CompanyParameterController extends Controller
{
    public function index()
    {
        $companies = CompanyParameter::all();
        return view('admin.companyparameter.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companyparameter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email',
            'no_telp' => 'nullable|string',
            'no_wa' => 'nullable|string',
            'alamat' => 'nullable|string',
            'ig' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'ekatalog' => 'nullable|string',
            'twitter' => 'nullable|string',
            'fb' => 'nullable|string',
            'nama_perusahaan' => 'nullable|string',
            'sejarah_perusahaan' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
            'service_1' => 'nullable|string',
            'service_2' => 'nullable|string',
            'service_3' => 'nullable|string',
            'service_4' => 'nullable|string',
            'ecommerce' => 'nullable|string',
        ]);

        CompanyParameter::create($request->all());

        return redirect()->route('company.index')->with('success', 'Company parameter created successfully.');
    }

    public function edit($id)
    {
        $company = CompanyParameter::findOrFail($id);
        return view('admin.companyparameter.edit', compact('company'));
    }

    public function show($id)
    {
        $companyParameter = CompanyParameter::findOrFail($id);
        return view('admin.companyparameter.show', compact('company'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'nullable|email',
            // Lakukan validasi lainnya sesuai kebutuhan...
        ]);

        $company = CompanyParameter::findOrFail($id);
        $company->update($request->all());

        return redirect()->route('company.index')->with('success', 'Company parameter updated successfully.');
    }

    public function destroy($id)
    {
        $company = CompanyParameter::findOrFail($id);
        $company->delete();

        return redirect()->route('company.index')->with('success', 'Company parameter deleted successfully.');
    }
}
