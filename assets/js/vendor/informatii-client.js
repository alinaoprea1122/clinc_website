document.getElementById('customer-info-form').addEventListener('submit', function(event) {
    // Reset error messages
    document.querySelectorAll('.error').forEach(function(errorSpan) {
        errorSpan.textContent = '';
    });

    let isValid = true;

    // Validate Name
    const name = document.getElementById('name').value.trim();
    if (name === '') {
        document.getElementById('name-error').textContent = 'Numele este obligatoriu.';
        isValid = false;
    }

    // Validate Address
    const address = document.getElementById('address').value.trim();
    if (address === '') {
        document.getElementById('address-error').textContent = 'Adresa de livrare este obligatorie.';
        isValid = false;
    }

    // Validate Phone
    const phone = document.getElementById('phone').value.trim();
    const phonePattern = /^[0-9]{10}$/; // Example for Romanian phone number pattern
    if (!phonePattern.test(phone)) {
        document.getElementById('phone-error').textContent = 'Număr de telefon invalid. Introduceți 10 cifre.';
        isValid = false;
    }

    // Validate Email
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        document.getElementById('email-error').textContent = 'Adresă de email invalidă.';
        isValid = false;
    }

    // Validate Country
    const country = document.getElementById('country').value.trim();
    if (country === '') {
        document.getElementById('country-error').textContent = 'Țara este obligatorie.';
        isValid = false;
    }

    // Validate Region
    const region = document.getElementById('region').value.trim();
    if (region === '') {
        document.getElementById('region-error').textContent = 'Județul este obligatoriu.';
        isValid = false;
    }

    // Validate City
    const city = document.getElementById('city').value.trim();
    if (city === '') {
        document.getElementById('city-error').textContent = 'Orașul este obligatoriu.';
        isValid = false;
    }

    // Validate Postal Code
    const postalCode = document.getElementById('postal-code').value.trim();
    const postalCodePattern = /^[0-9]{6}$/; // Example for Romanian postal code pattern
    if (!postalCodePattern.test(postalCode)) {
        document.getElementById('postal-code-error').textContent = 'Cod poștal invalid. Introduceți 6 cifre.';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault(); // Prevent form submission if there are validation errors
    }
});
