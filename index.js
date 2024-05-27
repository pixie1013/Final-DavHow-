// Show Menu
const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu')
})

navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu')
})

//Search
const search = document.getElementById('search'),
    searchBtn = document.getElementById('search-btn'),
    searchClose = document.getElementById('search-close')

searchBtn.addEventListener('click', () => {
    search.classList.add('show-search')
})

searchClose.addEventListener('click', () => {
    search.classList.remove('show-search')
})

const login = document.getElementById('login'),
    loginBtn = document.getElementById('login-btn'),
    loginClose = document.getElementById('login-close')

loginBtn.addEventListener('click', () => {
    login.classList.add('show-login')
})

loginClose.addEventListener('click', () => {
    login.classList.remove('show-login')
})

const displayTime = document.querySelector(".display-time");
// Time
function showTime() {
  let time = new Date();
  displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
  setTimeout(showTime, 1000);
}

showTime();

// Date
function updateDate() {
  let today = new Date();

  // return number
  let dayName = today.getDay(),
    dayNum = today.getDate(),
    month = today.getMonth(),
    year = today.getFullYear();

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  const dayWeek = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];
  // value -> ID of the html element
  const IDCollection = ["day", "daynum", "month", "year"];
  // return value array with number as a index
  const val = [dayWeek[dayName], dayNum, months[month], year];
  for (let i = 0; i < IDCollection.length; i++) {
    document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
  }
}

updateDate();

document.addEventListener('DOMContentLoaded', function() {
  AOS.init({
    duration: 1000, // Animation duration in milliseconds
    easing: 'ease-in-out', // Easing function for the animation
    once: true, // Whether animation should happen only once - while scrolling down
    mirror: false, // Whether elements should animate out while scrolling past them
  });
});

const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

// COMMENT SECTION
function toggleComments(postId) {
  var commentInput = document.getElementById('comment-input-' + postId);

  if (commentInput.style.display === "none" || commentInput.style.display === "") {
      commentInput.style.display = "block"; // Show the comment input when it's hidden
  } else {
      commentInput.style.display = "none"; // Hide the comment input when it's visible
  }
}



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
        if (response.indexOf("Email, name, title and message fields are required") !== -1 || response.indexOf("Enter a valid email address!") !== -1) {
          console.log("Bye");
          statusTxt.style.color = "red"; 
          statusTxt.innerText = response;
        } else {
          console.log("Hey");
          statusTxt.style.color = "#023047"; 
          statusTxt.innerText = response;
          form.reset(); 
          console.log("Hello");
        }
      } else {
        statusTxt.style.color = "red"; 
        statusTxt.innerText = "An error occurred. Please try again.";
      }
    }
  };
  xhr.onerror = () => {
    statusTxt.style.color = "red"; 
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
