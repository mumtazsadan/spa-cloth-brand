<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Products;

class ProdukController extends Controller
{
    //
    public function produk()
    {
        $products = Products::all();
        return Inertia::render('Produk', ['products' => 'Products']);
        
    }
}