  
@extends('admin.layout.layout')
@section('content') 
  <div class="content-wrapper">
   <section id="content">
      <div class="container">
      <div id="mail-app" class="section">
          <div class="row">
            <div class="col s12">
              <nav class="green">
                <div class="nav-wrapper">
                  <div class="left col s12 m5 l5">
                    <ul>
                      <li> <a  class="email-menu"> <i class="material-icons">assignment_ind</i> </a> </li>
                       
                    </ul>

                  </div>
                  <div class="col s12 m7 l7 hide-on-med-and-down">
                    <ul class="right">
                     <li> <a onclick="createBlog()">  <button type="button" class="btn waves-effect waves-light black lighten-2" data-position="down" data-delay="20" data-tooltip="Add winner show case" class="tooltipped">Create Blog</button> </a> </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>

            <div class="col m12 hide-on-med-and-down">
      
            <script>
              $(document).ready(function(e) {
                  <?php if(session()->get('msg')!=''){ ?>  
                         Materialize.toast('<?php echo session()->get('msg') ?>', 4000);        
              <?php } ?>
              
              });
       
           </script>
          </div>

            <div class="col s12">
            
                <div id="email-list" class="col s12 m12 card-panel z-depth-1">
                
                  <div id="data-table-simple_wrapper" class="dataTables_wrapper">
                      <table id="multiple37"></table> 
                      <div id="pmultiple37" ></div>              
                  </div>         
                
                
                </div>
        </div>
       </div>
      </div>
    </div>
    </section>
	
  </div>

 <script>


 var _token = $("#_token").val(); 

function  createBlog()
       {   
      $("#ajax_loader").show();    
       
           $.ajax({
               type: "POST",
         data: { "_token" :"{{ csrf_token() }}" },
          url: '{{route("addBlogForm")}}',

         success: function(res){ 
            $('#mydiv').html('');
            $('#mydiv').html(res);
            $('#mydiv').modal('open');
         }  
      
         });
        $("#ajax_loader").hide();       
     } 


     function editBlog(id){
      $("#ajax_loader").show();    
      
         $.ajax({
          type: "POST",
          data: {"_token":"{{ csrf_token() }}","id":id },
          url: '{{route("editBlogForm")}}',

         success: function(res){ 
            $('#mydiv').html('');
            $('#mydiv').html(res);
            $('#mydiv').modal('open');
         }  
      
         });
        $("#ajax_loader").hide();  
     }

     function deleteBlog(id){
      
      var deleteConfirm = confirm("Are you sure, you want to delete! ");
       if(deleteConfirm){

        $("#ajax_loader").show();    
       
          $.ajax({
            type: "POST",
            data: {"_token":"{{ csrf_token() }}","id":id },
            url: '{{route("delete")}}',
            success: function(res){ 
             
              location.reload();
            }  
        
          });
          $("#ajax_loader").hide();  

        } 
       
      }
 
 

  


 jQuery("#multiple37").jqGrid({
  
  url:'{{route("blogList")}}',
  postData: { "_token": "{{ csrf_token() }}" },
  datatype: "json",
  
   colNames:['Category','Title','File Path','Created Date','Action'], 
colModel:[
      {label:'view', name:'category',jsonmap:'category', sorttype:'' ,search:false, width:50,title: false},
      {label:'view', name:'title',jsonmap:'title', sorttype:'' , width:100,title: false},        
        {label:'view', name:'file_path',jsonmap:'file_path', sorttype:'' ,search:false, width:12,title: false, },  
      
       {label:'view', name:'created_at',jsonmap:'created_at', sorttype:'' ,search:false, width:30,title: false, align:'center'} ,
      {label:'view', name:'action',jsonmap:'action', sorttype:'' ,search:false, width:30, title: false, align:'center'}
      ],
    shrinkToFit : true,
  jsonReader : {
                  repeatitems : false, root: "rows",
               },
      
 rowNum:20,
 rowList : [20,30,50,100,500,1000,10000],
 mtype: "POST",
 rownumbers: true, rownumWidth: 40, gridview: true, pager: '#pmultiple37',
 sortname: 'first_name',
 
 viewrecords: true,
 sortorder: "asc",
 autowidth:true,
 guiStyle:"bootstrap",
 hidegrid: false,gridComplete: function () {
    //gridLib();
  $("#gridLib").html(''); 
}
  });



 jQuery("#multiple37").jqGrid('filterToolbar', { stringResult: true, searchOnEnter: false, defaultSearch: "cn"});
 jQuery("#multiple37").jqGrid('navGrid','#pmultiple37',{del:false,add:false,edit:false},{},{},{},{multipleSearch:false});
 jQuery("#multiple37").jqGrid('navButtonAdd','#pmultiple37',{caption:"",onClickButton : function () {jQuery("#multiple37").excelExport();}});


$('#export').click(function() {
    
   JSONToCSVConvertor(JSON.stringify($('#multiple37').jqGrid('getRowData')), '', true);
});


function JSONToCSVConvertor(JSONData, ReportTitle, ShowLabel) {
    //If JSONData is not an object then JSON.parse will parse the JSON string in an Object
    var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;
    
    var CSV = '';    
    //Set Report title in first row or line
    
    CSV += ReportTitle + '\r\n\n';

    //This condition will generate the Label/Header
    if (ShowLabel) {
        var row = "";
        
        //This loop will extract the label from 1st index of on array
        for (var index in arrData[0]) {
            
            //Now convert each value to string and comma-seprated
            row += index + ',';
        }

        row = row.slice(0, -1);
        
        //append Label row with line break
        CSV += row + '\r\n';
    }
    
    //1st loop is to extract each row
    for (var i = 0; i < arrData.length; i++) {
        var row = "";
        
        //2nd loop will extract each column and convert it in string comma-seprated
        for (var index in arrData[i]) {
            row += '"' + arrData[i][index].replace(/<[^>]*>/g, '') + '",';
        }

        row.slice(0, row.length - 1);
        
        //add a line break after each row
        CSV += row + '\r\n';
    }

    if (CSV == '') {        
        alert("Invalid data");
        return;
    }   
    
    //Generate a file name
    ////var fileName = "<?php //echo $this->action?>";
  var fileName="<?php echo url('/'); ?>";
    //this will remove the blank-spaces from the title and replace it with an underscore
    fileName += ReportTitle.replace(/ /g,"_");   
    
    //Initialize file format you want csv or xls
    var uri = 'data:text/csv;charset=utf-8,' + escape(CSV);
    
    // Now the little tricky part.
    // you can use either>> window.open(uri);
    // but this will not work in some browsers
    // or you will not get the correct file extension    
    
    //this trick will generate a temp <a /> tag
    var link = document.createElement("a");    
    link.href = uri;
    
    //set the visibility hidden so it will not effect on your web-layout
    link.style = "visibility:hidden";
    link.download = "UserList.csv";
    
    //this part will append the anchor tag and remove it after automatic click
    console.log(document.body);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}


/* jQuery("#export").on("click", function(){
 

        $("#multiple37").jqGrid("exportToExcel",{

          includeLabels : true,
          includeGroupHeader : true,
          includeFooter: true,
          fileName : "jqGridExport.xlsx",
          maxlength : 40 // maxlength for visible string data 
        });
      });*/

      
$(document).ready(function(){
            // Add on every jqgrid page
      var wfheight = $(window).height();
      //var wfwidth = $(window).width();
      $('#gview_multiple37 .ui-jqgrid-bdiv').height(wfheight-232);
});
</script>

@endsection

