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
navClose = document.getElementById('nav-close')

navToggle.addEventListener('click', () => {
navMenu.classList.add('show-menu')
})

navClose.addEventListener('click', () => {
navMenu.classList.remove('show-menu')
})


const login = document.getElementById('login'),
loginBtn = document.getElementById('login-btn'),
loginClose = document.getElementById('login-close')

document.getElementById("reference-photo").addEventListener("mouseenter", function() {
    magnify('reference-photo', 3);
});

document.getElementById("reference-photo").addEventListener("mouseleave", function() {
    var glass = document.querySelector(".img-magnifier-glass");
    if (glass) {
        glass.remove();
    }
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


// HIDDEN INFO BOX
const categories = document.querySelectorAll('.category');

categories.forEach(category => {
    category.addEventListener('click', function() {
        const infoBoxes = this.parentElement.querySelectorAll('.info-box');
        infoBoxes.forEach(infoBox => {
            // Toggle display of info boxes
            infoBox.style.display = infoBox.style.display === 'block' ? 'none' : 'block';
        });
    });
});

const subtypeTexts = document.querySelectorAll('.subtype-text');

subtypeTexts.forEach(subtypeText => {
    subtypeText.addEventListener('click', function() {
        const infoBoxes = this.parentElement.querySelectorAll('.info-box');
        infoBoxes.forEach(infoBox => {
            // Toggle display of info boxes
            infoBox.style.display = infoBox.style.display === 'block' ? 'none' : 'block';
        });
    });
});


// ROTATE ICON
document.addEventListener('DOMContentLoaded', () => {
    const categories = document.querySelectorAll('.category');

    categories.forEach(category => {
        category.addEventListener('click', function() {
            const icon = this.querySelector('img');
            icon.classList.toggle('rotated');
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const categories = document.querySelectorAll('.subtype-text');

    categories.forEach(category => {
        category.addEventListener('click', function() {
            const icon = this.querySelector('img');
            icon.classList.toggle('rotated');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Get all location details elements
    const locationDetails = document.querySelectorAll('.location-details');

    // Loop through each location details element
    locationDetails.forEach(function(location, index) {
       // Add click event listener to the location name
        location.querySelector('p').addEventListener('click', function() {
            // Hide all iframes
            const iframes = document.querySelectorAll('.location-info iframe');
                iframes.forEach(function(iframe) {
                iframe.hidden = true;
            });

            // Show the corresponding iframe
            const iframeToShow = document.querySelector(`.location-info iframe:nth-child(${index + 1})`);
            if (iframeToShow) {
                iframeToShow.hidden = false;
            }
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
