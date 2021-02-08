<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\http\Requests\ItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        return view('admin.item.index');
    }

    public function create()
    {
        return view('admin.item.create');
    }

    public function add(ItemRequest $request)
    {
        //$posts = $request->all();
        Item::create($request->all());
        return redirect()->route('admin.item.index');
    }

    public function edit(Request $request)
    {
        $item = Item::find($request->id);
        $data = ['item' => $item];
        return view('admin.item.edit', $data);
    }
    // public function edit($id)
    // {
    //     $item = Item::find($id);
    //     $data = ['item' => $item];
    //     return view('admin.item.edit', $data);
    //     // $data = ['id' => $request->id];
    //     // return view('admin.item.edit', $data);
    // }

    public function update(ItemRequest $request)
    {
        $posts = $request->all();
        Item::find($request->id)->update($posts);
        return redirect()->route('admin.item.edit', ['id' => $request->id]);
    }
    // public function update(request $request)
    // {
    //     $date = ['id' => $request->id];
    //     return request()->route('admin.item.edit', $date);
    // }
}
