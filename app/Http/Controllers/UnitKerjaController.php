<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UnitKerja;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $objunitkerja = new UnitKerja();
        $ar_UnitKerja = $objunitkerja->get();
        return view('unitkerja.index',['arunitkerja'=>$ar_UnitKerja]);
    }
}
