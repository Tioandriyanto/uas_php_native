document.addEventListener("DOMContentLoaded", function () {
    const tableBody = document.getElementById("schoolData");
    const searchInput = document.getElementById("searchInput");
    const entriesSelect = document.getElementById("entries");
    const paginationWrapper = document.getElementById("pagination");
    const entriesInfo = document.getElementById("entriesInfo");
    const hamburgerBtn = document.getElementById("hamburgerBtn");
    const navbarMenu = document.querySelector(".navbar-menu");
    let allSchoolData = [];
    let filteredData = [];
    let currentPage = 1;
    let entriesPerPage = 10;

    // Fetch data and initialize
    function fetchData() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const userLat = position.coords.latitude;
                const userLon = position.coords.longitude;

                fetch("get_data.php")
                    .then((response) => response.json())
                    .then((data) => {
                        allSchoolData = data.map(item => ({
                            ...item,
                            distance: calculateDistance(userLat, userLon, item.latitude, item.longitude),
                        }));
                        filteredData = allSchoolData; // Awalnya semua data ditampilkan
                        updatePagination();
                        displayData();
                    })
                    .catch((error) => console.error("Error fetching data:", error));
            });
        } else {
            alert("Geolocation tidak didukung di browser ini.");
        }
    }

    // Toggle navbar menu for mobile view
    hamburgerBtn.addEventListener("click", () => {
        navbarMenu.classList.toggle("active");
    });

    // Display data in the table
    function displayData() {
        tableBody.innerHTML = "";
        const startIndex = (currentPage - 1) * entriesPerPage;
        const endIndex = Math.min(startIndex + entriesPerPage, filteredData.length);

        filteredData.slice(startIndex, endIndex).forEach((item, index) => {
            const photoCell = item.foto
                ? `<img src="${item.foto}" alt="Foto Lokasi" style="width: 100px; height: 100px; object-fit: cover;">`
                : "Foto tidak tersedia";

            const routeButton = `
                <button class="route-btn" onclick="window.open('https://maps.google.com/?q=${item.latitude},${item.longitude}')">
                    Lihat Rute
                </button>
            `;

            const row = `
                <tr>
                    <td>${startIndex + index + 1}</td>
                    <td>${item.nama_sekolah}</td>
                    <td>${item.telepon || "-"}</td>
                    <td>${routeButton}</td>
                    <td>${item.distance} km</td>
                    <td>${photoCell}</td>
                </tr>
            `;
            tableBody.insertAdjacentHTML("beforeend", row);
        });

        updateEntriesInfo(startIndex + 1, endIndex, filteredData.length);
    }

    // Calculate distance between two coordinates
    function calculateDistance(lat1, lon1, lat2, lon2) {
        const R = 6371; // Radius of the earth in km
        const dLat = (lat2 - lat1) * (Math.PI / 180);
        const dLon = (lon2 - lon1) * (Math.PI / 180);
        const a =
            Math.sin(dLat / 2) * Math.sin(dLon / 2) +
            Math.cos(lat1 * (Math.PI / 180)) *
                Math.cos(lat2 * (Math.PI / 180)) *
                Math.sin(dLon / 2) *
                Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return (R * c).toFixed(2);
    }

    // Handle search functionality
    function searchSchool() {
        const searchText = searchInput.value.toLowerCase();
        filteredData = allSchoolData.filter(item =>
            item.nama_sekolah.toLowerCase().includes(searchText)
        );
        currentPage = 1;
        updatePagination();
        displayData();
    }

    // Update pagination buttons
// Update pagination buttons
function updatePagination() {
    paginationWrapper.innerHTML = "";
    const totalPages = Math.ceil(filteredData.length / entriesPerPage);

    if (currentPage > 1) {
        paginationWrapper.innerHTML += `<button class="page-btn" data-page="${currentPage - 1}">Previous</button>`;
    }

    const maxVisiblePages = 5; // Maximum number of visible page buttons
    const startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
    const endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

    if (startPage > 1) {
        paginationWrapper.innerHTML += `<button class="page-btn" data-page="1">1</button>`;
        if (startPage > 2) {
            paginationWrapper.innerHTML += `<span class="ellipsis">...</span>`;
        }
    }

    for (let i = startPage; i <= endPage; i++) {
        paginationWrapper.innerHTML += `<button class="page-btn ${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</button>`;
    }

    if (endPage < totalPages) {
        if (endPage < totalPages - 1) {
            paginationWrapper.innerHTML += `<span class="ellipsis">...</span>`;
        }
        paginationWrapper.innerHTML += `<button class="page-btn" data-page="${totalPages}">${totalPages}</button>`;
    }

    if (currentPage < totalPages) {
        paginationWrapper.innerHTML += `<button class="page-btn" data-page="${currentPage + 1}">Next</button>`;
    }

    document.querySelectorAll(".page-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            currentPage = parseInt(this.dataset.page);
            displayData();
            updatePagination();
        });
    });
}


    // Update the "Showing X to Y of Z entries" text
    function updateEntriesInfo(start, end, total) {
        entriesInfo.textContent = `Showing ${start} to ${end} of ${total} entries`;
    }

    // Handle entries dropdown change
    entriesSelect.addEventListener("change", function () {
        entriesPerPage = parseInt(this.value);
        currentPage = 1;
        updatePagination();
        displayData();
    });

    // Event listener for search input
    searchInput.addEventListener("input", searchSchool);

    fetchData();
});
