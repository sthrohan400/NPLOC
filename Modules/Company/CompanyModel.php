<?php
namespace Modules\Company;
use Core\Model\CoreModel;
class CompanyModel extends CoreModel{
    public $table = "company";
    protected $guarded =  ['code','site_token' ];
    protected $fillable = [ 'code','site_token','subscription_expiry','gmap_token',
    						'allowed_referrals','status','hold'];

    public $searchableFields = ['code','subscription_expiry'];
    public $displayTableFields = [['key'=>'id','display'=>'ID','sort' => true],['key' => 'code','display'=>'Code'],['key' => 'site_token','display'=>'Site Token','sort' => true],['key' => 'subscription_expiry','display'=>'Expiry Subscription','sort' => true],['key' => 'status','display'=>'Status','option' =>'status']];
}