<?php
namespace Modules\Facilities;
use Core\Model\CoreModel;
class FacilitiesModel extends CoreModel{
    public $table = "facilities";
    protected $guarded =  [ ];
    protected $fillable = [ 'name','lang_id','icon',
    						'status','company_id','short_descr'];

    public $searchableFields = ['name','email'];
    public $displayTableFields = [['key'=>'id','display'=>'ID','sort' => true],['key' => 'icon','display'=>'Icon','option' =>'image'],['key' => 'name','display'=>'Name','sort' => true],['key' => 'status','display'=>'Status','option' =>'status']];
}