<?php
namespace Core\Interfaces;
use Illuminate\Database\Eloquent\Model;
interface CoreInterface 
{
	 function getById($id);
	 function getPaginate($val);
	 function getAll();
	 function getPureId($id);
	 function store($inputData);
	 function update($inputData,$id);
	 function destroy($id);
	 function multipleDestroy($ids);
	//  function processFiles($files);
	//  function getThumbnailPath();
	//  function uploadThumbnail($file);
}