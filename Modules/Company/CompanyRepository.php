<?php
namespace Modules\Company;
use Core\Repository\CoreRepository;
use Modules\Company\CompanyModel;
use Modules\Company\CompanyViewModel;
class CompanyRepository extends CoreRepository{
    public function __construct(CompanyModel $companyModel,CompanyViewModel $companyViewModel){
        parent::__construct($companyModel,$companyViewModel);
    }
}