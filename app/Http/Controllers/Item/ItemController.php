<?php

namespace App\Http\Controllers\Item;

use App\Models\Item\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Item::orderBy('created_at', 'DESC')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newItem  = new Item;
        $newItem->name = $request->item['name'];
        $newItem->save();

        return $newItem;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $existingItem = Item::find($id);

        if ($existingItem) {
            $existingItem->completed = $request->Item['completed'] ? true : false;
            $existingItem->completed_at = $request->Item['completed'] ? Carbon::now() : null;
            $existingItem->save();
            return $existingItem;
        }
        return "Item not found";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $existingItem = Item::find($id);

        if ($existingItem) {
            $existingItem->delete();
            return "Item deleted successfully";
        }

        return "Item not found";
    }
}
