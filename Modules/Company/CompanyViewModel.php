<?php
namespace Modules\Company;
class CompanyViewModel {
    public $table = "companyinfo";
    public $searchableFields = ['code','subscription_expiry'];
    public $displayTableFields = [['key'=>'id','display'=>'ID','sort' => true],['key'=>'logo','display'=>'Logo','option' => 'image'],['key' => 'name','display'=>'Name'],['key' => 'code','display'=>'Code'],['key' => 'site_token','display'=>'Site Token','sort' => true],['key' => 'subscription_expiry','display'=>'Expiry Subscription','sort' => true],['key' => 'status','display'=>'Status','option' =>'status']];
}