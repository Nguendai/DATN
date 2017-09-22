<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
        return [
	        'txtname'=>'unique:products,name'
        ];
    }
    public  function messages() {
	    return [
		    "txtname.unique"=>'Tên sản phẩm này đã tồn tại'
	    ];
    }
}
