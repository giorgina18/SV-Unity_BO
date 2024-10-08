document.addEventListener('DOMContentLoaded', function () {
    const closeBar = document.querySelector('.close-bar');
    const menuButton = document.querySelector('.menu-button');
    function showSidebar() {
        const sidebar = document.querySelector('.nav__list__sideBar')
        sidebar.style.display = 'flex'
    }
    function hideSidebar() {
        const sidebar = document.querySelector('.nav__list__sideBar')
        sidebar.style.display = 'none'
    }

    closeBar.addEventListener("click", () => {
        hideSidebar();
    });
    menuButton.addEventListener("click", () => {
        console.log("je moeder")
        showSidebar();
    });

});