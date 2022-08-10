/*Maximus | Login */
$(function () {


    //date time picker
    $('#datetime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        },
		autoclose: true
    });




});
$(document).ready(function() {
$("#email-sidebar li").click(function () {
    $("li").removeClass("active");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).addClass("active"); 
	$("#studentProfileContainer").addClass("active"); 
	
});
});