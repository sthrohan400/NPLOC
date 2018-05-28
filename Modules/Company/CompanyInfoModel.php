<?php
namespace Modules\Company;
use Core\Model\CoreModel;
class CompanyInfoModel extends CoreModel{
    public $table = "company_info";
    protected $guarded =  ['code','site_token' ];
    protected $fillable = [ 'company_id','title','name','email',
    						'descr1','descr2','descr3','addr1','addr2','phone1','phone2','logo','meta_title','meta_keywords','meta_description','meta_logo'];
}