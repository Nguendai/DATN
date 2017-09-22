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
	        'txtname'=>'unique:users,name',
	        'txtemail'=>'unique:users,email',
	        'txtpassword'=>'min:3|max:32',
	        'txtrepassword'=>'same:txtpassword'
        ];
    }
    public function messages() {
	   return[
		   'txtname.unique'=>'Tên người dùng đã tồn tại',
		   'txtemail.unique'=>'Email đăng ký đã tồn tại',
		   'txtpassword.min'=>'Mật khẩu tối thiểu 6 ký tự',
		   'txtpassword.max'=>'Mật khẩu tối đa 32 ký tự',
		   'txtrepassword.same'=>'Xác nhận mật khẩu không chính xác'
	   ];
    }
}
