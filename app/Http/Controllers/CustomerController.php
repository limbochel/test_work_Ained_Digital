<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function Index(){
        $Customers = DB::table('customers')
            ->select('id','fullname', 'phonenumber')
            ->get();
        return $Customers;
    }
    public function Show($id){
        
        $Customers = DB::table('customers AS C')
            
            ->Join('cust_deals','cust_deals.customer_id','=','C.id')
            ->Join('deals AS D','D.id','=','cust_deals.deal_id')
            ->select('C.id AS customer id','C.fullname','D.id AS deal id' )
            ->where('C.id' ,$id)
            ->get();
        
        return $Customers;
    }
    public function Store(Request $req){
        $date = request()->validate([
            'fullname'=>'string',
            'phonenumber'=> 'string'
        ]);
        customer::create($date);
    }
}
