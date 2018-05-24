<?php
namespace Core\Repository;
use Illuminate\Database\Eloquent\Model;
use Core\Interfaces\CoreInterface;
use DB;	
class CoreRepository implements CoreInterface
{
	protected $entityModel;
	protected $ent;
	protected $viewModel;
	public function __construct($myModel,$myViewModel = null){
		$ent = $myModel;
		$this->entityModel = new $ent;
		if(isset($myViewModel)){
			$this->viewModel = new $myViewModel;
		}
		else{
			$this->viewModel = new $ent;
		}
		return $this->viewModel;
	}
	public function getById($id){
		try{
			return $this->entityModel->find($id);
		}
		catch(\Exception $e){
			return 255;
		}
		
	}
	public function getAll(){
		try{
			return $this->entityModel->all();
		}
		catch(\Exception $e){
			return 255;
		}
		
	}
	public function getPaginate($val = 10){
		return $this->entityModel->paginate($val);
	}
	public function getPureId($id,$columnname = array()){
		return $this->entityModel->all($columnname);
	}
	public function store($inputData){
		return $this->entityModel->create($inputData);
	}
	public function update($inputData,$id){
		return $this->entityModel->findorFail($id)->update($inputData);
	}
	public function destroy($id){
		return  $this->entityModel->find($id)->delete();
	}
	public function multipleDestroy($ids){
		$ids = json_decode($ids,true);
		if(empty($ids)){
			return 0;
		}
		$deleted_ids = [];
		$total_data =  count($ids);
		$i = 0;
		foreach($ids as $id){
			$is_deleted = false;
			$is_deleted = $this->entityModel->find($id)->delete();
			if($is_deleted){
				$deleted_ids[]=$id;
				$i++;
			}
			if($i == $total_data){
			return 1;
			}
		}
		return $deleted_ids;
		
	}
	public function partial($page=1,$pagesize=1000,$keywords=null,$orderBy=""){
		if(empty($orderBy))
			$orderBy = 'created_at ASC';
		else
			$orderBy = urldecode($orderBy);

		$off = ($page - 1) >= 0 ? ($page -1) : 0; 	
		$offset = $off * $pagesize;
		$limit = $pagesize;
		$sql = "SELECT * FROM ". $this->viewModel->table;
		$sql .= " WHERE (";
		$sql .= " deleted_at IS NULL ";
		if(isset($keywords)){
			$sql .= " AND (";
			$searchableFields = $this->viewModel->searchableFields;
			$sizeFields = count($searchableFields);
			foreach($searchableFields as $key => $field){
				if($key <= 0)
					$sql .=$field." LIKE "."'%".$keywords."%'";	
				else
					$sql .=" or ".$field." LIKE "."'%".$keywords."%'";
			}
			$sql .= ") ";
		}
		$sql .= ") ";
		//$sql .= "OR ( deleted_at == '0000:00:00' )";
		$sql .= " ORDER BY ".$orderBy;
		$sql .= " LIMIT ".$limit;
		$sql .= " OFFSET ".$offset;
		$response = [];
		$result =  DB::select(DB::raw($sql));
		$countsql = "SELECT COUNT(*) as count FROM ".$this->viewModel->table." WHERE deleted_at IS NULL";
		$total = DB::select(DB::raw($countsql));
		//return ($total);
		$response['total'] = $total[0]->count;
		$response['rows'] = $result;
		$response['page'] = $page;
		$response['pagesize'] = $pagesize;
		$response['fields'] = $this->viewModel->displayTableFields; 
		return $response;	
	}
	

}