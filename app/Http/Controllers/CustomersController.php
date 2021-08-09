<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Support\Facades\Redirect;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        $listCustomers = Customers::where('hoten', 'like', "%$search%") ->orwhere('sdt', 'like', "%$search%")->paginate(3);
        return view('customers.index', [
            'listCustomers' => $listCustomers,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [

                'anhdaidien' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',

                'hoten' => 'required|max:255',
                
                'sdt' => 'required',
                'email' => 'required|unique:customers',
                
            ],
            [
                
                'email.unique' => 'Email đã tồn tại!',
                
                'anhdaidien.required' => 'Ảnh đại diện không được để trống',
                'hoten.required' => 'Họ tên không được để trống',
                
                'sdt.required' => 'SĐT không được để trống',
                'email.required' => 'Email không được để trống',
                

            ]
        );

        // Nhận dữ liệu
        $anhdaidien = $request->file('anhdaidien');
        $hoten = $request->get('hoten');
        $gioitinh = $request->get('gioitinh');
        $sdt = $request->get('sdt');
        $email = $request->get('email');
        

        $customers = new Customers();

        $new_image = time() . '.' . $anhdaidien->getClientOriginalExtension();
        $request->anhdaidien->move(public_path('images'), $new_image);
        
        $customers->anhdaidien = $new_image;
        
        $customers->hoten = $hoten;
        $customers->gioitinh = $gioitinh;
        $customers->sdt = $sdt;
        $customers->email = $email;
        $customers->save();


        return Redirect::route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
