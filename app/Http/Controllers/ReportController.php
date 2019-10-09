<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $user = DB::table('users')->get();
       // $order = DB::table('orders')->get();
        $user = \App\User::all();

        // ->join('orders','orders.packages','orders.store_keeper_id',
        //         'orders.status','orders.rejecter_id','orders.rejected_reason',
        //         'orders.created_at','orders.updated_at','orders.admin_id','=','users.user_id')

        return view('report',['users'=>$user]);
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
        //
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

    public function export_excel(request $request){
      
        // $startdate = $request -> startdate;
        // $enddate = $request -> enddate;
       
    //    return $startdate;
    //     return $enddate;
    return 'helo';
    return $request ->validate['startdate'];
    return '[startdate]';
        //return Excel::download(new ReportExport, 'title.xlsx');
        //return "Nama : ".$nama.", Alamat : ".$alamat;
        
      //  return Excel::download(new ReportExport, 'title.xlsx');
    }

  
        
}
