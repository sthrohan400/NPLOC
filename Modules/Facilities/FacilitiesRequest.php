<?php
namespace Modules\Users;
use Illuminate\Foundation\Http\FormRequest;
class FacilitiesRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        $rules = [
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|alpha_num|confirmed',
            'password_confirmation' => 'required'
        ];
        return $rules;
    }
}