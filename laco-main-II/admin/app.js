$(document).ready(function () {
  // Sidebar Toggle
  const sidebarToggle = document.querySelector("#sidebar-toggle");
  sidebarToggle.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("collapsed");
  });

  document.querySelector(".theme-toggle").addEventListener("click", () => {
    toggleLocalStorage();
    toggleRootClass();
  });

  // Darkmode Toggle
  function toggleRootClass() {
    const current = document.documentElement.getAttribute("data-bs-theme");
    const inverted = current == "dark" ? "light" : "dark";
    document.documentElement.setAttribute("data-bs-theme", inverted);
  }

  function toggleLocalStorage() {
    if (isLight()) {
      localStorage.removeItem("light");
    } else {
      localStorage.setItem("light", "set");
    }
  }

  function isLight() {
    return localStorage.getItem("light");
  }

  if (isLight()) {
    toggleRootClass();
  }

  //Items toggle
  var tab_list = document.querySelectorAll(".sidebar-item[data-tc]");
  console.log(tab_list);

  var tab_items = document.querySelectorAll(".tab_item");

  tab_list.forEach(function (list) {
    list.addEventListener("click", function () {
      var tab_data = list.getAttribute("data-tc");
      console.log(tab_data);

      tab_items.forEach(function (item) {
        var tab_class = item.getAttribute("id");
        console.log(tab_class);

        tab_list.forEach(function (list) {
          list.classList.remove("active");
        });

        list.classList.add("active");

        if (tab_class.includes(tab_data)) {
          item.style.display = "flex";
        } else {
          item.style.display = "none";
        }
      });
    });
  });

  //time lamaw
  function updateTimeAndDate(elementId) {
    let time = document.getElementById(`current-time-${elementId}`);
    let date = document.getElementById(`current-date-${elementId}`);

    setInterval(() => {
      let now = new Date();
      time.innerHTML = now.toLocaleTimeString();
      date.textContent = formatDate(now);
    }, 200);
  }

  for (let i = 1; i <= 1; i++) {
    updateTimeAndDate(i);
  }

  /**
   * @param {Date} date
   */

  function formatDate(date) {
    const DAYS = [
      "Sunday",
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
    ];
    const MONTHS = [
      "January",
      "Febuary",
      "Marh",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];

    return `${
      DAYS[date.getDay()]
    }, ${MONTHS[date.getMonth()]} ${date.getDate()} ${date.getFullYear()}`;
  }
});

function resetWebsite() {
  // Add your reset logic here
  // For example, you can reload the page
  window.location.href = "http://localhost/laco-main/admin";
  console.log("lamaw");
}

function resetForm() {
  // Replace the URL with the correct path to your script
  var url = "reset.php";

  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      // Update the results table with the original unfiltered data
      document.getElementById("filteredResults").innerHTML = data;
    })
    .catch((error) => console.error(error));
}

$(document).ready(function () {
  document
    .getElementById("filterForm")
    .addEventListener("submit", function (e) {
      // Prevent the default form submission
      e.preventDefault();

      // Serialize form data
      var formData = new FormData(this);

      // Create a new URLSearchParams object and append form data
      var params = new URLSearchParams(formData);

      // Build the URL for the filter.php script with the serialized form data
      var url = "filter.php?" + params.toString();

      // Use Fetch API to fetch data from the server
      fetch(url)
        .then((response) => response.text())
        .then((data) => {
          // Update the results table with the filtered data
          document.getElementById("filteredResults").innerHTML = data;
        })
        .catch((error) => console.error(error));
    });
});

$(document).ready(function () {
  document
    .getElementById("resetButton")
    .addEventListener("click", function (e) {
      e.preventDefault();

      resetForm();
    });
});
