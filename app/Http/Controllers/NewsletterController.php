<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NewsletterModel as NewsletterModel;

class NewsletterController extends Controller
{
    
    protected $newsletterModel;
  
    public function __construct(){

        $this->newsletterModel = new NewsletterModel(); 
    }


    public function getNewsletter(Request $req){

        $newsletter = $this->newsletterModel->getNewsletterList();
        return view('newsletter')->with('newsletter',$newsletter);
    }


    public function getNewsletterDetail(Request $req){
        // print_r($req->newsletterurl); die;

        // echo 'Testing-----'. $req->query('id');die;	
	
        $newsletterurl = $req->newsletterurl;

        if($newsletterurl !=''){
            //$data = $this->blogModel->getSingleBlog($blogId);
			$data = $this->newsletterModel->getSingleNewsletterData($newsletterurl);    
            // dd($data); die;        
			$metaTags = array(
								'titleTag'    => isset($data[0]->title)?$data[0]->title:'',
								'keywordsTag'    =>  isset($data[0]->keywords)?$data[0]->keywords:'',
								'descriptionTag' =>  isset($data[0]->description)?$data[0]->description:''
				             );
							 
			$blogdata =  $this->newsletterModel->getlatestnewsletterData($newsletterurl);
			
            return view('newsletter-details')->with('newsletter',$data[0])->with('latestBlog',$blogdata)->with($metaTags);
        }          

    }





}
