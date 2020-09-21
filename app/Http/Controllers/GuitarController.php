<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuitarType;
use App\Models\Guitar;

class GuitarController extends Controller
{
    public function form_create()
    {
        $guitarTypes = GuitarType::all();

        return view('create', compact('guitarTypes'));
    }

    public function create(Request $request)
    {
        $guitar = Guitar::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'type_id' => $request->guitar_type,
            'price' => $request->price
        ]);

        $message = "Товар ID #$guitar->id $guitar->brand успешно добавлен.";

        echo $message;
    }

    public function show($id)
    {
        $guitar = Guitar::find($id);
        $type = Guitar::find($id)->type;

        return view('show', compact('guitar', 'type'));
    }

    public function form_update($id)
    {
        $guitarTypes = GuitarType::all();
        $guitar = Guitar::find($id);

        return view('update', compact('guitar', 'guitarTypes'));
    }

    public function update($id, Request $request)
    {
        Guitar::where('id', $id)->update([
            'brand' => $request->brand,
            'model' => $request->model,
            'type_id' => $request->guitar_type,
            'price' => $request->price
        ]);

        $message = "Товар ID #$id $request->brand успешно обновлен.";

        echo $message;
    }

    public function delete($id)
    {
        $guitar = Guitar::find($id);
        Guitar::where('id', $id)->delete();

        $message = "Товар ID #$guitar->id $guitar->brand успешно удален.";

        echo $message;
    }
}
