function checkusername(contact_form)
{
  var eobj=document.getElementById('username');
  var vfname = contact_form.username.value;
  var fnamelen = vfname.length
  var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
if (fnamelen<2) 
{
    error="User name  is minimum in length.";
	contact_form.username.focus();
  }
  
  else if (!oRE.test(vfname))
{
    error="Enter only characters";
    contact_form.username.focus();
  }
 
  if (error)
{
   contact_form.username.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
 
 
 
 function checkpassword(contact_form)
{
  var eobj=document.getElementById('password');
  var vlname = contact_form.password.value;
  var lnamelen = vlname.length
  //var oRE = /^[a-zA-Z]+$/;
  var error=false;
  eobj.innerHTML='';
 if (lnamelen<2) 
{
    error="password is too minimum";
	contact_form.password.focus();
  }
  
  /*else if (!oRE.test(vlname))
{
   error="Enter only characters";
    contact_form.password.focus();
  }*/
 
  if (error)
{
   contact_form.password.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
 
 
 
 
 
 function checkconfirm(contact_form)
{
var password = contact_form.password.value;
  var eobj=document.getElementById('verify');
  var vlname = contact_form.verify.value;
  
  var error=false;
  eobj.innerHTML='';
 if (vlname!=password) 
{
    error="Mismatch password.";
	contact_form.verify.focus();
  }
  
  if (error)
{
   contact_form.verify.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
 
 
 
function checkidno(contact_form)
{
  var eobj=document.getElementById('idreg');
  var vtelephone = contact_form.idreg.value;
  var telephonelen = vtelephone.length;
  //var oRE = /^[0-9]+$/;
  var error=false;
  eobj.innerHTML='';
  if (vtelephone == '') {
   error='Enter idreg';
   contact_form.idreg.focus();
  }
  else if (telephonelen > 20) 
{
    error="Enter atmost 20 digits";
	contact_form.idreg.focus();
  }
  //else if (!oRE.test(vtelephone))
//{
 //  error="format: 0216/02";
 //  contact_form.idreg.focus();
 // }
  if (error)
{
   contact_form.idreg.focus();
   eobj.innerHTML=error;
   return false;
  }
  return true;
 }
 

 
function validate() 
 {
 var contact_form = document.forms['contact_form'];
 var ary=[checkusername,checkpassword,checkconfirm,checkidno];
 var rtn=true;
 var z0=0;
 for (var z0=0;z0<ary.length;z0++)
{
  if (!ary[z0](contact_form))
  {
    rtn=false;
  }
 }
 return rtn;
}
