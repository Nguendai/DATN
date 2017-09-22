<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
	        'txtName'=>'unique:admin_users,name',
	        'txtEmail'=>'unique:admin_users,email',
	        'txtPassword'=>'min:3|max:32',
	        'txtRePassword'=>'same:txtPassword'
        ];
    }
    public function messages() {
	   return[
	   	'txtName.unique'=>'Tên người dùng đã tồn tại',
	   	'txtEmail.unique'=>'Email đăng ký đã tồn tại',
	   	'txtPassword.min'=>'Mật khẩu tối thiểu 6 ký tự',
	   	'txtPassword.max'=>'Mật khẩu tối đa 32 ký tự',
	   	'txtRePassword.same'=>'Xác nhận mật khẩu không chính xác'
	   ];
    }
}
