<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
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
