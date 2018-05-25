<?php
namespace Modules\Facilities;
use Core\Repository\CoreRepository;
use Modules\Facilities\FacilitiesModel;
class FacilitiesRepository extends CoreRepository{
    public function __construct(FacilitiesModel $facilitiesModel){
        parent::__construct($facilitiesModel);
    }
}