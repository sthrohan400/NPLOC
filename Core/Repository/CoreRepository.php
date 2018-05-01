<?php
namespace Core\Repository;
use Illuminate\Database\Eloquent\Model;
use Core\Interfaces\CoreInterface;
use DB;	
class CoreRepository implements CoreInterface
{
	protected $entityModel;
	protected $ent;
	public function __construct($myModel){
		$ent = $myModel;
		$this->entityModel = new $ent;
	}
	public function getById($id){
		return $this->entityModel->find($id);
	}
	public function getAll(){
		return $this->entityModel->all();
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
	public function partial($page=1,$pagesize=1000,$keywords=null,$orderBy=""){
		if(empty($orderBy))
			$orderBy = 'created_at ASC';
		else
			$orderBy = urldecode($orderBy);

		$off = ($page - 1) >= 0 ? ($page -1) : 0; 	
		$offset = $off * $pagesize;
		$limit = $pagesize;
		$sql = "SELECT * FROM ". $this->entityModel->table;
		$sql .= " WHERE (";
		$sql .= " deleted_at IS NULL ";
		if(isset($keywords)){
			$sql .= " AND (";
			$searchableFields = $this->entityModel->searchableFields;
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
		$countsql = "SELECT COUNT(*) FROM ".$this->entityModel->table." WHERE deleted_at IS NULL";
		$total = DB::select(DB::raw($countsql));
		$response['total'] = $total[0]->count;
		$response['rows'] = $result;
		$response['page'] = $page;
		$response['pagesize'] = $pagesize;
		$response['fields'] = $this->entityModel->displayTableFields; 
		return $response;	
	}
	

}