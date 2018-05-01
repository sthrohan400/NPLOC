<?php
namespace Modules\Users;
use Illuminate\Foundation\Http\FormRequest;
class UsersRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        $rules = [
            'company_id' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|alpha_num',
            'password_confirmation' => 'required|confirmed'
        ];
        return $rules;
    }
}