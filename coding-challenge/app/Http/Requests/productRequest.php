<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *
     */
 /*   public function authorize()
    {
        return true;
    }
 */
    /**
     * Get the validation rules that apply to the request.
     *
     *
     */
    public function rules()
    {
        return [
            'name'=> 'required|min:6',
            'description'=> 'required|min:10',
            'price'=> 'required',
            'photo'=> 'required',
        ];
    }
}
