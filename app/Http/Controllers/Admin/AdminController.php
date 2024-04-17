<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allTenants()
    {
        $tenants = Tenant::all();
        return view('admin.all_tenants', compact('tenants'));
    }
    public function storeSubdomain(Request $request)
    {
        $tanant = Tenant::create(['id' => $request->subdomain]);
        $tanant->domains()->create(['domain' => $request->subdomain . '.localhost']);
        return redirect('/all_tenants')->with('success', 'subdomain created successfully!');
    }
}
