<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.

     
     *
     * @return \Illuminate\Http\Response
     */
//ตัวล๊อกอินที่เชื่อมกับcontroller login กำหนดให้ถ้าเฉพาะหน้านั้นๆเข้าได้หรือไม่ได้
 public function __construct(){
          $this->middleware('auth')
//           //เข้าไม่ได้เฉพาะ create edit
           ->only(['index','create', 'edit']);
//          //เข้าได้หมดยกเว้นindex

//          //->except(['index']);
    }


    public function index()
    {
        $deposit = DB::table('deposit')
        ->paginate(5);
        //return view ('deposit.index', compo);
        return view ('deposit.index', compact('deposit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('deposit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $rules = [
            'username'=> 'required',
            'balance'=> 'required',
            'bankdeposit'=> 'required',
            'accountnumberdeposit'=> 'required',
            'accontnamedeposit'=> 'required',
            'datetime'=> 'required',
            'channeldeposit'=> 'required',
            'tel'=> 'required',
            'opinion' => 'required'
        ];

        $input = request()->except(['_token']);
     //validate คือการกำหนดข้อมูลที่จะทำการบันทึกให้มีเงื่อนไขในการกรอก
        $this->validate($request, $rules);

    try{
    DB::table('deposit')
        ->insert($input);
        

    return redirect('/deposit');
    }catch(Exception $d){
        abort(500);
    }}
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
