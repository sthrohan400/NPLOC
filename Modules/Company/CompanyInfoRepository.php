<?php
namespace Modules\Company;
use Core\Repository\CoreRepository;
use Modules\Company\CompanyInfoModel;
class CompanyINfoRepository extends CoreRepository{
    private $companyInfoModel;
    public function __construct(CompanyInfoModel $companyInfoModel){
        parent::__construct($companyInfoModel);
        $this->companyInfoModel =  $companyInfoModel;
    }
    public function getByCompanyId($id){
        return $this->companyInfoModel->where('company_id','=',$id)->first();
    }
}