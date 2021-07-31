<?php

namespace App\Http\Controllers;
use App\models\Customers;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $customers = Customers::orderBy('id', 'desc')->paginate(10);

        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'nmp' => 'required|unique:customers|max:225',
            'total_pesan' => 'required',
            'alamat' => 'required',
            'notlp' => 'required', 
        ]);

        $customers = new customers;

        $customers->nmp = $request->nmp;
        $customers->total_pesan = $request->total_pesan;
        $customers->alamat = $request->alamat;
        $customers->notlp= $request->notlp;
        $customers->save();
    }
    public function show($id)
    {
        $customers = customers::where('id', $id)->first();
        return view('customers.show', ['customers' => $customers]);
    }
    public function edit($id)
    
    {
        $customers = customers::where('id', $id)->first();
        return view('customers.edit', ['customers' => $customers]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nmp' => 'required|unique:customers|max:225',
            'total_pesan' => 'required',
            'alamat' => 'required',
            'notlp' => 'required',   
        ]);

        Customers::find($id)->update([
            'npm' => $request->npm,
            'total_pesan' => $request->total_pesan,
            'alamat' => $request->alamat,
            'notlp' => $request->notlp,
        ]);

        return redirect ('/');
    }
    public function destory($id)
    {
        Customers::find($id)->delete();
        return redirect ('/customers'); 
    }
}


