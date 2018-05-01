<?php
namespace Modules\Users;
use Core\Repository\CoreRepository;
use Modules\Users\UsersModel;
class UsersRepository extends CoreRepository{
    public function __construct(UsersModel $usersModel){
        parent::__construct($usersModel);
    }
}