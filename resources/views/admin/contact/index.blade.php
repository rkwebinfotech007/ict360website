  
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
                      <li id="export"> <a > <i data-position="down" data-delay="20" data-tooltip="Excel Downlod" class="material-icons tooltipped" data-tooltip-id="3ba183c4-ecae-97c6-0aeb-8317548b90df">archive</i> </a> </li>
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


 jQuery("#multiple37").jqGrid({
  
  url:'{{route("contactList")}}',
  postData: { "_token": "{{ csrf_token() }}" },
  datatype: "json",
  
   colNames:['Name','Email','Number','Organization','City','Message','Created'], 
colModel:[
      {label:'view', name:'name',jsonmap:'name', sorttype:'' , width:40,title: false},
	    {label:'view', name:'email',jsonmap:'email', sorttype:'' ,search:false, width:50,title: false, },
      {label:'view', name:'number',jsonmap:'number', sorttype:'' ,search:false, width:30,title: false, },		
		  {label:'view', name:'organization',jsonmap:'organization', sorttype:'' ,search:false, width:30,title: false, },
      {label:'view', name:'city',jsonmap:'city', sorttype:'' ,search:false, width:30,title: false,} ,
      {label:'view', name:'message',jsonmap:'message', sorttype:'' ,search:false, width:100,title: false,} ,
      {label:'view', name:'created_at',jsonmap:'created_at', sorttype:'' ,search:false, width:20,title: false,} ,
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
 loadonce: true,
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
    
    CSV += ReportTitle + '\r\n\n';

    if (ShowLabel) {
        var row = "";

        for (var index in arrData[0]) {
            row += index + ',';
        }

        row = row.slice(0, -1);
        CSV += row + '\r\n';
    }
    
    //1st loop is to extract each row
    for (var i = 0; i < arrData.length; i++) {
        var row = "";
        for (var index in arrData[i]) {
            row += '"' + arrData[i][index].replace(/<[^>]*>/g, '') + '",';
        }
        row.slice(0, row.length - 1);
        CSV += row + '\r\n';
    }

    if (CSV == '') {        
        alert("Invalid data");
        return;
    }   
   
    var fileName="<?php echo url('/'); ?>";

    fileName += ReportTitle.replace(/ /g,"_");   

    var uri = 'data:text/csv;charset=utf-8,' + escape(CSV);

    var link = document.createElement("a");    
    link.href = uri;

    link.style = "visibility:hidden";
    link.download = "contactList.csv";

    console.log(document.body);
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
      
$(document).ready(function(){
      var wfheight = $(window).height();
      $('#gview_multiple37 .ui-jqgrid-bdiv').height(wfheight-232);
});
</script>

@endsection

