<style>
  #mydiv .modal-content#Allocate_Students {
    padding-left: 20px !important;
    padding-right: 20px !important;
}
</style>

<form action="{{route('editnewsletter')}}" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" enctype="multipart/form-data">
<input type="hidden" name="id" value="{{$newsletter->id}}" />
<div class="modal-header">
  <h1>Edit Newsletter </h1>
  <button type="button" class="modal-action modal-close close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" class="modal-action modal-close white-text">x</span> </button>
</div>
<div class="modal-content" id="Allocate_Students">
  
<p id="successMsg" class="green-text" style="display:none;"></p>

    <div class="create_student" style="transition: transform 0ms ease-out; transform: translate3d(0px, 0px, 0px);">

        <div class="row">
        
        <div class="col-md-12 input-field" >
            <!-- <i class="material-icons prefix active">Title</i> -->
            <label for="MovieMaking" class="active">Newsletter Thumbnail Title</label>   
            <input name="title" class="title"  type="text"  value="{{$newsletter->title}}" required="" >
        </div>

       <!--  <div class="col-md-12 input-field" >
            <label for="" class="active">Sub Title</label>   
            <input name="sub_title" class="title"  type="text"  value="{{$newsletter->sub_title}}" >
        </div>  

        <div class="col-md-12 col-sx-12">
            <div class="form-group create_blog">
              <label class="control-label" for="name">Blog Category <span class="star"></span></label>
                <select name="category" class="ml-0 mr-0" required  style="display:block;width:100%">
                <option value="">Select Category</option>
                <option value="humour" @if($newsletter->category == 'humour') selected @endif >Humour</option>
                <option value="infographics" @if($newsletter->category == 'infographics') selected @endif >Infographics</option>
                <option value="riddle" @if($newsletter->category == 'riddle') selected @endif >Riddle</option>
                <option value="technology" @if($newsletter->category == 'technology') selected @endif >Technology</option>
                <option value="uncategorized" @if($newsletter->category == 'uncategorized') selected @endif >Uncategorized</option>
                <option value="young-inventors" @if($newsletter->category == 'young-inventors') selected @endif >Young Inventors</option>
                <option value="mindblog" @if($newsletter->category == 'mindblog') selected @endif >Mindblog</option>
                </select>
             <span class="error contentError"></span>
            </div>
          </div> -->
        </div>
        </div>
        <div class="row" id="file"> 
            <div id="fileContainer">
            <div class="file-field input-field col s12" >       
                <div class="btn">
                    <span>File </span>
                    <input name="files" type="file"  multiple>
                </div>
                <div class="file-path-wrapper col s8">
                <input class="file-path validate" type="text" placeholder="Blog Thumbnail File">                
                </div>
                <div class="upload_file"><img src="{{url('/public').$newsletter->file_path}}" height="60" /></div>
            </div>    
            </div>

        </div>

        


        <div class="col-md-12 col-sx-12">
            <div class="form-group">
              <label class="control-label" for="name"><h6>Blog Details</h6> </label>
                            
                <textarea id='content' name="content"  placeholder="Type some text">
                         {{$newsletter->content}}
                      </textarea>
             <span class="error contentError"></span>
            </div>
          </div>
        
		   <div class="col-md-12 col-sx-12 input-field">
            <div class="form-group">
              <label class="control-label" for="name">keywords <span class="star"></span></label>
                            
                <textarea id='keywords' name="keywords" class="materialize-textarea"  placeholder="Type some text"> {{ $newsletter->keywords}} </textarea>
             <span class="error contentError"></span>
            </div>
          </div>
		  
		    <div class="col-md-12 col-sx-12 input-field">
            <div class="form-group">
              <label class="control-label" for="name">Description <span class="star"></span></label>
                            
                <textarea id='description' class="materialize-textarea" name="description"  placeholder="Type some text">{{$newsletter->description}} </textarea>
             <span class="error contentError"></span>
            </div>
          </div>

    </div>
</div>

<div class="modal-footer">
<button class="btn green darken-1 mr-1 waves-effect waves-light" type="submit" name="action" >
Submit <i class="material-icons right">send</i>
</button>
<a href="#!" class=" modal-action modal-close btn waves-effect waves-light red accent-2">close</a>
</div>
<input id="_token" name="_token" type="hindden" value="{{ csrf_token() }}">
</form>
<input id="url" name="url" type="hidden" value="{{url('/')}}">
<input id="public_path" name="public_path" type="hidden" value="{{public_path()}}">

<script type="text/javascript">

var  publicPath = document.getElementById("url").value; 
var _token = document.getElementById("_token").value;

$(document).ready(function(){
  
  //alert(publicPath);
  $(document).on('click','.closeButton',function(e){
   
    $(this).parent('div').remove();
     e.preventDefault();

  });
  

  new FroalaEditor('textarea#shortcontent', {
                imagePaste: false,
        quickInsertTags : [''],
        toolbarButtons: ['bold', 'italic', 'underline', 'fontFamily', 'fontSize', 'textColor', 'clearFormatting'],

    });
  

  /*new FroalaEditor('textarea#content', {
        width: '100%',    
        quickInsertTags : [''],
        fileUploadURL  :  publicPath+'/blogs',
       imageUploadURL :  publicPath+'/blogs',
       videoUploadURL :  publicPath+'/blogs',

                    // Set max video size to 50MB.
        videoMaxSize: 300 * 1024 * 1024,
                    // Allow to upload MP4, WEBM and OGG
        //videoAllowedTypes: ['webm','ogg','mp4','mkv','avi'],

            // videoUploadParams: {
            //     id: 'my_editor'
            // },
            imageUploadParams: {
                            id: 'my_editor'
            },
            fileUploadParams: {
            id: 'my_editor'
            }
    });*/

new FroalaEditor('textarea#content', {
         requestHeaders: {
              'X-CSRF-TOKEN': _token
             },
          width: '100%',    
          quickInsertTags : [''],
        
          //imageUploadURL :  publicPath+'/blogs',
          imageMove: true,
           imageUploadParam: 'image',
          // Set max video size to 50MB.
          videoMaxSize: 300 * 1024 * 1024,
          // Allow to upload MP4, WEBM and OGG
          videoAllowedTypes: ['webm','ogg','mp4','mkv','avi','mov'],

          // videoUploadParams: {
          //     id: 'my_editor'
          // },
            imageUploadURL  :  publicPath+'/files/post',
			videoUploadURL :  publicPath+'/videos/post',
          // imageManagerLoadURL: publicPath+'/fileuploads',
			videoUploadParams: {
                                    id: 'my_editor'
                                },

          imageUploadParams: {
            id: 'my_editor',
            

          },
          fileUploadParams: {
           id: 'my_editor'
          },

          fileUploadMethod: 'POST',
    });
                


     

});






</script> 