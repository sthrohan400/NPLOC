<?php
namespace Modules\Company;
use Illuminate\Foundation\Http\FormRequest;
class CompanyRequest extends FormRequest{
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