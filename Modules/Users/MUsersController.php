<?php
namespace Modules\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Users\UsersRepository;
use Modules\Users\UsersRequest;
use Session;
class MUsersController extends Controller{
    private $usersRepo;
    public function __construct(UsersRepository $usersRepo){
        $this->usersRepo =  $usersRepo;

    }   
    public function index(Request $request){
       //return $request->session()->all();
        return view('users.index');
    }
    public function store(UsersRequest $request){
            $input = $request->except(['password_confirmation']);
            return $this->usersRepo->store($input);
    }
}