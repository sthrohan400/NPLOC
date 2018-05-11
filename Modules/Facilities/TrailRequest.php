<?php
namespace Modules\Facilities;
use Illuminate\Foundation\Http\FormRequest;
class FacilitiesRequest extends FormRequest{
    public function authorize(){
        return true;
    }
    public function rules(){
        $rules = [
           
        ];
        return $rules;
    }
}