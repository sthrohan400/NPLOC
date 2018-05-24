<?php
namespace Modules\Trail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Trail\TrailRepository;
use Modules\Trail\TrailRequest;
use Session;
class MTrailController extends Controller{
    private $trailRepo;
    public function __construct(trailRepository $trailRepo){
        $this->trailRepo =  $trailRepo;

    }   
    public function index(Request $request){
        return view('company.index');
    }
    public function store(UsersRequest $request){
            $input = $request->except(['password_confirmation']);
            return $this->trailRepo->store($input);
    }
}