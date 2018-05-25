<?php
namespace Modules\Trail;
use Core\Model\CoreModel;
class TrailViewModel extends CoreModel{
    public $table = "trailinfo";
    public $searchableFields = ['id','trail_name'];
    public $displayTableFields = [['key'=>'id','display'=>'ID','sort' => true],['key' => 'trail_name','display'=>'Name','sort' => true],['key' => 'company_name','display'=>'Company Name','sort' => true],['key' => 'lang','display'=>'Langauge'],['key' => 'total_spots','display'=>'Total Spots'],['key' => 'total_facilities','display'=>'Total Facilities'],['key' => 'status','display'=>'Status','option' =>'status']];
}