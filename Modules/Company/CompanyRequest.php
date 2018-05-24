<?php
namespace Modules\Company;
use Illuminate\Foundation\Http\FormRequest;
class CompanyRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        $rules = [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required',
            'gmap_token' => 'required',
            'subscription_expiry' =>'required'
        ];
        return $rules;
    }
}