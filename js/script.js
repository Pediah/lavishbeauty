let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');
let closeBtn = document.querySelector('#close-navbar');

menuBtn.onclick = () =>{
   navbar.classList.add('active');
};

closeBtn.onclick = () =>{
    navbar.classList.remove('active');
 };

window.onscroll = () =>{
   navbar.classList.remove('active');
};

// animation

function isInViewport(element) {
   const rect = element.getBoundingClientRect();
   const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
   const windowWidth = (window.innerWidth || document.documentElement.clientWidth);

   return (
       rect.top <= windowHeight && 
       rect.left <= windowWidth && 
       rect.bottom >= 0 && 
       rect.right >= 0
   );
}

document.addEventListener('scroll', function() {
   const image = document.querySelector('.image1 img');
   if (isInViewport(image)) {
       image.classList.add('float-in');
   }
}, {
   passive: true
});

// contact form

const days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
const times = ['8 AM', '9 AM', '10 AM', '11 AM', '12 PM', '1 PM', '2 PM', '3 PM', '4 PM', '5 PM'];

function updateDaySlots() {
    const departmentSelect = document.getElementById('department');
    const daySlotSelect = document.getElementById('day');
    
    // Enable the day slot select and remove existing options
    daySlotSelect.disabled = false;
    daySlotSelect.innerHTML = '<option value="" disabled selected>Select Day</option>';

    // Generate options based on selected department
    if (departmentSelect.value === 'department1') {
        days.forEach(day => {
            const option = document.createElement('option');
            option.value = day.toLowerCase();
            option.textContent = day;
            daySlotSelect.appendChild(option);
        });
    } else if (departmentSelect.value === 'department2') {
        // You can customize options based on different departments if needed
        days.slice(0, 3).forEach(day => { // Example: Only Monday to Wednesday for department 2
            const option = document.createElement('option');
            option.value = day.toLowerCase();
            option.textContent = day;
            daySlotSelect.appendChild(option);
        });
    } else if (departmentSelect.value === 'department3') {
        // Example: Only Thursday and Friday for department 3
        days.slice(3).forEach(day => {
            const option = document.createElement('option');
            option.value = day.toLowerCase();
            option.textContent = day;
            daySlotSelect.appendChild(option);
        });
    }
}

function updateTimeSlots() {
    const daySelect = document.getElementById('day');
    const timeSlotSelect = document.getElementById('time');
    
    // Enable the time slot select and remove existing options
    timeSlotSelect.disabled = false;
    timeSlotSelect.innerHTML = '<option value="" disabled selected>Select Time Slot</option>';

    // Generate options based on selected day
    times.forEach(time => {
        const option = document.createElement('option');
        option.value = `${daySelect.value}_${time.replace(' ', '').toLowerCase()}`;
        option.textContent = `${daySelect.value.charAt(0).toUpperCase() + daySelect.value.slice(1)} ${time}`;
        timeSlotSelect.appendChild(option);
    });
}

// nav bar function

document.addEventListener("DOMContentLoaded", function() {
    let lastScrollTop = 0;
    const navbar = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Downscroll
            navbar.style.top = `-${navbar.offsetHeight}px`; // Hide the navbar completely
        } else {
            // Upscroll
            navbar.style.top = '0';
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });
});