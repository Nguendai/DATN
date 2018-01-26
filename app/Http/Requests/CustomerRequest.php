<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
	        'name'=>'unique:users,name',
	        'email'=>'unique:users,email',
	        'password'=>'min:3|max:32',
        ];
    }
    public function messages() {
	   return[
		   // 'name.unique'=>'Tên người dùng đã tồn tại',
		   // 'email.unique'=>'Email đăng ký đã tồn tại',
		   // 'password.min'=>'Mật khẩu tối thiểu 6 ký tự',
		   // 'password.max'=>'Mật khẩu tối đa 32 ký tự',
	   ];
    }
}
