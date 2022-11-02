const container = document.querySelector(".login-container");
const pwShowHide = document.querySelectorAll(".showHidePw");
const pwFields = document.querySelectorAll(".password");
const signUp = document.querySelector(".signup-link");
const login = document.querySelector(".login-link");

// show hide password and change icon
pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach((pwField, idx) => {
      if (pwField.type === "password") {
        pwField.type = "text";

        pwShowHide.forEach(icon => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pwField.type = "password";

        pwShowHide.forEach(icon => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    })
  })
});


// to appear signup and login form
// signUp.addEventListener("click", () => {
//   container.classList.add("active");
// });

// login.addEventListener("click", () => {
//   container.classList.remove("active");
// });


// handle login
function handleLogin(event) {
  event.preventDefault();
  let username = document.loginForm.username.value;
  let password = document.loginForm.password.value;

  if (username.length < 1 || username === null) {
    alert("Enter username!");
    return;
  }
  else if (password.length === null) {
    alert("Enter password");
    return;
  }
  else {
    // log in the user
    const payload = { username, password };
    console.log(payload);
    alert("success ");
    window.location.replace('payment.html');
  }
};


// handle registration
function handleRegistration(event) {
  event.preventDefault();
  let username = document.registerForm.username.value;
  let email = document.registerForm.email.value;
  let password = document.registerForm.password.value;
  let re_password = document.registerForm.re_password.value;

  const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (username.length < 1 || username === null) {
    alert("username required!");
    return;
  }
  else if (!emailRegex.test(email)) {
    alert("Invalid email!");
    return
  }
  else if (password.length < 6) {
    alert("password must be at least 6 characters!");
    return;
  }
  else if (password !== re_password) {
    alert("passwords do not match!");
    return;
  }
  else {
    const payload = { username, email, password, re_password };
    console.log(payload);
    alert("success");
    window.location.replace('payment.html');
  }
};


// handle payment
function handlePayment(event) {
  event.preventDefault();
  let cardNumber = document.paymentForm.cardNumber.value;
  let expDate = document.paymentForm.expirationDate.value;
  let cvCode = document.paymentForm.cvCode.value;

  if (!(expDate.includes('/'))) {
    alert("Please enter code in the format MM/YY");
    return;
  }

  let expMonth = expDate.split('/')[0];
  let expYear = expDate.split('/')[1];

  if (!(/^[0-9]+$/.test(cardNumber))) {
    alert("invalid card number!");
  }
  else if (cardNumber.toString().length !== 16) {
    alert("invalid card number!")
  }
  else if ((expMonth < 1) || (expMonth > 12)) {
    alert("invalid date!");
  }
  else if ((expYear.toString().length !== 4) || (Number(expYear) < 1000)) {
    alert("invalid date!");
  }
  else if (!(/^[0-9]+$/.test(cvCode))) {
    alert("invalid code!");
  }
  else if (cvCode.length !== 3) {
    alert("invalid code!");
  }
  else {
    alert("Payment successful!");
  }

}