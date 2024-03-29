<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $product = $this->route()->parameter('product');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:products',
            'status' => 'required|in:1,2',
            'file' => 'image',
        ];

        if ($product) {
            $rules['slug'] = 'required|unique:products,slug,' . $product->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'category_id'  => 'required',
                'price'  => 'required',
                'link'  => 'required',
            ]);
        }
        return $rules;
    }
}
