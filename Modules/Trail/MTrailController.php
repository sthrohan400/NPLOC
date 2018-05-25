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
        return view('trail.index');
    }
   public function search(Request $request){
        $page = $request->get('page',1);
        $pagesize = $request->get('pagesize',10);
        $keywords = $request->get('keywords',null);
        $orderby = $request->get('orderby',null);
        return $this->trailRepo->partial($page,$pagesize,$keywords,$orderby);
    }
    public function delete($id){
        $response =  $this->trailRepo->destroy($id);
        return json_encode($response);
    }
    public function multipleDelete(Request $request){
            $ids =  $request->input('ids');
            $response = $this->trailRepo->multipleDestroy($ids);
            return $response;
    }
}