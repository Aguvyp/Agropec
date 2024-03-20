<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('user')->orderBy('created_at', 'DESC')->with(['user'])->get();
        return view('shop', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('products.productCreate', [
            'name' => '',
            'image' => '',
            'price' => '',
            'description' => ''
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        // Obtener el archivo de imagen
        $imageFile = $request->file('image');

        // Generar un nombre único para la imagen
        $imageName = time() . '_' . $imageFile->getClientOriginalName();

        // Mover y almacenar la imagen en el sistema de archivos público
        $imageFile->move(public_path('images'), $imageName);

       // Obtener el archivo de imagen
      /*  $imageFile = $request->file('image'); */

       // Convertir la imagen a base64
       /* $base64Image = base64_encode(file_get_contents($imageFile)); */

        $new_product = new Product;
        $new_product->name = $validate['name'];
        $new_product->price = $validate['price'];
        $new_product->description = $validate['description'];
        $new_product->user_id = auth()->user()->id;
        $new_product->image = $imageName;


        $new_product->save();

        return redirect()->route('shop');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.productEdit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
        // Obtener el archivo de imagen
        $imageFile = $request->file('image');

        // Generar un nombre único para la imagen
        $imageName = time() . '_' . $imageFile->getClientOriginalName();

        // Mover y almacenar la imagen en el sistema de archivos público
        $imageFile->move(public_path('images'), $imageName);

        $product->image = $imageName;
        }


        $product->name = $validate['name'];
        $product->price = $validate['price'];
        $product->description = $validate['description'];
        $product->user_id = auth()->user()->id;



        $product->save();

        return redirect()->route('user.profile', ['user' => $product->user->id]);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete(Product $product)
    {
        return view('products.productDelete', [
            'product' => $product
        ]);

    }


    public function destroy(Product $product, Request $request)
    {
        $product->delete();
        return redirect()->route('shop');
    }


}
