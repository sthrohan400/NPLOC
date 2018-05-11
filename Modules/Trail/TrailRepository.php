<?php
namespace Modules\Trail;
use Core\Repository\CoreRepository;
use Modules\Trail\TrailModel;
class TrailRepository extends CoreRepository{
    public function __construct(TrailModel $trailModel){
        parent::__construct($trailModel);
    }
}