<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NewsletterAdminModel as NewsletterModel;
use App\Model\BlogAdminModel as BlogModel;
use App\Model\CommonModel as CommonModel;

class NewsletterController extends Controller
{
    //

    public function __construct()
    {
        ini_set('memory_limit','512M'); 
        $this->blogModel = new BlogModel();   
        $this->newsletterModel = new NewsletterModel();   
        $this->modelObj =  new CommonModel();
        header('Access-Control-Allow-Origin: *');		

    }


    public function index(Request $req){

        return view('admin.newsletter.index');

    } 
  
  
    public function addNewsletterForm(Request $req){
      
        return view('admin.newsletter.addNewsletter');

    }
    

    function newsletterList(Request $req){

        $filters = json_decode(str_replace('\'','"',$req['filters']), true);
        $userdata="";
        $approved="";
        $isfeedback="";
        // filter array declaration to hold filter value according to QUERY-------------------
        $filterarray  =  array();
        $resultArr    =  array();
        
        $userArray    =  $this->newsletterModel->getUserfilterArray(3,Session()->get('user_type'),'');
        
        $subString    =  $this->newsletterModel->getUserfilterString(3,Session()->get('user_type'),''); 

        
        
        if($filters['rules'])
        {
        // Iterating  loop  for passing post values-------------------------------------------
        
            foreach($filters['rules'] as $values)
            {
            
            $filterarray[$values['field']]=$values['data'];
            $subString = $subString." and ".$values['field']." like '%".$values['data']."%' ";
            // Model to fire guery to backend with parameter-------------------------------------
           
            }
            $countTotal   =  $this->newsletterModel->countTotalNewsletter($subString); 
            $limtArray     = $this->modelObj->pagging(count($countTotal),$req->rows,$req->page,""); 
            // Model Method to return  parameter to json for display  page    
            $resultArr     = $this->modelObj->paggingPara(count($countTotal),$req->rows,$req->page,"");
            
            $data = $this->newsletterModel->getNewsletterData($subString, $limtArray);
        }else{ 

            $countTotal   =  $this->newsletterModel->countTotalNewsletter($subString); 
            $limtArray     = $this->modelObj->pagging(count($countTotal),$req->rows,$req->page,""); 
            // Model Method to return  parameter to json for display  page    
            $resultArr     = $this->modelObj->paggingPara(count($countTotal),$req->rows,$req->page,"");
        // Model  to fire query to backen without parameter-----------------------------------
            $data = $this->newsletterModel->getNewsletterData($subString, $limtArray);  
        }

    
        $i=0;
        foreach($data as $r)
        {  
            $action="<a href='#' alt='Edit' style='text-decoration:underline' ><i data-position='bottom' data-delay='20' placeholder='First name' data-tooltip='Edit'  class='material-icons red-text tooltipped' onclick='editNewsletter(".$r['id'].")'>edit</i><i data-position='bottom' data-delay='20' data-tooltip='Delete'  class='material-icons red-text tooltipped' onclick='deleteNewsletter(".$r['id'].")'>delete</i>";	
        
            $resultArr['rows'][$i] = array(   
                    'id' =>$r['id'], 
                    // 'category' =>$r['category'], 
                    'title' => $r['title'], 
                    'file_path' => '<img src="'.url('/public').$r['file_path'].'" width="60" height="60">',
                    'short_content' =>$r['short_content'],
                    'created_at'         => $r['created_at'],
                    'action'         => $action
                
                );                 
                    
            $i++;
        } 

            return json_encode($resultArr);
       

    }

    function add(Request $req){

        $fileLocation ='';  
        $data = '';
        $image =  $req->file('files');
        $name = $image->getClientOriginalName();
       
        if($name !='' && $req->title !=''){
                    
            $fileLocation='/newsletter';      
            $extension = $image->getClientOriginalExtension();           
            $filename = time().$name;
            $destinationPath = public_path($fileLocation);
            $image->move($destinationPath,  $filename);
            $filePath = $fileLocation.'/'.$filename;
            $insertArr   = array(
                "title" => $req->title, 
                // "sub_title" => $req->sub_title, 
                // "category" => $req->category,          
                "file_path" => $filePath,
				"blog_url"  => preg_replace("![^a-z0-9]+!i", "-", $req->title),
                // "short_content" =>$req->shortcontent,
                "content" =>$req->content,
				'keywords'=> $req->keywords,
				'description'=> $req->description,
                "created_by"    => session()->get('name'),
                "created_at"=>now(),
                "updated_at"=>now(),
                "updated_by"    => session()->get('name') 
                          
                );

            $data = $this->newsletterModel->insertNewsletterData($insertArr);  
        }
          
         //print_r($insertArr);die;             
       
        if($data){
            Session()->flash('msg', 'Newsletter add successfully.');
            return redirect('/admin/newsletter');
        }
            

    }

    function editNewsletterForm(Request $req){
        
        $data = $this->newsletterModel->getSingleNewsletter($req->id);
        $newsletterdetail = array('newsletter'=>$data[0]);
        return view('admin.newsletter.editNewsletter')->with($newsletterdetail);


    }

    function edit(Request $req){
                
        if($req->id){
            $fileLocation ='';  
            $data = '';
            $image =  $req->file('files');
            if($image !='' && $req->title !=''){
                        
                    $fileLocation='/newsletter';      
                    $extension = $image->getClientOriginalExtension();      
                    $name = $image->getClientOriginalName();     
                    $filename = time().$name;
                    $destinationPath = public_path($fileLocation);
                    $image->move($destinationPath,  $filename);
                    $filePath = $fileLocation.'/'.$filename;
    
                    $insertArr   = array(
                    "title" => $req->title, 
                    // "sub_title" => $req->sub_title, 
                    // "category" => $req->category,        
					"blog_url"  => preg_replace("![^a-z0-9]+!i", "-", $req->title),					
                    "file_path" => $filePath,
                    // "short_content" =>$req->shortcontent,
                    "content" =>$req->content,
					'keywords'=> $req->keywords,
				    'description'=> $req->description,					
                    "updated_at"=>now(),
                    "updated_by"    => session()->get('name') 
                    );   
    
                    $data = $this->newsletterModel->editNewsletterData($req->id,$insertArr);
                }else{

                    $insertArr   = array(
                        "title" => $req->title,
                        "sub_title" => $req->sub_title, 
                        "category" => $req->category,     
						"blog_url"  => preg_replace("![^a-z0-9]+!i", "-", $req->title),						
                        // "short_content" =>$req->shortcontent,        
                        "content" =>$req->content,
						'keywords'=> $req->keywords,
				        'description'=> $req->description,
                        "updated_at"=>now(),
                        "updated_by"    => session()->get('name')               
                        );
                        $data = $this->newsletterModel->editNewsletterData($req->id,$insertArr); 
                }
      
               
             //print_r($insertArr);die;             
           
             if($data){
              Session()->flash('msg', 'Newsletter updated successfully.');
               return redirect('/admin/newsletter');
             }
        }      

    }

    function delete(Request $req){

        if($req->id !=''){
            $data = $this->newsletterModel->deleteNewsletter($req->id);           
            if($data == 1){
                //Session()->flash('msg', 'Blog deleted successfully.')
               echo 'Newsletter deleted successfully.';die;
               
            }

        }
    }


    public function store(Request $req){
           echo "dsdd"; die;
       /* if($input['froala'] == 'true'){
             return stripslashes(response()->json(['link' => $completePath])->content());
        }*/

    }

   

}
