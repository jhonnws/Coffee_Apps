// Toggle Sidebar
const toggleBtn = document.querySelector(".toggle-btn");
const sidebar = document.querySelector("#sidebar");
const mainContent = document.querySelector(".main-content");

toggleBtn.addEventListener("click", function () {
    sidebar.classList.toggle("collapsed");
    mainContent.classList.toggle("collapsed");
});

// Switch Between Sections
const profileTab = document.querySelector("#profile-tab");
const settingsTab = document.querySelector("#settings-tab");
const profileSection = document.querySelector("#profile-section");
const settingsSection = document.querySelector("#settings-section");

profileTab.addEventListener("click", function (e) {
    e.preventDefault();
    profileSection.style.display = "block";
    settingsSection.style.display = "none";
});

settingsTab.addEventListener("click", function (e) {
    e.preventDefault();
    profileSection.style.display = "none";
    settingsSection.style.display = "block";
});
