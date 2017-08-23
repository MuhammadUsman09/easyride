<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use App\Login;

class maniController extends Controller
{
    public function maniFun( Request $res)
    {
    	//dd("in manifun");
    	// return view("welcome");
    	// $log= new Login;
    	// $log->username="hilarious";
    	// $log->password="hunzi";
    	// $log->save();
    	// $object=DB::select('select * from mytable where id=:id',['id'=>1]);
    	// DB::insert('insert into mytable(name,email,password)values(?,?,?)',['usman','m@.com','123']);
    	 // session()->put('name',$object[0]->name);
    	 // session()->put('email',$object[0]->email);
    	 // session()->put('password',$object[0]->password);
        $dataa=
                array(
                    "Id" => "35",
                    "FirstName" => "hilarious hunzi"
                );
            return response($dataa);
    	

    }

    public function getDriverData(Request $res)
   {
    
    

        $dataa=
                array(
                    "Id" => "54",
                    "FirstName" => "hilarious hunzi"
                );
            return response($dataa);
   }
                
        
    
    
    
    public function updateMethod(){
    	$object=DB::select('select * from logins where id=:id',['id'=>1]);
    	dd($object);
    }
  
    
        public function dummy(Request $res)
    {
              $dataa=
                array(
                    "Id" => "35",
                    "FirstName" => "hilarious hunzi"
                );
            return response($dataa);
    }
}
