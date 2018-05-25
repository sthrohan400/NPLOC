<?php
namespace Modules\Company;
use Core\Repository\CoreRepository;
use Modules\Company\CompanyInfoModel;
class CompanyINfoRepository extends CoreRepository{
    private $companyInfoModel;
    public function __construct(CompanyInfoModel $companyInfoModel){
        
        $this->companyInfoModel =  $companyInfoModel;
        parent::__construct($companyInfoModel);
    }
    public function getByCompanyId($id){
    	$a = new CompanyInfoModel();
        return  $this->companyInfoModel->where('company_id','=',$id)->first();
    }
}