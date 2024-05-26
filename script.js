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

function viewMessage(id) {
  fetch('view.php?id=' + id)
      .then(response => response.json())
      .then(data => {
          if (data.error) {
              alert(data.error);
          } else {
              document.getElementById('modal-date').innerText = data.created_at;
              document.getElementById('modal-first-name').innerText = data.first_name;
              document.getElementById('modal-last-name').innerText = data.last_name;
              document.getElementById('modal-email').innerText = data.email;
              document.getElementById('modal-mobile-number').innerText = data.mobile_number;
              document.getElementById('modal-title').innerText = data.title;
              document.getElementById('modal-message').innerText = data.message;

              document.getElementById('myModal').style.display = "block";
          }
      });
}

function deleteMessage(id) {
  if (confirm('Are you sure you want to delete this message?')) {
      window.location.href = 'delete.php?id=' + id;
  }
}

window.onclick = function(event) {
  var modal = document.getElementById('myModal');
  if (event.target == modal) {
      modal.style.display = "none";
  }
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}