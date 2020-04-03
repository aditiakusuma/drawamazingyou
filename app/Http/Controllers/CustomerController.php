<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers= Customer::All();
        
        return response()->json([
            'status' => true,
            'data' => $customers, 
            200]);
        
        //return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'telepon' => 'required',
            'email' => 'required'
        ]);
        
        $nama = $request->input('nama');
        $telepon = $request->input('telepon');
        $email = $request->input('email');

        $customer = new Customer([
            'nama' => $nama,
            'telepon' => $telepon,
            'email' => $email
        ]);

        if ($customer->save()) {
            $customer->index =[
                'href' => 'api/customers',
                'method' => 'GET',
            ];

            $response = [
                'msg' => 'created',
                'data' => $customer
            ];
    
            return response()->json($response, 201);
        }

        $response = [
            'msg' => 'ERROR'
        ];

        return response()->json($response, 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // $show= Customer::where('id','=', $customer)->get();
        // dd($show);
        return response()->json([
            'status' => true,
            'data' => $customer, 
            200]);

            //return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
