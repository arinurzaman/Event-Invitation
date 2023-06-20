<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $jml_registrasi_before  = User::all()->count();
        $jml_registrasi_after   = Attendance::all()->count();
        $jml_registrasi_client   = Client::all()->count();

        return view('admin.index', compact('jml_registrasi_before', 'jml_registrasi_after',  'jml_registrasi_client'));
    }
}
