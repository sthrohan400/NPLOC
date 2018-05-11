<?php
namespace Modules\Trail;
use Illuminate\Foundation\Http\FormRequest;
class TrailRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        $rules = [
           
        ];
        return $rules;
    }
}