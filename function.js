const sideMenu = document.querySelector('aside');
const menuBtn = document.getElementById('menu-btn');
const closeBtn = document.getElementById('close-btn');

const darkModeButton = document.querySelector('.dark-mode');
const body = document.body;

// Check if dark mode is stored in sessionStorage
const isDarkMode = sessionStorage.getItem('darkMode') === 'true';

// Set initial mode based on sessionStorage or default to light mode
body.classList.toggle('dark-mode-variables', isDarkMode);
darkModeButton.querySelector('span:nth-child(1)').classList.toggle('active', !isDarkMode);
darkModeButton.querySelector('span:nth-child(2)').classList.toggle('active', isDarkMode);

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});

darkModeButton.addEventListener('click', () => {
    // Toggle dark mode class on body
    body.classList.toggle('dark-mode-variables');

    // Toggle active class on dark mode button icons
    darkModeButton.querySelector('span:nth-child(1)').classList.toggle('active');
    darkModeButton.querySelector('span:nth-child(2)').classList.toggle('active');

    // Store the current mode in sessionStorage
    const currentMode = body.classList.contains('dark-mode-variables') ? 'true' : 'false';
    sessionStorage.setItem('darkMode', currentMode);
});




// Orders.forEach(order => {
//     const tr = document.createElement('tr');
//     const trContent = `
//         <td>${order.productName}</td>
//         <td>${order.productNumber}</td>
//         <td>${order.paymentStatus}</td>
//         <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
//         <td class="primary">Details</td>
//     `;
//     tr.innerHTML = trContent;
//     document.querySelector('table tbody').appendChild(tr);
// });