<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST': {
                    return [
                        // 'category'=>'required|unique:categories,name|max:50|min:4',
                        'title' => 'required|max:100|min:5',
                        'description'=>'required|max:5000|min:100',
                        'product_img'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                        'category'=>'required|exists:categories,id',
                    ];
                }
            case 'PUT': {
                    return [
                        // 'category'=>'required|unique:categories,name|max:50|min:4',
                        'id'=>'required|exists:products',
                        'title' => 'required|max:100|min:5',
                        'description'=>'required|max:5000|min:100',
                        'category'=>'required|exists:categories,id',
                        'product_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


                    ];
                }
            default:
                break;
        }

    }
}
