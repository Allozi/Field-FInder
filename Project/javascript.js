



function loginbox() {
    const loginBox = document.getElementById('login-modal');
    loginBox.style.display='block';
}

function closebox(){
    const loginBox = document.getElementById('login-modal');
    loginBox.style.display='none';
}

window.addEventListener('click', function(event) {
    const loginBox = document.getElementById('login-modal');

    if (event.target === loginBox) {
        loginBox.style.display = 'none';
    }
});



  function signnbox() {
    const loginBox = document.getElementById('sign-modal');
    loginBox.style.display='block';
}

function closeboxs(){
    const loginBox = document.getElementById('sign-modal');
    loginBox.style.display='none';
}


window.addEventListener('click', function(event) {
    const signBox = document.getElementById('sign-modal');

    if (event.target === signBox) {
        signBox.style.display = 'none';
    }
});


function submitForm(){
    
    
            


    var sphonenumber = document.getElementById("sphonenumber").value;
    var sfullname = document.getElementById("sfullname").value;
    var spassword = document.getElementById("spassword").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "signup.php", true);
   


    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function(){
      if(xhr.readyState == 4 && xhr.status == 200){
        //Do something with the response
        console.log(xhr.responseText);
      }
     }
    xhr.send("sphonenumber="+sphonenumber+"&sfullname="+sfullname+"&spassword="+spassword);
    
  }
    






