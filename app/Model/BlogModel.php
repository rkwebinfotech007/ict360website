<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;

class BlogModel extends Model
{
  public function getBlogList()
  {
   
        $queryString = "SELECT * from blogs where status = 'Active' order By id DESC";
        $data = DB::select($queryString);

        
        return $data; 
  }


  public function getSingleBlog($id){

      $queryString="SELECT * from blogs where status = 'Active' AND id='".$id."' limit 1";
      $data = DB::select($queryString);
     return $data;
 
  }
  
   public function getSingleBlogData($url){

      $queryString="SELECT * from blogs where status = 'Active' AND blog_url='".$url."' limit 1";
      $data = DB::select($queryString);
      return $data;
 
  }
  
  public function getlatestBlogData($url){

      $queryString="SELECT * from blogs where status = 'Active' order by id desc limit 4 ";
      $data = DB::select($queryString);
      return $data;
 
  }
 
}
