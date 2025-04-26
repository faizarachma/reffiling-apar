<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }

    public function createrefile()
    {
        return view('customer.createrefile');
    }

    public function jadwallocation()
    {
        return view('customer.refile.jadwalandlocation');
    }



    public function store(Request $request)
    {
        

    }

    public function edit($id)
    {
        // Logic to show the form for editing an existing item
        return view('dashboard.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update an existing item
        // Validate and update the data
        return redirect()->route('dashboard.index');
    }

    public function destroy($id)
    {
        // Logic to delete an existing item
        return redirect()->route('dashboard.index');
    }
}
