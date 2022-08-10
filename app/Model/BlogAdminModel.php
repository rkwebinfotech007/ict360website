<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class BlogAdminModel extends Model
{

 
 public function insertBlogData($data)
    {
   $data = DB:: table('blogs')->insert($data);
   return $data;
  } 


 public function getSingleBlog($id){

   // $data = DB:: table('blogs')->where('id',$id)->limit(1);

    $queryString="SELECT * from blogs where status = 'Active' AND id='".$id."' limit 1";
      $data = DB::select($queryString);
    return $data;

 }


  public function editBlogData($id,$arr)
  {     
        $data = DB:: table('blogs')->where('id',$id)->limit(1)->update($arr);
        return $data;
    } 


    public function deleteBlog($id)
	{
		$data = DB::table('blogs')->where('id',$id)->limit(1)->update(['status'=>'Delete']);
		return $data;
	}

   public function countTotalBlog($condition='')
   {
      $queryString="SELECT * from blogs where status = 'Active' $condition";
      $data = DB::select($queryString);
      return $data;
  }


 
  public function getBlogData($data,$limit)
  {
   
      $queryString="SELECT * from blogs where status= 'Active' $data order By id DESC limit ".$limit['lower_limit'].",".$limit['upper_limit']."";

          $data = DB::select($queryString);
          $resultData = array();

          foreach ($data as $key => $value) {
             
              $resultData[$key]['id'] = $value->id;
              $resultData[$key]['category'] = ucfirst($value->category);
              $resultData[$key]['title'] = $value->title;              
              $resultData[$key]['file_path'] =$value->file_path;
              $resultData[$key]['short_content'] = $value->short_content;
			  $resultData[$key]['content'] = $value->content;
              $resultData[$key]['created_at'] = $value->created_at;

          //print_r($winnerCase->file_path);die;
         }         
    
      return $resultData; 
  }




  public  function getUserfilterArray($userId,$userType)
   {
      $userArray=array();    
       
      if($userType=="1")
      {
         $userArray=array();
                           
      }             
       return  $userArray;    
    }
      
public  function getUserfilterString($userId,$userType,$location)
  {
      $subString="";
     return $subString;  
  }
  
 


}
