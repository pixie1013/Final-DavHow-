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

// Search 
// Function to handle form submission
document.addEventListener("DOMContentLoaded", function() {
  
    function handleFormSubmit(event) {
        // Prevent the default form submission behavior
        event.preventDefault();
        
        // Get the value from the input field
        var searchQuery = document.getElementById("form1").value;
  
        
        // Perform AJAX request to the PHP script
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "search.php?search=" + encodeURIComponent(searchQuery), true);
        console.log("Hey");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Log the response
                var documentIds = JSON.parse(xhr.responseText);
                // Show documents based on IDs
                showDocuments(documentIds);
            }
        };
  
        xhr.send();
        
        // Clear the input field after search
        document.getElementById("form1").value = "";
    }
        
  // Function to show documents based on IDs
  function showDocuments(documentIds) {
  var productCards = document.querySelectorAll(".product-card");
  var hasMatches = false;
  
  productCards.forEach(function(card) {
    var productId = card.getAttribute("data-id");
    if (documentIds.includes(productId)) {
        card.style.display = "block";
        hasMatches = true;
    } else {
        card.style.display = "none";
    }
  });
  
  var messageResult = document.querySelector(".message_result");
  var productSection = document.querySelector(".product");
  
  if (hasMatches) {
    messageResult.style.display = "none";
    productSection.style.display = "block";
  } else {
    messageResult.style.display = "block";
    productSection.style.display = "none";
  }
  }
  
  
  // Add event listener to the search button
  document.getElementById("form").addEventListener("submit", handleFormSubmit);
  
  // Event listener for next button
  document.querySelectorAll('.nxt-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        var container = this.parentNode.querySelector('.product-container');
        var containerWidth = container.getBoundingClientRect().width;
        container.scrollLeft += containerWidth;
    });
  });
  
  // Event listener for previous button
  document.querySelectorAll('.pre-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        var container = this.parentNode.querySelector('.product-container');
        var containerWidth = container.getBoundingClientRect().width;
        container.scrollLeft -= containerWidth;
    });
  });
  });

  function logout() {
    fetch('../logout.php')
    .then(response => {
      if (response.ok) {
        window.location.reload();
      } else {
        console.error('Logout request failed.');
      }
  })
  .catch(error => {
      console.error('Error during logout:', error);
  });
}