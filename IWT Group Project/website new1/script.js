document.addEventListener("DOMContentLoaded", function() {
  // Function to clear the summary table
  function clearSummaryTable() {
      // Get the table element
      var table = document.getElementById("summary-table");
      // Remove all rows except the header
      while (table.rows.length > 1) {
          table.deleteRow(1);
      }
  }

  // Function to handle card selection
  function handleCardSelection(cardImage) {
      if (selectedCardImage) {
          selectedCardImage.classList.remove('selected');  // Deselect previously selected card
      }
      selectedCardImage = cardImage;
      cardImage.classList.add('selected');  // Visually indicate the selected card
  }

  const paymentCardBtns = document.querySelectorAll('.payment-card-btn');

  paymentCardBtns.forEach(button => {
      button.addEventListener('click', function() {
          // Remove active class from all buttons
          paymentCardBtns.forEach(btn => btn.classList.remove('active'));
          // Add active class to clicked button
          this.classList.add('active');
      });
  });

  const cardImages = document.querySelectorAll('.card-image');
  let selectedCardImage = null;  // Track the currently selected card image

  cardImages.forEach(cardImage => {
      cardImage.addEventListener('click', (event) => {
          // Get the clicked card image's ID (e.g., card-type-visa)
          const selectedCardTypeId = event.target.id;

          // Remove background color from any previously selected card (if any)
          if (selectedCardImage) {
              selectedCardImage.style.backgroundColor = '';  // Reset background
          }

          // Add background color to the clicked card
          event.target.style.backgroundColor = '#eee';

          // Update the selectedCardImage variable
          selectedCardImage = event.target;

          // You can use the selectedCardTypeId for further processing (e.g., display specific logo, validate card number based on card type)
      });
  });

  const cardnumber = document.getElementById('cardnumber');
  const cardname = document.getElementById('cardname');
  const expmonth = document.getElementById('expmonth');
  const expyear = document.getElementById('expyear');
  const cvv = document.getElementById('cvv');
  const form = document.getElementById('payment-form');

  form.addEventListener('submit', (event) => {
      event.preventDefault();  // Prevent default form submission

      if (!selectedCardImage) {
          showErrorMessage("Please select a payment card.");
          return;  // Exit the function if no card is selected
      }

      let errorMessage = "";

      // Validate card number (basic example, you can improve this for specific card types)
      if (cardnumber.value.length !== 16 || isNaN(cardnumber.value)) {
          errorMessage += "Invalid Card Number (should be 16 digits).\n";
      }

      // Validate name on card (basic example, allow some special characters)
      const nameRegex = /^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/;
      if (!nameRegex.test(cardname.value)) {
          errorMessage += "Invalid Name on Card (letters and spaces only).\n";
      }

      // Validate expiry month
      const expMonthValue = parseInt(expmonth.value);
      if (expMonthValue < 1 || expMonthValue > 12) {
          errorMessage += "Invalid Expiry Month (must be between 1 and 12).\n";
      }

      // Validate expiry year (check if selected year is in the future)
      const expYearValue = parseInt(expyear.value);
      if (expYearValue < new Date().getFullYear()) {
          errorMessage += "Invalid Expiry Year (must be in the future).\n";
      }

      // Validate CVV (ensure only 3 numbers)
      if (cvv.value.length !== 3 || isNaN(cvv.value)) {
          errorMessage += "Invalid CVV (must be 3 digits).\n";
      }

      // Display any error messages or proceed with form submission (implement form processing)
      if (errorMessage) {
          showErrorMessage(errorMessage);
      } else {
          // Form validation successful, process form data (implementation depends on your application)
          console.log('Form submitted successfully!');
          showSuccessMessage('Payment processed successfully!');
          // Clear summary table
          clearSummaryTable();
          // You can add additional logic here, like sending form data to a server using fetch API or AJAX
      }
  });

  // Clear the summary table after success message
  function clearSummaryTable() {
      // Get the table element
      var table = document.getElementById("summary-table");
      // Remove all rows except the header
      while (table.rows.length > 1) {
          table.deleteRow(1);
      }
  }

  // Function to display an error message
  function showErrorMessage(message) {
      alert(message);  // You can replace this with a more user-friendly error display mechanism (e.g., modal window)
  }
  // Function to display a success message
  function showSuccessMessage(message) {
      alert(message);  // You can replace this with a more user-friendly success message and visual indication (e.g., modal window, green success banner)
      form.reset();
      window.location.href = "view_indoor_package.php";
  }
});
