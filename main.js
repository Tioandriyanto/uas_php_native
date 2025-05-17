document.addEventListener("DOMContentLoaded", function () {
    const tableBody = document.getElementById("menuData");
    const searchInput = document.getElementById("searchInput");
    const entriesSelect = document.getElementById("entries");
    const paginationWrapper = document.getElementById("pagination");
    const entriesInfo = document.getElementById("entriesInfo");
    const hamburgerBtn = document.getElementById("hamburgerBtn");
    const navbarMenu = document.querySelector(".navbar-menu");
    let allMenuData = [];
    let filteredData = [];
    let currentPage = 1;
    let entriesPerPage = 10;

    // Fetch data and initialize
    function fetchData() {
        fetch("get_data.php")
            .then((response) => response.json())
            .then((data) => {
                allMenuData = data;
                filteredData = allMenuData; // Initially show all data
                updatePagination();
                displayData();
            })
            .catch((error) => console.error("Error fetching data:", error));
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
            const photoCell = item.gambar
                ? `<img src="${item.gambar}" alt="Foto Menu" style="width: 100px; height: 100px; object-fit: cover;">`
                : "Foto tidak tersedia";

            const orderButton = `
                <button class="order-btn" onclick="orderMenu(${item.id_menu})">
                    Pesan
                </button>
            `;

            const row = `
                <tr>
                    <td>${startIndex + index + 1}</td>
                    <td>${item.nama_menu}</td>
                    <td>${item.kategori}</td>
                    <td>${item.harga}</td>
                    <td>${item.deskripsi || "-"}</td>
                    <td>${photoCell}</td>
                    <td>${orderButton}</td>
                </tr>
            `;
            tableBody.insertAdjacentHTML("beforeend", row);
        });

        updateEntriesInfo(startIndex + 1, endIndex, filteredData.length);
    }

    // Handle search functionality
    function searchMenu() {
        const searchText = searchInput.value.toLowerCase();
        filteredData = allMenuData.filter(item =>
            item.nama_menu.toLowerCase().includes(searchText)
        );
        currentPage = 1;
        updatePagination();
        displayData();
    }

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
    searchInput.addEventListener("input", searchMenu);

    fetchData();
});
