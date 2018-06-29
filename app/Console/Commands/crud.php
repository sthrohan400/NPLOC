<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class crud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:make {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command makes simple CRUD.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {   

        $this->path= base_path()."/Modules/";
        parent::__construct();
    }

    //function to get the content inside file
    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }
    //get template from the stubs
    protected function getTemplate($stubName,$name){
        $template = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub($stubName)
        );
        return $template;
    }
    protected function makeDirIfAbsent($path){
        $check=false;
        if(!is_dir($path)){ 
            mkdir($path, 0777, true);
            $check=true;
        }
        return $check;
    }

    //add the content of Model.stub and make Model file
    protected function model($name)
    {
        $check=false;
        $modelTemplate = $this->getTemplate('Model',$name);
        
        $this->makeDirIfAbsent($this->path.$name);
        $file= $this->path.$name."/".$name."Model.php";
        $result=file_put_contents($file, $modelTemplate);
        if($result !=null){
            $check= true;
        }
        return $check;
    }
    //add the content of Controller.stub and make Controller file
    protected function controller($name)
    {
        $check=false;
        $controllerTemplate = $this->getTemplate('Controller',$name);
        $this->makeDirIfAbsent($this->path.$name);
        $file= $this->path.$name."/".$name."Controller.php";
        $result=file_put_contents($file, $controllerTemplate);
        if($result !=null){
            $check= true;
        }
        return $check; 
    }

    //add the content of Request.stub and make Request file
    protected function request($name)
    {
        $check=false;
        $requestTemplate = $this->getTemplate('Request',$name);

        $this->makeDirIfAbsent($this->path.$name);
        $file= $this->path.$name."/".$name."Request.php";
        $result=file_put_contents($file, $requestTemplate);
        if($result !=null){
            $check= true;
        }
        return $check;
    }
    //add the content of Request.stub and make Request file
    protected function interface($name)
    {
        $check=false;
        $interfaceTemplate = $this->getTemplate('Interface',$name);

        $this->makeDirIfAbsent($this->path.$name);
        $file= $this->path.$name."/".$name."Interface.php";
        $result=file_put_contents($file, $interfaceTemplate);
        if($result !=null){
            $check= true;
        }
        return $check;
    }
    //add the content of Request.stub and make Request file
    protected function repository($name)
    {
        $check=false;
        $repositoryTemplate = $this->getTemplate('Repository',$name);

        $this->makeDirIfAbsent($this->path.$name);
        $file= $this->path.$name."/".$name."Repository.php";
        $result=file_put_contents($file, $repositoryTemplate);
        if($result !=null){
            $check= true;
        }
        return $check;
    }
    //add the content of Routes.stub and make Routes file
    protected function routes($name)
    {
        $check=false;
        $routesTemplate = $this->getTemplate('Routes',$name);

        $this->makeDirIfAbsent($this->path.$name);
        $file= $this->path.$name."/".$name."Routes.php";
        $result=file_put_contents($file, $routesTemplate);
        if($result !=null){
            $check= true;
        }
        return $check;
    }
    //add the content of Routes.stub and make Routes file
    protected function views($name, $options=null)
    {
        $check=false;
        $template['index'] = $this->getTemplate('ViewIndex',$name);
        $template['create'] = $this->getTemplate('ViewCreate',$name);
        $template['edit'] = $this->getTemplate('ViewEdit',$name);

        $this->makeDirIfAbsent($this->path.$name."/views/");
        foreach($template as $key=>$val){
            $file= $this->path.$name."/views/".$key.".blade.php";
            $result=file_put_contents($file, $val);
            if($result !=null){
                $check= true;
            } 
        }
        //make form.blade.php file
        $this->makeDirIfAbsent($this->path.$name."/views/form/");
        $file= $this->path.$name."/views/form/form.blade.php";
        $result=file_put_contents($file, "");
         
        return $check;
    }
    protected function migration($name)
    {
        $check=false;
        $migrationTemplate = $this->getTemplate('Migration',$name);

        $this->makeDirIfAbsent($this->path.$name);
        //migration in laravel uses current time string prefix in name
        $outputName= date('Y_m_d_His').'_'.$name.'.php';
        $file= base_path()."/database/migrations/".$outputName;
        $result=file_put_contents($file, $migrationTemplate);
        if($result !=null){
            $check= true;
        }
        return $check;
    }
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');

        $data['Controller']= $this->controller($name); 
        $data['Model']=$this->model($name);
        $data['Request']= $this->request($name); 
        $data['Interface']=$this->interface($name);
        $data['Repository']= $this->repository($name); 
        $data['Routes']= $this->routes($name); 
        $data['Views']= $this->views($name);
        $data['Migration']= $this->migration($name);  

        //providing information in terminal
        foreach($data as $key=>$val){
            if($val==true) {
                $this->info($name.$key." is made."); 
            } 
        }
         

        // File::append(base_path('routes/api.php'), 'Route::resource(\'' . str_plural(strtolower($name)) . "', '{$name}Controller');");
    }
}
