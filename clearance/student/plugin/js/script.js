$(function(){
$("#username_error_message").hide();
$("#password_error_message").hide();
$("#retype_error_message").hide();
$("#email_error_message").hide();
$("#fullname_error_message").hide();
$("#level_error_message").hide();

$("#username_success_message").hide();
$("#fullname_success_message").hide();
$("#email_success_message").hide();

var username_error=false;
var password_error=false;
var retype_error=false;
var email_error=false;
var fullname_error=false;
var level_error=false;

$("#form_username").focusout(function(){
   check_username();
});
$("#form_password").focusout(function(){
   check_password();
});
$("#form_retype").focusout(function(){
   check_retype();
});
$("#form_email").focusout(function(){
   check_email();
});
$("#form_fullname").focusout(function(){
   check_fullname();
});
$("#form_level").focusout(function(){
   check_level();
});


function check_username(){
var un_length=$("#form_username").val().length;
var pattern=new RegExp(/^([a-z]{5,20})$/);
if(un_length ==0){
$("#username_error_message").html("Username is required.");
$("#username_error_message").show();
$("#username_success_message").hide();
username_error=true;
}
else if(un_length < 5 || un_length > 20){
$("#username_error_message").html("Username should be between 5 and 20.");
$("#username_error_message").show();
$("#username_success_message").hide();
username_error=true;
}else if(pattern.test($("#form_username").val()) ){
$("#username_error_message").hide();
$("#username_success_message").html("Valid User Name Format");
$("#username_success_message").show();
}  else{
$("#username_error_message").html("Invalid User Name Format");
$("#username_error_message").show();
$("#username_success_message").hide();
username_error=true;
}
}

function check_fullname(){
var e_length=$("#form_fullname").val().length;
var pattern=new RegExp(/^[A-Z]([a-z]{5,20})$/);
if(e_length == 0 ){
$("#fullname_error_message").html("Full Name is Required");
$("#fullname_error_message").show();
$("#fullname_success_message").hide();
email_error=true;
}
else if(pattern.test($("#form_fullname").val()) ){
$("#fullname_error_message").hide();
$("#fullname_success_message").html("Valid Full Name Format");
$("#fullname_success_message").show();
}  else{
$("#fullname_error_message").html("Invalid Full Name Format");
$("#fullname_error_message").show();
$("#fullname_success_message").hide();
email_error=true;
}
}

function check_password(){
var pa_length=$("#form_password").val().length;
if(pa_length == 0 ){
$("#password_error_message").html("Password is required");
$("#password_error_message").show();
password_error=true;
}
else if(pa_length < 6 ){
$("#password_error_message").html("Password must have at least 6 characters.");
$("#password_error_message").show();
password_error=true;
}  else{
$("#password_error_message").hide();
}
}

function check_level(){
var val=$("#form_level").val();
if(val == "" ){
$("#level_error_message").html("Please Select a user type.");
$("#level_error_message").show();
level_error=true;
}
 else{
$("#level_error_message").hide();
}
}

function check_retype(){
var pa_length=$("#form_password").val();
var rpa_length=$("#form_retype").val();
if(pa_length != rpa_length ){
$("#retype_error_message").html("password don't match.");
$("#retype_error_message").show();
retype_error=true;
}  else{
$("#retype_error_message").hide();
}
}

function check_email(){
var e_length=$("#form_email").val().length;
var pattern=new RegExp(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/);
if(e_length == 0 ){
$("#email_error_message").html("Email is Required");
$("#email_error_message").show();
$("#email_success_message").hide();
email_error=true;
}
else if(pattern.test($("#form_email").val()) ){
$("#email_error_message").hide();
$("#email_success_message").html("Valid Email Address Format");
$("#email_success_message").show();
}  else{
$("#email_error_message").html("Invalid Email Address.");
$("#email_error_message").show();
$("#email_success_message").hide();
email_error=true;
}
}

$("#registration_form").submit(function(){
username_error=false;
password_error=false;
retype_error=false;
email_error=false;
level_error=false;

check_username();
check_password();
check_retype();
check_email();
check_level();

if(level_error == false && username_error == false && password_error == false && retype_error == false && email_error == false)  {
 return true;
}
 else{
   return false;
 }
});
});

