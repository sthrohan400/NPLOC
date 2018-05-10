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
        return view('users.index');
    }
    public function create(Request $request){
        return view('users.create');
    }
    public function store(UsersRequest $request){
            $input = $request->except(['password_confirmation']);
            $input['password'] = bcrypt($input['password']);
            return $this->usersRepo->store($input);
    }
    public function search(Request $request){
        $page = $request->get('page',1);
        $pagesize = $request->get('pagesize',10);
        $keywords = $request->get('keywords',null);
        $orderby = $request->get('orderby',null);
        return $this->usersRepo->partial($page,$pagesize,$keywords,$orderby);
    }
    public function delete($id){
        $response =  $this->usersRepo->destroy($id);
        return json_encode($response);
    }
    public function multipleDelete(Request $request){
            $ids =  $request->input('ids');
            $response = $this->usersRepo->multipleDestroy($ids);
            return var_dump($response);
    }
}