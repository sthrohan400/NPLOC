<?php
namespace Modules\Facilities;
use Core\Repository\CoreRepository;
use Modules\Facilities\FacilitiesModel;
class FacilitiesRepository extends CoreRepository{
    public function __construct(UsersModel $usersModel){
        parent::__construct($usersModel);
    }
}