const validate = (isLogin) => {
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  if (email == "") {
    alert("Email must not be empty");
    return false;
  }
  if (password == "") {
    alert("Password must not be empty");
    return false;
  }
  const regex = /^\S+@\S+\.\S+$/;
  if (regex.test(email) === false) {
    alert("Invalid Email Format");
    return false;
  }
  if (isLogin) return true;

  const name = document.getElementById("name").value;
  const confirmPassword = document.getElementById("confirm-password").value;
  if (name == "") {
    alert("Name must not be empty");
    return false;
  }
  if (password != confirmPassword) {
    alert("Password and confirm password should be the same");
    return false;
  }

  return true;
};
