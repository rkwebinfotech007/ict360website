<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CommonModel extends Model
{
     
   
    public static  function pagging($countTotal,$rows,$page,$lastPage)
        {
            if($rows>20)
            {
            $limitArray   =   array(  
                                    "lower_limit"=>0,
                                    "upper_limit"=>$rows 
                                    );
            }elseif($rows==20)
            {
            $limitArray   =   array(  
                                    "lower_limit"=>($page-1)*20,
                                    "upper_limit"=>$page*20 
                                    );  
            }
    
        return $limitArray;
    }


    public static function paggingPara($countTotal,$rows,$page,$lastPage)
    {
        $pagePara=array(
                    "page"=>$page,
                    "records"=> $countTotal,
                    "total"=>ceil($countTotal/20)
                    );
            return $pagePara;
      }
      
}
