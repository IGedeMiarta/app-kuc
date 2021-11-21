<?php

namespace App\Http\Controllers;

use App\Models\Stockgab;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        if(isset($_GET['search'])){
            $datas = Stockgab::stoksearch($_GET['search'])->paginate(8)->withQueryString();
        }else{
            $datas =Stockgab::stokgabList()->paginate(12)->withQueryString();
        }
        $data['title']='Items Stok';
        $data['items']=$datas;
        return view('pages.items.items',$data);

    }
    
}
