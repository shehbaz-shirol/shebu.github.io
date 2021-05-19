$(document).ready(function(){
    $('.Number').keypress(function(e)
                 {
                     charCode = e.which;
                     
                    if (charCode >= 48 && charCode <= 57) 
                    
                     return true;
                     return false;
                     
                     });
 $('.letters').keypress(function(e)
                   {
                     charCode = e.which;
                     
                    if (charCode >= 97 && charCode <= 122) 
                    
                     return true;
                     return false;
                     
                     });

 $("#form").submit(function(e){
    e.preventDefault();
  var letters = /^[A-Za-z]+$/;
   var emailid = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
    var p_id = $("#p_id").val();
    var p_fname = $("#p_fname").val();
    var p_mname = $("#p_mname").val();
    var p_lname = $("#p_lname").val();
    var p_email = $("#p_email").val();