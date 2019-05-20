<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Item;


class ItemController extends Controller
{
    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function index()
    {
    	$items = Item::all();
    	return view('item',compact('items'));
    }


    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function create(Request $request)
    {
    	$this->validate($request,['title'=>'required']);
    	$items = Item::create($request->all());
    	return back();
    }
}
