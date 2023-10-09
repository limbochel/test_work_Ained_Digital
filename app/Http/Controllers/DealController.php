<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealController extends Controller
{
    public function Index(){
        $Customers = DB::table('deals')
            ->select('id','cost', 'realty_id')
            ->get();
        return $Customers;
    }
    public function Show($id){
        
        $Customers = DB::table('deals AS D')
            
            ->leftJoin('cust_deals','cust_deals.deal_id','=','D.id')
            ->leftJoin('customers AS C','C.id','=','cust_deals.customer_id')
            ->Join('realties AS R','R.id','=','D.realty_id')
            ->select('D.id AS deal id','C.fullname','R.address','D.cost' )
            ->where('D.id' ,$id)
            ->get();
        
        return $Customers;
    }
    public function Store(Request $req){
        $date = request()->validate([
            'cost'=>'integer',
            'realty_id'=> 'integer',
            'status'=>'boolean'
        ]);
        Deal::create($date);
    }
}
