<?php

namespace App\Http\Controllers;

use App\Models\Realty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealtyController extends Controller
{
    public function Index(){
        $Realty = DB::table('realties')
            ->select('ID', 'Address')
            ->get();
        return $Realty;
    }
    public function Show($id){
        
        $Realty = DB::table('realties')
            ->Join('deals','realties.id','=','deals.realty_id')
            ->select('deals.id as deals id','realties.id as realties id','realties.address')
            ->where('realties.id' ,$id)
            ->get();
        
        return $Realty;
    }
}
