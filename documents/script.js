$(document).ready(function() {
    // Function to show the corresponding section based on the clicked button
    function showSection(section) {
        // Hide all sections
        $('.information-area > div').hide();
        // Show the selected section
        $(section).show();
    }

    // Function to update the background gradient of the corresponding div
    function updateBackground() {
        // Remove the background gradient from all divs
        $('.information-option div div').css({
            'background': 'linear-gradient(to top, #003676, #0E71E4)',
            'box-shadow': '0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)'
        });
        // Add the background gradient to the corresponding div
        $('.information-option input[type="radio"]:checked').each(function() {
            var $div = $(this).closest('.information-option').find('label[for="' + this.id + '"]').closest('div div');
            $div.css({
                'background': 'linear-gradient(to top, #75AAE8, #0075FF)',
                'box-shadow': '0 0px 0 0 rgba(0,0,0,0.3), 0 0 0 rgba(0,0,0,0.25)'
            });
        });
    }

    // Add click event listeners to all the buttons
    $('.information-option input[type="radio"]').click(function() {
        // Show the corresponding section based on the button's ID
        if ($(this).attr('id') === 'tap1') {
            showSection('.requirement-info');
        } else if ($(this).attr('id') === 'tap2') {
            showSection('.procedure-info');
        } else if ($(this).attr('id') === 'tap3') {
            showSection('.location-info');
        } else if ($(this).attr('id') === 'tap4') {
            showSection('.fee-info');
        } else if ($(this).attr('id') === 'tap5') {
            showSection('.samplephoto-info');
        } else if ($(this).attr('id') === 'tap6') {
            showSection('.reference-info');
        }

        // Update the background gradient
        updateBackground();
    });

    // Initially show the first section and update the background
    showSection('.requirement-info');
    updateBackground();
});

// Magnify function
function magnify(imgID, zoom) {
    var img = document.getElementById(imgID);
    var glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    img.parentElement.insertBefore(glass, img);

    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    var bw = 3;
    var w = glass.offsetWidth / 2;
    var h = glass.offsetHeight / 2;

    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos = getCursorPos(e);
        var x = pos.x;
        var y = pos.y;
        e.preventDefault();
        if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
        if (x < w / zoom) { x = w / zoom; }
        if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
        if (y < h / zoom) { y = h / zoom; }
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a = img.getBoundingClientRect();
        var x = e.pageX - a.left - window.pageXOffset;
        var y = e.pageY - a.top - window.pageYOffset;
        return { x: x, y: y };
    }
}

document.getElementById("reference-photo").addEventListener("mouseenter", function() {
    magnify('reference-photo', 3);
});

document.getElementById("reference-photo").addEventListener("mouseleave", function() {
    var glass = document.querySelector(".img-magnifier-glass");
    if (glass) {
        glass.remove();
    }
});

// Show Menu
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close');

navToggle.addEventListener('click', () => {
    navMenu.classList.add('show-menu');
});

navClose.addEventListener('click', () => {
    navMenu.classList.remove('show-menu');
});

// Search
const search = document.getElementById('search'),
      searchBtn = document.getElementById('search-btn'),
      searchClose = document.getElementById('search-close');

searchBtn.addEventListener('click', () => {
    search.classList.add('show-search');
});

searchClose.addEventListener('click', () => {
    search.classList.remove('show-search');
});

// Login
const login = document.getElementById('login'),
      loginBtn = document.getElementById('login-btn'),
      loginClose = document.getElementById('login-close');

loginBtn.addEventListener('click', () => {
    login.classList.add('show-login');
});

loginClose.addEventListener('click', () => {
    login.classList.remove('show-login');
});

// Display Time
const displayTime = document.querySelector(".display-time");
function showTime() {
    let time = new Date();
    displayTime.innerText = time.toLocaleTimeString("en-US", { hour12: false });
    setTimeout(showTime, 1000);
}
showTime();

// Update Date
function updateDate() {
    let today = new Date();
    let dayName = today.getDay(),
        dayNum = today.getDate(),
        month = today.getMonth(),
        year = today.getFullYear();

    const months = [
        "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
    ];
    const dayWeek = [
        "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
    ];
    const IDCollection = ["day", "daynum", "month", "year"];
    const val = [dayWeek[dayName], dayNum, months[month], year];
    for (let i = 0; i < IDCollection.length; i++) {
        document.getElementById(IDCollection[i]).firstChild.nodeValue = val[i];
    }
}
updateDate();

// Magnify function repetition
function magnify(imgID, zoom) {
    var img = document.getElementById(imgID);
    var glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
    img.parentElement.insertBefore(glass, img);

    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    var bw = 3;
    var w = glass.offsetWidth / 2;
    var h = glass.offsetHeight / 2;

    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);

    function moveMagnifier(e) {
        var pos = getCursorPos(e);
        var x = pos.x;
        var y = pos.y;
        e.preventDefault();
        if (x > img.width - (w / zoom)) { x = img.width - (w / zoom); }
        if (x < w / zoom) { x = w / zoom; }
        if (y > img.height - (h / zoom)) { y = img.height - (h / zoom); }
        if (y < h / zoom) { y = h / zoom; }
        glass.style.left = (x - w) + "px";
        glass.style.top = (y - h) + "px";
        glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }

    function getCursorPos(e) {
        var a = img.getBoundingClientRect();
        var x = e.pageX - a.left - window.pageXOffset;
        var y = e.pageY - a.top - window.pageYOffset;
        return { x: x, y: y };
    }
}


// Show subtypes
const eligibilityTypes = document.querySelectorAll('.eligibility-type');
const subType = document.querySelectorAll('.subtype-text');

eligibilityTypes.forEach(eligibilityType => {
    eligibilityType.addEventListener('click', function() {
        const infoBoxes = this.parentElement.querySelectorAll('.info-box');
        for (let i = 1; i < infoBoxes.length; i++) {
            infoBoxes[i].style.display = infoBoxes[i].style.display === 'block' ? 'none' : 'block';
        }
    });
});

const feeTypeTexts = document.querySelectorAll('.fee-type-text');

feeTypeTexts.forEach(feeTypeText => {
    feeTypeText.addEventListener('click', function() {
        let sibling = this.parentElement.nextElementSibling;
        while (sibling) {
            if (sibling.classList.contains('fee')) {
                sibling.style.display = sibling.style.display === 'block' ? 'none' : 'block';
            }
            sibling = sibling.nextElementSibling;
        }
    });
});

const subtypeTexts = document.querySelectorAll('.subtype-text');

subtypeTexts.forEach(subtypeText => {
    subtypeText.addEventListener('click', function() {
        let sibling = this.parentElement.nextElementSibling;
        while (sibling) {
            if (sibling.classList.contains('info-box')) {
                sibling.style.display = sibling.style.display === 'block' ? 'none' : 'block';
            }
            sibling = sibling.nextElementSibling;
        }
    });
});


// Rotate Icon
document.addEventListener('DOMContentLoaded', () => {
    const eligibilityTypes = document.querySelectorAll('.eligibility-type');
    eligibilityTypes.forEach(eligibilityType => {
        eligibilityType.addEventListener('click', function() {
            const icon = this.querySelector('img');
            icon.classList.toggle('rotated');
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const subtypeTexts = document.querySelectorAll('.subtype-text');
    subtypeTexts.forEach(subtypeText => {
        subtypeText.addEventListener('click', function() {
            const icon = this.parentElement.querySelector('img');
            icon.classList.toggle('rotated');
        });
    });
});
