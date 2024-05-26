const form = document.querySelector(".contactUs form");
const statusTxt = form.querySelector(".send-button span");

form.onsubmit = (e) => {
  e.preventDefault();
  statusTxt.style.display = "block";
  statusTxt.style.color = "#023047";
  statusTxt.innerText = "Sending...";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "message.php", true);
  xhr.onload = () => {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        let response = xhr.responseText;
        if (response.indexOf("Email, name, and message fields are required") != 1 || response.indexOf("Enter a valid email address!") != 1){
            statusTxt.style.color = "red";
            statusTxt.innerText = response;
        } else {
          form.reset();
        }
      } else {
        statusTxt.innerText = response;
        statusTxt.style.color = "#023047";
      }
    }
  };
  xhr.onerror = () => {
    statusTxt.innerText = "An error occurred. Please check your internet connection.";
  };
  let formData = new FormData(form);
  xhr.send(formData);
};
