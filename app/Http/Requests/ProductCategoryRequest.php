<?php

namespace CodeShopping\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'categories' => 'required|exists:categories,id' // pegar ID e verificar pelo campo ID na tabela categories
            // array
        ];
    }
}
