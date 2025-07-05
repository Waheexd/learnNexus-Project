const loginForm = document.querySelector("#Login");
const email = document.querySelector("#username");
const password = document.querySelector("#pass");
let c=0;
const validateForm = async () => {
    c=0;
    validateEmail();
    validatePassword1();
    validatePassword2();
    if(c===0){
        console.log("no errors found");
        try {
          const response = await submitForm();
          if (response.error) {
            const unsucessfull = document.querySelector("#unsucess");
            unsucessfull.innerText="Login unsucessful, please check the credentials";
            c += 1;
          } else if(response.success) {
            // Form data is valid, submit the form
            loginForm.submit();
            window.location.href = "dashb.php";
          }
        } catch (error) {
          console.error("Error while submitting form:", error);
          const unsucessfull = document.querySelector("#unsucess");
          unsucessfull.innerText="Login unsucessful, please check the credentials";
        }
      }
    else{
        console.log("Errors found. Form submission prevented.");
    }
    
};
loginForm.addEventListener('submit',(event)=>{
    event.preventDefault();
    validateForm();
  })

//displaying errors
const emailError  = (message)  => {
    email.classList.add("error");
    const small= document.querySelector("#errormsgname");
    small.innerText = message;
  }
  const passError1  = (message)  => {
    password.classList.add("error");
    const small= document.querySelector("#errormsgpass1");
    small.innerText = message;
  }
  const passError2  = (message)  => {
    password.classList.add("error");
    const small= document.querySelector("#errormsgpass2");
    small.innerText = message;
  }

  //validating fucntions
  const validateEmail = () => {
    const emailValue= email.value.trim();
    if(emailValue===""){
      emailError("Phone Number is required");
      c+=1;
    }
  };
  const validatePassword1  = ()  => {
    const passwordValue = password.value.trim();
    if(passwordValue===""){
        passError1("Password is required");
        c+=1;
    }
  }
  const validatePassword2  = ()  => {
    const passwordValue = password.value.trim();
    if(passwordValue.length < 8){
        passError2("Password must be of 8 characters");
        c+=1;
    }
  }
  async function submitForm() {
    const formData = new FormData(loginForm);
    const url = "loginphp.php"; 
    const response = await fetch(url, {
      method: "POST",
      body: formData,
    });
    return await response.json();
  }