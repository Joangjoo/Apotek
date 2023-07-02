const container = document.querySelector(".container");
const pwShowHide = Array.from(document.querySelectorAll(".showHidePw"));
const pwFields = Array.from(document.querySelectorAll(".password"));

pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach((pwField) => {
      if (pwField.type === "password") {
        pwField.setAttribute("type", "text");
        pwShowHide.forEach((icon) => {
          icon.classList.replace("ri-eye-off-fill", "ri-eye-line");
        });
      } else {
        pwField.setAttribute("type", "password");
        pwShowHide.forEach((icon) => {
          icon.classList.replace("ri-eye-line", "ri-eye-off-fill");
        });
      }
    });
  });
});

