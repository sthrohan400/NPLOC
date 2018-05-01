<?php
namespace Modules\Company;
use Core\Repository\CoreRepository;
use Modules\Company\CompanyModel;
class CompanyRepository extends CoreRepository{
    public function __construct(CompanyModel $companyModel){
        parent::__construct($companyModel);
    }
}