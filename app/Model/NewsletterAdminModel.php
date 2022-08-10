<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class NewsletterAdminModel extends Model
{

 
 public function insertNewsletterData($data)
    {
   $data = DB:: table('newsletter')->insert($data);
   return $data;
  } 


 public function getSingleNewsletter($id){

   // $data = DB:: table('blogs')->where('id',$id)->limit(1);

    $queryString="SELECT * from newsletter where status = 'Active' AND id='".$id."' limit 1";
      $data = DB::select($queryString);
    return $data;

 }


  public function editNewsletterData($id,$arr)
  {     
        $data = DB:: table('newsletter')->where('id',$id)->limit(1)->update($arr);
        return $data;
    } 


    public function deleteNewsletter($id)
	{
		$data = DB::table('newsletter')->where('id',$id)->limit(1)->update(['status'=>'Delete']);
		return $data;
	}

   public function countTotalNewsletter($condition='')
   {
      $queryString="SELECT * from newsletter where status = 'Active' $condition";
      $data = DB::select($queryString);
      return $data;
  }


 
  public function getNewsletterData($data,$limit)
  {
   
      $queryString="SELECT * from newsletter where status= 'Active' $data order By id DESC limit ".$limit['lower_limit'].",".$limit['upper_limit']."";

          $data = DB::select($queryString);
          $resultData = array();

          foreach ($data as $key => $value) {
             
              $resultData[$key]['id'] = $value->id;
              // $resultData[$key]['category'] = ucfirst($value->category);
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
