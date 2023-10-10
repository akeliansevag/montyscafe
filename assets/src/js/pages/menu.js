(function () {
    const scrollContainer = document.querySelector("#menu-items-container");
    const targetItem = document.querySelector("#menu-items-container li a.active").parentElement;
    // Calculate the scrollLeft position to the target div
    var scrollLeft = targetItem.offsetLeft;

    // Scroll to the target div
    scrollContainer.scrollLeft = scrollLeft;
})();