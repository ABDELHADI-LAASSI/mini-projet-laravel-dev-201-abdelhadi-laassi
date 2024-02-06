<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminV() {
        $products = Product::all();
        return view("admin",compact('products'));
    }
    public function adminAjouterForm() {
        return view("ajouter");
    }

    public function adminAjouterLogic(Request $request){
        $form = $request->validate([
            'libellé' => 'required',
            'prix' => 'required',
            'quantité' => 'required',
            'description' => 'required',
            'type' => 'required',
            'image' => 'required | image',
        ]);




        $form['image'] = $request->file('image')->store('prodcut','public');

        // dd($form['image']);

        Product::create($form);

        return to_route('adminV');

    }

    public function adminDeleteLogic(Request $request) {
        $produit = Product::findOrFail($request->id);
        $produit->delete();

        return redirect()->route('adminV');
    }

    public function admineAfficherProduitLogic(Request $request) {
        $product = Product::findOrFail($request->id);

        return view ('product',compact('product'));
    }
}
