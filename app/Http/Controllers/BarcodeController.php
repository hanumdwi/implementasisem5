<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Milon\Barcode\DNS1D;

class BarcodeController extends Controller
{
    function barcode(){

        $d = new DNS1D();
        $d->setStorPath(__DIR__.'/cache/');
        $barcode_data = $d->getBarcodeHTML('9780691147727', 'C128');

        return view('barcode', compact('barcode_data'));

    }
}
