<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    public function authorize(): bool {
        return true; }

    public function rules(): array {
        return [
            'title' => 'required|min:3|string',
            'price' => 'required|numeric|min:0',
            'desc' => 'required|min:10|string'
        ];}

    public function messages(): array {
        return [
            'title.required' => 'Le titre du produit est obligatoire',
            'title.min' => 'Le titre doit avoir au minimum 3 caractères',
            'title.string' => 'Le titre doit être une chaîne de caractères',
            
            'price.required' => 'Le prix du produit est obligatoire',
            'price.min' => 'Le prix doit être supérieur ou égal à 0',
            'price.numeric' => 'Le prix doit être un nombre',
            
            'desc.required' => 'La description du produit est obligatoire',
            'desc.min' => 'La description doit avoir au minimum 10 caractères',
            'desc.string' => 'La description doit être une chaîne de caractères'
        ]; }
}