 //checks the join form passwords match

$(document).ready(function() {
  $("#passwordAgain").keyup(validate);
  $("#password").keyup(validate);
});


function validate() {
  var password1 = $("#password").val();
  var password2 = $("#passwordAgain").val();

     if(password1 == password2){
     	//All is good - give a green outline
	 	$("#passwordAgain").css('outline', '2px solid #83e67d');
	 	$("#password").css('outline', '2px solid #83e67d');
	 	$(".glyphicon-ok").css('display', 'block');
	 	$(".glyphicon-remove").css('display', 'none');
	 }else{
	 	//All is bad - give a red outline
	 	$("#passwordAgain").css('outline', '2px solid #cc535a');
	 	$(".glyphicon-remove").css('display', 'block');
	 	$(".glyphicon-ok").css('display', 'none');
	 }
    
}