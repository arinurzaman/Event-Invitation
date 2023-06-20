<?php

namespace App\Http\Controllers;

use App\Exports\ClientExport;
use App\Models\Client;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ClientsController extends Controller
{
    public function index(){
        return view('admin.registrants.clients');
    }

    public function show()
    {
        $data_client = Client::all();
        $data_client = $data_client->sortByDesc('created_at');

        $jml_registrasi_client = Client::all()->count();

        return view('admin.Registrants.clients', ['data_client' => $data_client, 'jml_registrasi_client' => $jml_registrasi_client]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'company' => 'required',
            'email' => 'required|email:dns',
        ]);
   
        Client::create($validatedData);

        return view('client', $validatedData);

    }



    public function exportClient(){
        return Excel::download(new ClientExport, 'Clients.xlsx');
    }


}
