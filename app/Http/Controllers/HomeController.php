<?php

namespace App\Http\Controllers;
use App\Models\danhsachtiemchung;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dangkytiem(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'diachi' => 'required',
            'doituongut' => 'required',
            'gioitinh' => 'required',
            'ngaysinh' => 'required',
            'sodienthoai' => 'required',
            'email' => 'required'
        ]);

        danhsachtiemchung::create($request->all());

        return redirect('/home')->with('success', 'Đăng ký thành công!');
    }

    public function danhsachtiem()
    {
        $tiemchungs = danhsachtiemchung::all();

        return view('danhsachtiemchung.danhsachtiemchung', compact('tiemchungs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
