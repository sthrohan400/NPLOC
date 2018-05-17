<?php
namespace Modules\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Company\CompanyRepository;
use Modules\Company\CompanyRequest;
use Session;
class MCompanyController extends Controller{
    private $companyRepo;
    public function __construct(CompanyRepository $companyRepo){
        $this->companyRepo =  $companyRepo;

    }   
    public function index(Request $request){
        return view('company.index');
    }
    public function store(UsersRequest $request){
            $input = $request->except(['password_confirmation']);
            return $this->companyRepo->store($input);
    }
    public function search(Request $request){
        $page = $request->get('page',1);
        $pagesize = $request->get('pagesize',10);
        $keywords = $request->get('keywords',null);
        $orderby = $request->get('orderby',null);
        return $this->companyRepo->partial($page,$pagesize,$keywords,$orderby);
    }
}