<?php

namespace App\Http\Controllers;

use App\Models\Pizze;
use Illuminate\Http\Request;

class PizzeController extends Controller
{
    public function list() {
        return Pizze::orderBy('id', 'desc')->get();
    }

    public function view($id) {
        $pizza = Pizze::find($id);
        return $pizza;
    }

    public function create(Request $request) {
        $newPizzaData = json_decode($request->getContent());

        $newPizza = new Pizze();

        $newPizza->pizze = $newPizzaData->pizze;
        $newPizza->img = $newPizzaData->img;
        $newPizza->price = $newPizzaData->price;
        $newPizza->impasto = $newPizzaData->impasto;
        $newPizza->allergeni = $newPizzaData->allergeni;
        $newPizza->description = $newPizzaData->description;

        $newPizza->save();
        return $newPizza;

    }

    public function edit(Request $request, $id) {
        $pizza = Pizze::find($id);
        $newPizzaData = json_decode($request->getContent());

        $pizza->pizze = $newPizzaData->pizze;
        $pizza->img = $newPizzaData->img;
        $pizza->price = $newPizzaData->price;
        $pizza->impasto = $newPizzaData->impasto;
        $pizza->allergeni = $newPizzaData->allergeni;
        $pizza->description = $newPizzaData->description;

        $pizza->save();
        return $pizza;
    }

    public function delete(Request $request, $id) {
        $pizza = Pizze::where("id", $id)->delete();
        return $pizza;
    }
}
