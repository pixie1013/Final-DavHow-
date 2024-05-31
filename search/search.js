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

// For the scroll part of the search results
document.addEventListener("DOMContentLoaded", function() {
  const productContainers = document.querySelectorAll('.product-container');

  productContainers.forEach((container, index) => {
      const nxtBtn = container.closest('.product').querySelector('.nxt-btn');
      const preBtn = container.closest('.product').querySelector('.pre-btn');

      nxtBtn.addEventListener('click', function() {
        const scrollAmount = container.offsetWidth * 0.5; // Adjust the multiplier as needed
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
          });
      });

      preBtn.addEventListener('click', function() {
        const scrollAmount = container.offsetWidth * 0.5; // Adjust the multiplier as needed
        container.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
          });
      });
  });
});


// Search 
// Function to handle form submission
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("form").addEventListener("submit", handleFormSubmit);

  function handleFormSubmit(event) {
      event.preventDefault();
      var searchQuery = document.getElementById("form1").value;
      performSearch(searchQuery);
      hideSuggestions(); // Clear suggestions box
  }

  function performSearch(query) {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "search.php?search=" + encodeURIComponent(query), true);
      xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
              var documentIds = JSON.parse(xhr.responseText);
              showDocuments(documentIds);
          }
      };
      xhr.send();
  }

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

  window.hideSuggestions = function() {
      setTimeout(function() {
          var suggestionsBox = document.getElementById("suggestions");
          suggestionsBox.style.display = 'none';
      }, 200);
  }

  window.showSuggestions = function(query) {
      var suggestionsBox = document.getElementById("suggestions");

      if (query.length > 0) {
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "suggestions.php?query=" + encodeURIComponent(query), true);
          xhr.onreadystatechange = function() {
              if (xhr.readyState === 4 && xhr.status === 200) {
                  var suggestions = JSON.parse(xhr.responseText);
                  var suggestionsList = suggestions.map(function(item) {
                      return "<div class='suggestion-item'>" + item + "</div>";
                  }).join("");
                  suggestionsBox.innerHTML = suggestionsList;
                  suggestionsBox.style.display = "block"; 
              }
          };
          xhr.send();
      } else {
          suggestionsBox.style.display = 'none';
      }
  }

  document.getElementById("suggestions").addEventListener("mousedown", function(event) {
      if (event.target.classList.contains("suggestion-item")) {
          selectSuggestion(event.target.textContent);
      }
  });

  window.selectSuggestion = function(suggestion) {
      document.getElementById("form1").value = suggestion;
      performSearch(suggestion);
      hideSuggestions(); 
  }
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
  })
  }