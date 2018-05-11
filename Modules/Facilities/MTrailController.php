<?php
namespace Modules\Facilities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Facilities\FacilitiesRepository;
use Modules\Facilities\FacilitiesRequest;
use Session;
class MFacilitiesController extends Controller{
    private $facilitiesRepo;
    public function __construct(FacilitiesRepository $facilitiesRepo){
        $this->facilitiesRepo =  $facilitiesRepo;

    }   
    public function index(Request $request){
       //return $request->session()->all();
        return view('company.index');
    }
    public function store(UsersRequest $request){
            $input = $request->except(['password_confirmation']);
            return $this->facilitiesRepo->store($input);
    }
}