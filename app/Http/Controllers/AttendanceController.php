<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendEmail;
use App\Models\Attendance;
use App\Exports\UserExport;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Exports\AttendanceExport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AttendanceController extends Controller
{
   
    public function index()
    {
        return view('admin.attending');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
        ]);
        
        $qrcode = Str::random(20);
        $role = 'participants';
        $validatedData['qrcode'] = $qrcode;
        $validatedData['role'] = $role;
        User::create($validatedData);

        
        $data ['qrcode'] = QrCode::format('png')
        // ->eyeColor(0, 248, 34, 73, 46, 151, 177)
        ->merge('https://360vpro.id/digital-invitation-1/img/logo.png', .6, true)
        ->size(200)
        ->generate($qrcode);
        
        // Mail::to('justinsaefullah@gmail.com')->send(new SendEmail, $data);

        return view('getqrcode', $data);
    }

    public function attendance(Request $request)
    {
        $user = new Attendance();
        $user->qrcode = $request->qrcode;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/attending')->with('success', 'Data berhasil ditambahkan');
    }
    public function attendancemanual(Request $request)
    {
        $user = new Attendance();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/attending')->with('success', 'Data berhasil ditambahkan');
    }

    public function before()
    {
        
        $data_before = User::all();
        $data_before = $data_before->SortByDesc('created_at');

        $jml_registrasi_before  = User::all()->count();
        
        return view('admin.registrants.before_events', ['data_before' => $data_before, 'jml_registrasi_before' => $jml_registrasi_before ]);

    }


    public function atvenue()
    {
       
        $data_after = Attendance::all();
        $data_after = $data_after->SortByDesc('created_at');
        
        $jml_registrasi_after  = Attendance::all()->count();

        return view('admin.registrants.at_venue', ['data_after' => $data_after, 'jml_registrasi_after' => $jml_registrasi_after]);
    }
    

    public function exportRegistrants(){
        return Excel::download(new UserExport, 'Registrants.xlsx');
    
    }
    public function exportAttendance(){
        return Excel::download(new AttendanceExport, 'Attendance.xlsx');
    }

    public function testqr(){

    }


}
