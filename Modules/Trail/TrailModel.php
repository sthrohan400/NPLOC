<?php
namespace Modules\Trail;
use Core\Model\CoreModel;
class TrailModel extends CoreModel{
    public $table = "trails";
    protected $guarded =  ['password','verified' ];
    protected $fillable = [ 'email','username','name','address',
    						'phone','membership_type','gender',
    						'profile_image','status','password',
    						'last_login','reset_token','reset_token_expiry',
    						'google2fa_secret_token','user_expiry_date','2fa_enabled',
    						'verified'];

    public $searchableFields = ['name','email'];
    public $displayTableFields = [['key'=>'id','display'=>'ID','sort' => true],['key' => 'profile_image','display'=>'Profile Image','option' =>'image'],['key' => 'name','display'=>'Name','sort' => true],['key' => 'email','display'=>'Email','sort' => true],['key' => 'status','display'=>'Status','option' =>'status']];
}