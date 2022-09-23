const togglePassword = document.querySelector("#togglePassword");
const togglePassword2 = document.querySelector("#togglePassword");
const password = document.getElementById("exampleInputPassword1");
const passwordConf=document.getElementById("exampleInputPassword2");
const email=document.getElementById("exampleInputEmail1");
const Firstname=document.getElementById("exampleInputName1");
const middlename=document.getElementById("exampleInputName2");
const lastname=document.getElementById("exampleInputName3");
const familyname=document.getElementById("exampleInputName4");

var mailValue="";
var firstnamevalue="";
var middlenamevalue="";
var lastnamevalue="";
var familynamevalue="";
var passValue="";

var mailbool=false;
var firstbool=false;
var middlebool=false;
var lastbool=false;
var familybool=false;
var passbool=false;

const form=document.getElementById("form-reg");

togglePassword.addEventListener("click", function () {
   
    const type = password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    

    this.classList.toggle("bi-eye");
});



function validationForm(event){
    event.preventDefault();


    if (email.value == null || email.value == "") {
        document.getElementById("emailErr").textContent="The email field is required."
      } else if (
        !email.value.match(
            /^\S+@\S+\.\S+$/
        )
      ) {
        document.getElementById("emailErr").textContent =
          "The email must be a valid email address.";
        
      } else {
        
       mailValue=email.value;
        document.getElementById("emailErr").textContent ="";
        mailbool=true;
      }
      //firstname
      if (Firstname.value == "" || Firstname.value == null ) {
        document.getElementById("nameErr").textContent =
          "The name field is required.";
      } 
        
     else {
        firstnamevalue=Firstname.value;
        document.getElementById("nameErr").textContent = "";
        firstbool=true;
      }
      //middlename
      if (middlename.value == "" || middlename.value == null ) {
        document.getElementById("nameErr").textContent =
          "The name field is required.";
      } 
        
     else {
      middlenamevalue=middlename.value;
        document.getElementById("nameErr").textContent = "";
        middlebool=true;
      }

      //lastname
      if (lastname.value == "" || lastname.value == null ) {
        document.getElementById("nameErr").textContent =
          "The name field is required.";
      } 
        
     else {
        lastnamevalue=lastname.value;
        document.getElementById("nameErr").textContent = "";
        lastbool=true;
      }
      //familyname
      if (familyname.value == "" || familyname.value == null ) {
        document.getElementById("nameErr").textContent =
          "The name field is required.";
      } 
        
     else {
      familynamevalue=familyname.value;
        document.getElementById("nameErr").textContent = "";
        familybool=true;
      }
  


      if (password.value == '' || password.value == null) {
        document.getElementById("passErr").textContent = "The password field is required.";
        
      }else if(password.value.length <6 ){
        document.getElementById("passErr").textContent = "The password must be at least 6 characters.";
        
      }else if(password.value.length >18){
        document.getElementById("passErr").textContent = "The password may not be greater than 18 characters.";
        
      }else{
       
        passValue=password.value;
        document.getElementById("passErr").textContent = "";
      
      }
      if(passValue!=passwordConf.value){
        document.getElementById("passErr2").textContent = "The password not match";

      }
      else{
        passbool=true;
      }


      if(mailbool==true&&firstbool==true&&passbool==true&&middlebool==true&&lastbool==true&&familybool==true){
   
     
      }
  


}


//sign in 
const passwordIN = document.getElementById("passSignIN");
const emailIN=document.getElementById("EmailSignIN");
var mailValueIN="";
var passValueIN="";
var mailIN=false;
var passIN=false;

togglePassword2.addEventListener("click", function () {
   
  const type = passwordIN.getAttribute("type") === "password" ? "text" : "password";
  passwordIN.setAttribute("type", type);
  

  this.classList.toggle("bi-eye");
});

  function validationData(event){
    event.preventDefault();


    if (passwordIN.value == null || emailIN.value == "") {
      document.getElementById("emailErr").textContent="The email field is required."
    }

      
     
      
      }













