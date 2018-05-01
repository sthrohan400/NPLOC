<?php
namespace Modules\Users;
use Core\Model\CoreModel;
class UsersModel extends CoreModel{
    protected $table = "users";
    protected $guarded = ['password','verified'];
}