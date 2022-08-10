<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BlogModel as BlogModel;

class BlogController extends Controller
{
    
    protected $blogModel;
  
    public function __construct(){

        $this->blogModel = new BlogModel(); 
    }


    public function getBlogs(Request $req){

        $blogdata = $this->blogModel->getBlogList();
        return view('blog')->with('blogs',$blogdata);
    }


    public function getBlogDetail(Request $req){

        //echo 'Testing-----'. $req->query('id');die;	
	
        $blogurl = $req->blogurl;

        if($blogurl !=''){
            //$data = $this->blogModel->getSingleBlog($blogId);
			$data = $this->blogModel->getSingleBlogData($blogurl);            
			$metaTags = array(
								'titleTag'    => isset($data[0]->title)?$data[0]->title:'',
								'keywordsTag'    =>  isset($data[0]->keywords)?$data[0]->keywords:'',
								'descriptionTag' =>  isset($data[0]->description)?$data[0]->description:''
				             );
							 
			$blogdata =  $this->blogModel->getlatestBlogData($blogurl);
			
            return view('blog-details')->with('blog',$data[0])->with('latestBlog',$blogdata)->with($metaTags);
        }          

    }





}
