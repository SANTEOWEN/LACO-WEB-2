const container = document.querySelector(".container"),
  pwShowHide = document.querySelectorAll(".showHide"),
  pwFields = document.querySelectorAll(".password"),
  signUp = document.querySelector(".signup-link"),
  logIn = document.querySelector(".login-link");

const birtdate = [
  'month, " "',
  'day, " "'
]


pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach((pwField) => {
      if (pwField.type === "password") {
        pwField.type = "text";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pwField.type = "password";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    });
  });
});

// Function to display sign up and login form

signUp.addEventListener("click", () => {
  container.classList.add("active");
});

logIn.addEventListener("click", () => {
  container.classList.remove("active");
});
