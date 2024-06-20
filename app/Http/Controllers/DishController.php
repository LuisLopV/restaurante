<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\dish;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(category $category)
    {
        return view('dishes.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la solicitud para la creación de un nuevo plato
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:30',
            'description' => 'required|string|max:500',
            'price' => 'required|string|max:125',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Crear un nuevo plato
        $dish = new dish();
        $dish->name = $request->name;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->category_id = $request->category_id;
        $dish->user_id = Auth::id();
        $dish->save();

        // Guardar la estantería
        $dish->save();
       
        /*return redirect()->route('tables.create', [
            'library' => $library->id,
            'theme' => $theme->id,
            'shelf' => $shelf->id,
        ])->with('success', 'Estantería creada con éxito. Ahora crea un autor.');*/
    }

    /**
     * Display the specified resource.
     */
    public function show(dish $dish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dish $dish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dish $dish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dish $dish)
    {
        //
    }
}
