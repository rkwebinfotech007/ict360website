<!-- {!! Html::script('/js_admin/plugins.js') !!}      
    {!! Html::style('/css_admin/daterangepicker.css') !!}
    {!! Html::script('/js_admin/jquery-3.2.1.min.js') !!}   
    {!! Html::script('/js_admin/materialize.min.js') !!}  
    {!! Html::script('/js_admin/moment.min.js') !!}
    {!! Html::script('/js_admin/daterangepicker.js') !!}
	{!! Html::script('/js_admin/jquery.ui.timepicker.js') !!}  -->
<style>
  #mydiv .modal-content#Allocate_Students {
    padding-left: 20px !important;
    padding-right: 20px !important;
}
</style>
 <link href ="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-beta.1/js/froala_editor.pkgd.min.js"></script>


<form action="{{route('addNewsletter')}}" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" enctype="multipart/form-data" >


<div class="modal-header">
  <h1>Create Newsletter </h1>
  <button type="button" class="modal-action modal-close close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" class="modal-action modal-close white-text">x</span> </button>
</div>
<div class="modal-content" id="Allocate_Students">
  
<p id="successMsg" class="green-text" style="display:none;"></p>

    <div class="create_student" style="transition: transform 0ms ease-out; transform: translate3d(0px, 0px, 0px);">

        <div class="row" >
        
        <div class="col-md-12 input-field" >
            <!-- <i class="material-icons prefix">title</i> -->
            <label for="MovieMaking">Title</label>   
            <input name="title" class="title"  type="text"  value="" required="" >
        </div>  

        <!-- <div class="col-md-12 input-field" >
            <label for="MovieMaking">Sub Title</label>   
            <input name="sub_title" class="title"  type="text"  value="" >
        </div> -->

        <!-- <div class="col-md-12 col-sx-12">
            <div class="form-group create_blog">
              <label class="control-label" for="name">Blog Category <span class="star"></span></label>
                <select name="category" required  style="display:block" class="m-0">
                <option value="">Select Category</option>
                <option value="humour">Humour</option>
                <option value="infographics">Infographics</option>
                <option value="riddle">Riddle</option>
                <option value="technology">Technology</option>
                <option value="uncategorized">Uncategorized</option>
                <option value="young-inventors">Young Inventors</option>
                <option value="mindblog">Mindblog</option>
                </select>
             <span class="error contentError"></span>
            </div>
          </div> -->

        </div>
        <div class="row" id="file"> 
            <div id="fileContainer">
            <div class="file-field input-field col s12" >       
                <div class="btn">
                    <span>File</span>
                    <input name="files" type="file"  required="" multiple accept="image/*">
                </div>
                <div class="file-path-wrapper col s8">
                <input class="file-path validate" type="text" placeholder="Upload file">
                </div>
                <div class="upload_file"></div> 
            </div>    
            </div>

        </div>
        <!-- <div class="col-md-12 col-sx-12">
            <div class="form-group">
              <label class="control-label" for="name">Short Content <span class="star">*</span></label>
                            
                <textarea id='shortcontent' name="shortcontent"  placeholder="Type some text">
                          
                      </textarea>
             <span class="error contentError"></span>
            </div>
          </div> -->

        <div class="col-md-12 col-sx-12">
            <div class="form-group">
              <label class="control-label" for="name">Content <span class="star">*</span></label>
                            
                <textarea id='content' name="content"  placeholder="Type some text" >
                          <?php //echo field_value($result, 'content');?>
                      </textarea>
             <span class="error contentError"></span>
            </div>
          </div>

       
 
          <div class="col-md-12 col-sx-12 input-field">
            <div class="form-group">
              <label class="control-label" for="name">keywords <span class="star"></span></label>
                            
                <textarea id='keywords' name="keywords" class="materialize-textarea"></textarea>
             <span class="error contentError"></span>
            </div>
          </div>
		  
		    <div class="col-md-12 col-sx-12 input-field">
            <div class="form-group">
              <label class="control-label" for="name">Description <span class="star"></span></label>
                            
                <textarea id='description' name="description" class="materialize-textarea" ></textarea>
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
<input id="public_path" name="public_path" type="hidden" value="{{public_path()}}">
<input id="url" name="url" type="hidden" value="{{url('/')}}">

</form>
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