<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        return view('Sekme.Home');
    }

    public function games()
    {
        return view('Sekme.Games');
    }

    public function contact()
    {
        return view('Sekme.Contact');
    }

    public function create1(Request $request)
    {
        $data = $request->all();

        DB::table('messages')->insert([
            'name' => $request->get('name'),
            'message' => $request->get('message'),
            'subject' => $request->get('subject'),
            'email' => $request->get('email'),
        ]);

        return 'Kayıt başarıyla tamamlandı';
    }
}

