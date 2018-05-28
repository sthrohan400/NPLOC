<?php
namespace Modules\Facilities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Facilities\FacilitiesRepository;
use Modules\Facilities\FacilitiesRequest;
use Session;
use Core\MessageBag;
class MFacilitiesController extends Controller{
    private $facilitiesRepo;
    public function __construct(FacilitiesRepository $facilitiesRepo){
        $this->facilitiesRepo =  $facilitiesRepo;

    }   
    public function index(Request $request){
        return view('facilities.index');
    }
    public function create(){
        return view('facilities.create');
    }
    public function store(FacilitiesRequest $request){
        $input = $request->all();
        $companyID = $request->session()->get('companyID');
        $langID = $request->session()->get('langID');
        $input['lang_id'] = !empty($langID) ? $langID : 0;
        $input['company_id'] = !empty($companyID) ? $companyID : 0;;
        return $this->facilitiesRepo->store($input);
    }
    public function edit($id){
        $data = $this->facilitiesRepo->getById($id);
        return view('facilities.edit',compact('data'));
    }
    public function update(Request $request , $id){
            $input =  $request->all();
           $response = $this->facilitiesRepo->update($input,$id);
           if($response){
            return redirect()->back();
           }

        

    }
    public function search(Request $request){
        $page = $request->get('page',1);
        $pagesize = $request->get('pagesize',10);
        $keywords = $request->get('keywords',null);
        $orderby = $request->get('orderby',null);
        return $this->facilitiesRepo->partial($page,$pagesize,$keywords,$orderby);
    }
    public function delete($id){
        $response =  $this->facilitiesRepo->destroy($id);
        return json_encode($response);
    }
    public function multipleDelete(Request $request){
            $ids =  $request->input('ids');
            $response = $this->facilitiesRepo->multipleDestroy($ids);
            return var_dump($response);
    }
}