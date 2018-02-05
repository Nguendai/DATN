<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddManufacturerRequest extends FormRequest
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
            'txtCateName'=>'unique:manufacturer,name'
        ];
    }
    public function messages() {
    	return[
    		"txtCateName.unique"=>'Tên danh mục này đã tồn tại'
	    ];
    }
}
