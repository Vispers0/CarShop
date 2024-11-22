<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DealersController
{
    public function index(){
        $dealers = DB::table('dealers')->get();
        return view('dealers', ['dealers_list' => $dealers]);
    }

    public function dealerIndex(){
        return view('add_dealer');
    }

    public function loadDealers(){
        $json = File::json(base_path('/resources/json/dilers.json'));
        foreach ($json as $data){
            DB::table('dealers')->upsert(
                [
                    ['name'=>(string)$data['Name'], 'city'=>(string)$data['City'], 'address'=>(string)$data['Address'], 'area'=>(string)$data['Area'], 'rating'=>(double)$data['Rating']]
                ],
                ['id']
            );
        }
        return redirect()->route("dealers");
    }

    public function addDealer(Request $request): RedirectResponce {
        $name = $request->input('name');
        $city = $request->input('city');
        $address = $request->input('address');
        $area = $request->input('area');
        $rating = $request->input('rating');

        DB::table('dealers')->upsert(
            [
                ['name' => $name, 'city' => $city, 'address' => $address, 'area' => $area, 'rating' => $rating]
            ],
            ['id']
        );

        return redirect()->route('dealers');
    }
}
