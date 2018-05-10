<?php
namespace Modules\Users;
use Core\Model\CoreModel;
class UsersModel extends CoreModel{
    public $table = "users";
    protected $guarded = ['password','verified'];
    public $searchableFields = ['name','email'];
    public $displayTableFields = [['key' => 'profile_image','display'=>'Profile Image','option' =>'image'],['key'=>'id','display'=>'ID'],['key' => 'name','display'=>'Name'],['key' => 'email','display'=>'Email'],['key' => 'status','display'=>'Status','option' =>'status']];
}