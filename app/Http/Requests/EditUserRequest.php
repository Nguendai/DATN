<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
			'txtPassword'=>'min:3|max:32',
			'txtRePassword'=>'same:txtPassword'
		];
	}
	public function messages() {
		return[
			'txtPassword.min'=>'Mật khẩu tối thiểu 6 ký tự',
			'txtPassword.max'=>'Mật khẩu tối đa 32 ký tự',
			'txtRePassword.same'=>'Xác nhận mật khẩu không chính xác'
		];
	}
}
