<?php

namespace App\Http\Controllers;

use App\Models\GlobalPiutangTempo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
   public function piutangtempo(Request $request){
       $kodefaktur = $request->kodefaktur;
       $piutang = GlobalPiutangTempo::where('kodefakturjual','=',$kodefaktur)->first();

       $result = [
           'message'=> 'Detail Piutang By KodeFaktur',
           'data'=> $piutang
       ];

       return response()->json($result,Response::HTTP_OK);
   } 
}
