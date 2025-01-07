/**
 * Table of contents
 * -----------------------------------
 * 1.FIXED HEADER
 */
(function ($) {
  "use strict";
  var PATH = {};

  /******************** FIXED HEADER ********************/
  PATH.HeaderFixed = function () {
    const varHeaderFix = window.pageYOffset >= 70,
      navbar = document.querySelector(".ta-header");
    if (varHeaderFix) {
      navbar.classList.add("ta-sticky-menu");
    } else {
      navbar.classList.remove("ta-sticky-menu");
    }
  };

  document.addEventListener("DOMContentLoaded", function () {
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    // Open the first item by default
    const firstHeader = accordionHeaders[0];
    if(firstHeader) {
      firstHeader.classList.add("active");
      firstHeader.nextElementSibling.classList.add("show");
    }

    // Toggle functionality for other items
    accordionHeaders.forEach((header, index) => {
      header.addEventListener("click", function () {
        const isOpen = header.classList.contains("active");

        // Close any open accordion items
        document.querySelectorAll(".accordion-header.active").forEach(activeHeader => {
          activeHeader.classList.remove("active");
          activeHeader.nextElementSibling.classList.remove("show");
        });

        // Toggle the clicked accordion item
        if (!isOpen) {
          header.classList.add("active");
          header.nextElementSibling.classList.add("show");
        }
      });
    });
  });

  // Get all tab buttons and tab content panes
  const tabs = document.querySelectorAll(".tabs");
  tabs.forEach((items) => {
    const tabButtons = items.querySelectorAll(".tab");
    const tabContentPanes = items.querySelectorAll(".tab-pane");

    // Add click event listeners to each tab button
    tabButtons.forEach((li, index) => {
      li.addEventListener("click", () => {
        // Remove 'tab-active' class from all tab buttons and tab panes
        tabButtons.forEach((btn) => btn.classList.remove("tab-active"));
        tabContentPanes.forEach((pane) => pane.classList.remove("tab-pane-active"));

        // Add 'tab-active' class to the clicked tab button and corresponding tab pane
        li.classList.add("tab-active");
        tabContentPanes[index].classList.add("tab-pane-active");
      });
    });
  })

  /******************** TOGGLE MENU ********************/
  const menuButton = document.getElementById("menu-button");
  const toggleMenu = document.getElementById("menu");

  menuButton.addEventListener("click", function () {
    toggleMenu.classList.toggle("menu-active");
  });
  /******************** NEW YEAR ********************/
  document.getElementById("currentYear").innerHTML = new Date().getFullYear();

  /******************** WINDOW ON SCROLL FUNCTION ********************/
  window.addEventListener("scroll", function () {
    PATH.HeaderFixed();
  });

  /******************** FANCYBOX ********************/
  document.addEventListener('DOMContentLoaded', function () {
    Fancybox.bind("[data-fancybox='gallery']", {
      Thumbs: {
        autoStart: true,
        type: "classic",
      },
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    const changelog = document.getElementById('changelog');
    const popup = document.getElementById('popup');
    const closePopup = document.getElementById('closePopup');

    // Show popup when changelog is clicked
    changelog.addEventListener('click', () => {
      popup.classList.remove('hidden');
    });

    // Close popup when close button is clicked
    closePopup.addEventListener('click', () => {
      popup.classList.add('hidden');
    });

    // Close popup when clicking outside the popup content
    popup.addEventListener('click', (e) => {
      if (e.target === popup) {
        popup.classList.add('hidden');
      }
    });
  });


})(jQuery);