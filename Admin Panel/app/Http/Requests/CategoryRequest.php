<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
                        'category' => [
                            'required',
                            'unique:categories,name',
                            'max:50',
                            'min:4'
                        ]

                    ];
                }
            case 'PUT': {
                    return [
                        // 'category'=>'required|unique:categories,name|max:50|min:4',
                        'id'=>'required',
                        'category' => [
                            'required',
                            'unique:categories,name,'.$this->get('id'),
                            // Rule::unique('categories','name')->ignore($this->get('id')),
                            'max:50',
                            'min:4'
                        ]

                    ];
                }
            default:
                break;
        }
        // return [
        //     // 'category'=>'required|unique:categories,name|max:50|min:4',
        //     'category' => [
        //         'required',
        //         'unique:categories,name',
        //         'max:50',
        //         'min:4'
        //     ]

        // ];
    }
}
