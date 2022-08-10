<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;

class NewsletterModel extends Model
{
  public function getNewsletterList()
  {
   
        $queryString = "SELECT * from newsletter where status = 'Active' order By id DESC";
        $data = DB::select($queryString);

        
        return $data; 
  }


  public function getSingleBlog($id){

      $queryString="SELECT * from newsletter where status = 'Active' AND id='".$id."' limit 1";
      $data = DB::select($queryString);
     return $data;
 
  }
  
   public function getSingleNewsletterData($url){

      $queryString="SELECT * from newsletter where status = 'Active' AND blog_url='".$url."' limit 1";
      $data = DB::select($queryString);
      return $data;
 
  }
  
  public function getlatestnewsletterData($url){

      $queryString="SELECT * from newsletter where status = 'Active' order by id desc limit 4 ";
      $data = DB::select($queryString);
      return $data;
 
  }
 
}
