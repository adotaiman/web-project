let menu=document.querySelector('#menu-bar');
let navbar=document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
const header = document.querySelector("header")

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY >60)

});

document.getElementById("inputForms").addEventListener("submit", function(event) {  

    event.preventDefault(); 
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var mesg = document.getElementById("yourmesg").value;
    var contact = document.getElementById("yourcontact").value;
 
  

    if(firstname=="" || mesg=="" || lastname=="" || contact==""){
      alert("error,one or more fields are empty");
    }
      else if(contact.length!==8 && contact.length!==10){
alert("invalid contact number");
      }
      else{
        alert("successfully submitted")
      }

    
  });
 

var getstarted=document.getElementById("started");
getstarted.addEventListener("click", started);
function started(){
    var emailInput=document.querySelector('input[type="text"]');
   var  email=emailInput.value;

    let regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!regex.test(email)) {
            alert("Please enter a valid email address.");
            return;
        }
       

}


/*
var signup=document.getElementById("started");
function reg (){
window.open("loginform/signup.php")
};
signup.addEventListener("click",reg);
*/