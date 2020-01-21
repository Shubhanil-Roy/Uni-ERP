<?php

namespace App\Http\Controllers\API;

use App\Model\Dealer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function addDealer(Request $request){
        $dealer = new Dealer();
        $dealer->name = $request->name;
        $dealer->phone = $request->phone;
        $dealer->email = $request->email;
        $dealer->address = $request->address;
        $dealer->password = bcrypt($request->password);
        $dealer->save();
        return response()->json([
            'dealer' => $dealer
        ],200);
    }
}
