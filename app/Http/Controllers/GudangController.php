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
        $currentStep = 'produk';
        $steps = $this->getRefillSteps();
        return view('customer.createrefile', compact('currentStep', 'steps'));
    }

    public function jadwallocation()

    {
        $currentStep = 'lokasi';
        $steps = $this->getRefillSteps();
        return view('customer.refile.jadwalandlocation', compact('currentStep', 'steps'));
    }

    public function pengiriman()
    {
        $currentStep = 'pengiriman';
        $steps = $this->getRefillSteps();
        return view('customer.refile.pickupsection', compact('currentStep', 'steps'));
    }

    public function payment()
    {
        $currentStep = 'pembayaran';
        $steps = $this->getRefillSteps();
        return view('customer.refile.payment', compact('currentStep', 'steps'));

    }
    public function konfirmasi()
    {
        $currentStep = 'konfirmasi';
        $steps = $this->getRefillSteps();
        return view('customer.refile.confirmation', compact('currentStep', 'steps'));
    }

    protected function getRefillSteps()
    {
        return [
            'produk' => [
                'number' => 1,
                'label' => 'Produk',
                'route' => 'customer.createrefile'
            ],
            'lokasi' => [
                'number' => 2,
                'label' => 'Lokasi & Jadwal',
                'route' => 'customer.refile.jadwalandlocation'
            ],
            'pengiriman' => [
                'number' => 3,
                'label' => 'Pengiriman',
                'route' => 'customer.refile.pickupsection'
            ],
            'pembayaran' => [
                'number' => 4,
                'label' => 'Pembayaran',
                'route' => 'customer.refile.payment'
            ],
            'konfirmasi' => [
                'number' => 5,
                'label' => 'Konfirmasi',
                'route' => 'customer.refile.confirmation'
            ]
        ];
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
