<?php
namespace Modules\Trail;
use Core\Repository\CoreRepository;
use Modules\Trail\TrailModel;
use Modules\Trail\TrailViewModel;
class TrailRepository extends CoreRepository{
    public function __construct(TrailModel $trailModel,TrailViewModel $trailViewModel){
        parent::__construct($trailModel,$trailViewModel);
    }
}