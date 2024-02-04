const accordion = document.getElementsByClassName('contentBx');

for (i = 0; i<accordion.length; i++ ){
    accordion[i].addEventListener('click',function(){
        this.classList.toggle('active')
    })
};

function validateEmail() {
    let inputEmail = document.querySelector("#email");
    let valueEmail = inputEmail.value;
    let errorEmail = document.querySelector("#error-email");
  
    if (valueEmail == "") {
      alert("Email cannot be empty!");
      inputEmail.style.border = "1px solid red";
      return false;
    } else if (!valueEmail.includes("@")) {
      alert("Email must contain '@'!");
      inputEmail.style.border = "1px solid red";
      return false;
    } else {
      inputEmail.style.border = "1px solid black";
      return true;
    }
}

let sendBtn = document.querySelector("#send-btn");
sendBtn.addEventListener("click", function (e) {
  e.preventDefault(); // Stop form submission

  let isEmailValid = validateEmail();

  if (
    isEmailValid 
  ) {
    let sendForm = document.querySelector("#email");
    alert("Email Submitted!");
    sendForm.submit();
  }
});

window.addEventListener("load",() => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");

    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
})

var button = document.getElementById('myButton');
    var link = document.getElementById('myLink');

    // Add click event listener to the button
    button.addEventListener('click', function() {
        // Open the link in the same tab when the button is clicked
        window.location.href = link.href;
    });