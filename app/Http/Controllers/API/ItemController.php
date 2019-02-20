<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;

class ItemController extends Controller
{
    public $successStatus = 200;

    public function getItems()
    {
        $items = Item::paginate(15);

        return response()->json($items, $this->successStatus); 
    }
}
