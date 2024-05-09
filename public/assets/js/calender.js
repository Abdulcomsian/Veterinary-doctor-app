// FlatPicker Calender
document.addEventListener("DOMContentLoaded", function () {
  var selectedDatesContainer = document.getElementById("selected-dates");

  var options = {
    mode: "single", // Allow selecting a single date
    dateFormat: "Y-m-d", // Format for displaying dates
    inline: true, // Show the calendar inline
    onChange: function (selectedDates, dateStr, instance) {
      // Update the selected dates container with the selected dates
      selectedDatesContainer.textContent = "Selected Dates: " + dateStr;
    },
  };

  // Initialize Flatpickr on the container div
  flatpickr("#calendar-container", options);
});
