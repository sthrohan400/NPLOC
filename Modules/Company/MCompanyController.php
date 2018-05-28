<?php
namespace Modules\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Company\CompanyRepository;
use Modules\Company\CompanyInfoRepository;
use Modules\Company\CompanyRequest;
use Session;
class MCompanyController extends Controller{
    private $companyRepo;
    private $companyInfoRepo;
    public function __construct(CompanyRepository $companyRepo,CompanyInfoRepository $companyInfoRepo){
        $this->companyRepo =  $companyRepo;
        $this->companyInfoRepo = $companyInfoRepo;

    }   
    public function index(Request $request){
        return view('company.index');
    }
    public function create(){
        return view('company.create');
    }
    public function store(CompanyRequest $request){
            $input = $request->all();
            $input['code'] = str_random(6);
            $input['site_token'] = \Uuid::generate()->string;
            $company = [];
            $company['code'] = str_random(6);
            $company['site_token'] = \Uuid::generate()->string;
            $company['subscription_expiry'] = $input['subscription_expiry'];
            $company['gmap_token'] = $input['gmap_token'];
            $company['allowed_referrals'] = empty($input['allowed_referrals']) ? 0 : $input['allowed_referrals'] ;
            $company['status'] = $input['status'];
            $company['hold'] = 0;
            $companyinfo = [];
            $companyinfo['title'] = $input['title'];
            $companyinfo['name'] = $input['name'];
            $companyinfo['email'] = $input['email'];
            $companyinfo['addr1'] = $input['addr1'];
            $companyinfo['addr2'] = empty($input['addr2']) ? "" : $input['addr2'] ;
            $companyinfo['descr1'] = empty($input['descr1']) ? "" : $input['descr1'];
            $companyinfo['descr2'] = empty($input['descr2']) ? "" : $input['descr2'];
            $companyinfo['descr3'] = empty($input['descr3']) ? "" : $input['descr3'];
            $companyinfo['phone1'] = empty($input['phone1']) ? "" : $input['phone1'];
            $companyinfo['phone2'] = empty($input['phone2']) ? "" : $input['phone2'];
            $companyinfo['logo'] = $input['logo'];
            $companyinfo['meta_logo'] = $input['meta_logo'];
            $companyinfo['meta_title'] = $input['meta_title'];
            $companyinfo['meta_keywords'] = $input['meta_keywords'];
            $companyinfo['meta_description'] = $input['meta_description'];
            $companydata =  $this->companyRepo->store($company);
            $companyinfo['company_id'] = $companydata->id;
            return $this->companyInfoRepo->store($companyinfo);
            
    }
    public function edit($id){
        try{
            $company = $this->companyRepo->getById($id);
            $companyInfo = $this->companyInfoRepo->getByCompanyId($company->id);
        }
        catch(\Exception $e){

        }
        $company = json_decode(json_encode($company),true);
        $companyInfo = json_decode(json_encode($companyInfo),true);
        $data = array_merge($company,$companyInfo);
        return $data;
        return view('company.edit',compact('data'));
    }
    public function update(Request $request , $id){
        if($request->input('password') && $request->input('password_confirmation')){
            return $this->updatePassword($request,$id);
        }
        else{
            $input =  $request->except(['password']);
           $response = $this->usersRepo->update($input,$id);
           if($response){
            return redirect()->back();
           }

        }

    }
    public function search(Request $request){
        $page = $request->get('page',1);
        $pagesize = $request->get('pagesize',10);
        $keywords = $request->get('keywords',null);
        $orderby = $request->get('orderby',null);
        return $this->companyRepo->partial($page,$pagesize,$keywords,$orderby);
    }
}