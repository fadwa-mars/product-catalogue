<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products = [
        ['id' => 1, 'title' => 'HP16D0195NF', 'price' => 'Intel i5 12th Gen', 'image' => 'HP16D0195NF.jpg', 'description' => 'Laptop polyvalent conçu pour la bureautique et multimédia.'],
        ['id' => 2, 'title' => 'HP14424U3EA', 'price' => 'Intel i3 11th Gen', 'image' => 'HP14424U3EA.jpg', 'description' => 'Portable léger adapté aux tâches quotidiennes.'],
        ['id' => 3, 'title' => 'HUA6901443442959', 'price' => 'Ryzen 5 4600H', 'image' => 'HUA6901443442959.jpg', 'description' => 'Bonne performance pour bureautique + montage léger.'],
        ['id' => 4, 'title' => 'NXATHEF002', 'price' => 'Intel i7 10th Gen', 'image' => 'NXATHEF002.jpg', 'description' => 'Portable professionnel avec écran Full HD.'],
    ];

    /**
     * Afficher la liste des produits
     */
    public function index()
    {
        $products = $this->products;
        return view('products.index', ['products' => $products]);
    }

    /**
     * Afficher les détails d'un produit
     */
    public function show($id)
    {
        $product = $this->find($id);
        
        if (!$product) {
            abort(404, 'Produit introuvable');
        }
        
        return view('products.show', compact('product'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Enregistrer un nouveau produit avec validation
     */
    public function store(CreateProductRequest $request)
    {
        // Les données sont déjà validées par CreateProductRequest
        $validated = $request->validated();
        
        // Rediriger avec message de succès
        return redirect()
            ->route('products.create')
            ->with('success', 'Le produit a été ajouté avec succès !');
    }

    /**
     * Fonction find pour chercher un produit par ID
     */
    private function find($id)
    {
        foreach ($this->products as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}