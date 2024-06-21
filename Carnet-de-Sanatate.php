<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet de Sănătate pentru Animale de Companie</title>
    <link rel="stylesheet" href="assets/css/carnet-de-sanatate.css">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/paws.png">

</head>
<body>
<div class="container">
    <h1>Carnet de Sănătate pentru Animale de Companie</h1>

    <form id="pet-form">
        <h2>Adaugă/Editează Animal</h2>
        <input type="hidden" id="pet-id">

        <label for="pet-name">Nume:</label>
        <input type="text" id="pet-name" name="pet-name" required>

        <label for="species">Specie:</label>
        <input type="text" id="species" name="species" required>

        <label for="breed">Rasă:</label>
        <input type="text" id="breed" name="breed" required>

        <label for="dob">Data Nașterii:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="vaccinations">Vaccinări:</label>
        <textarea id="vaccinations" name="vaccinations"></textarea>

        <label for="medical-history">Istoric Medical:</label>
        <textarea id="medical-history" name="medical-history"></textarea>

        <label for="diseases">Boli:</label>
        <textarea id="diseases" name="diseases"></textarea>

        <label for="pet-photo">Poza:</label>
        <input type="file" id="pet-photo" name="pet-photo" accept="image/*">

        <button type="submit">Salvează</button>
    </form>

    <div id="pet-list">
        <h2>Lista Animale de Companie</h2>
        <ul id="pets"></ul>
    </div>
</div>
<script src="assets/js/vendor/carnet-de-sanatate.js"></script>
</body>
</html>
