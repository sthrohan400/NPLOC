<?php
namespace Modules;
class NepuzzHelper {
    public static function modelColumnMap($modelobj,$vals){
        $modelfillable = $modelobj->fillable; 
        $result = [];
        foreach($vals as $key => $val){
            if(array_key_exists($key,$modelfillable)){
                $result[$key] = $modelfillable[$key];
            }
        }
        return $result;
    }
}