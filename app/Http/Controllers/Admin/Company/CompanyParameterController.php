<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyParameterController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('admin.companyparameter.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companyparameter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_history' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'whatsapp' => 'nullable|string',
            'vision' => 'required|string',
            'mission' => 'required|string',
            'service_1' => 'required|string',
            'service_2' => 'nullable|string',
            'service_3' => 'nullable|string',
            'service_4' => 'nullable|string',
            'document_1' => 'nullable|string',
            'document_2' => 'nullable|string',
            'email' => 'required|email|unique:companies,email',
            'ecommerce' => 'nullable|string',
        ]);

        Company::create($request->all());
        return redirect()->route('companies.index')->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    public function edit(Company $company)
    {
        return view('admin.companyparameter.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_history' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'whatsapp' => 'nullable|string',
            'vision' => 'required|string',
            'mission' => 'required|string',
            'service_1' => 'required|string',
            'service_2' => 'nullable|string',
            'service_3' => 'nullable|string',
            'service_4' => 'nullable|string',
            'document_1' => 'nullable|string',
            'document_2' => 'nullable|string',
            'email' => 'required|email|unique:companies,email,' . $company->id,
            'ecommerce' => 'nullable|string',
        ]);

        $company->update($request->all());
        return redirect()->route('companies.index')->with('success', 'Perusahaan berhasil diperbarui.');
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success', 'Perusahaan berhasil dihapus.');
    }
}
