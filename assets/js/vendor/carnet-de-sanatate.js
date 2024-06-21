// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const petForm = document.getElementById('pet-form');
    const petList = document.getElementById('pets');
    const petPhotoInput = document.getElementById('pet-photo');

    petForm.addEventListener('submit', savePet);
    petList.addEventListener('click', handlePetAction);

    loadPets();

    function savePet(e) {
        e.preventDefault();

        const petId = document.getElementById('pet-id').value;
        const petName = document.getElementById('pet-name').value;
        const species = document.getElementById('species').value;
        const breed = document.getElementById('breed').value;
        const dob = document.getElementById('dob').value;
        const vaccinations = document.getElementById('vaccinations').value;
        const medicalHistory = document.getElementById('medical-history').value;
        const diseases = document.getElementById('diseases').value;
        const petPhoto = petPhotoInput.files[0];

        const reader = new FileReader();
        reader.onloadend = () => {
            const petPhotoURL = reader.result;

            const petData = {
                id: petId ? petId : new Date().getTime(),
                name: petName,
                species: species,
                breed: breed,
                dob: dob,
                vaccinations: vaccinations,
                medicalHistory: medicalHistory,
                diseases: diseases,
                photo: petPhotoURL
            };

            let pets = JSON.parse(localStorage.getItem('pets')) || [];

            if (petId) {
                const index = pets.findIndex(pet => pet.id == petId);
                pets[index] = petData;
            } else {
                pets.push(petData);
            }

            localStorage.setItem('pets', JSON.stringify(pets));

            resetForm();
            loadPets();
        };

        if (petPhoto) {
            reader.readAsDataURL(petPhoto);
        } else {
            reader.onloadend();
        }
    }

    function loadPets() {
        const pets = JSON.parse(localStorage.getItem('pets')) || [];
        petList.innerHTML = '';

        pets.forEach(pet => {
            const li = document.createElement('li');
            li.innerHTML = `
                ${pet.photo ? `<img src="${pet.photo}" alt="${pet.name}">` : ''}
                <div>
                    <strong>${pet.name}</strong> - ${pet.species} - ${pet.breed} - ${new Date(pet.dob).toLocaleDateString()}<br>
                    <em>Vaccinări:</em> ${pet.vaccinations}<br>
                    <em>Istoric Medical:</em> ${pet.medicalHistory}<br>
                    <em>Boli:</em> ${pet.diseases}<br>
                    <button class="edit" data-id="${pet.id}">Editează</button>
                    <button class="delete" data-id="${pet.id}">Șterge</button>
                </div>
            `;
            petList.appendChild(li);
        });
    }

    function handlePetAction(e) {
        if (e.target.classList.contains('edit')) {
            editPet(e.target.dataset.id);
        } else if (e.target.classList.contains('delete')) {
            deletePet(e.target.dataset.id);
        }
    }

    function deletePet(id) {
        let pets = JSON.parse(localStorage.getItem('pets')) || [];
        pets = pets.filter(pet => pet.id != id);
        localStorage.setItem('pets', JSON.stringify(pets));
        loadPets();
    }

    function editPet(id) {
        const pets = JSON.parse(localStorage.getItem('pets')) || [];
        const pet = pets.find(pet => pet.id == id);

        document.getElementById('pet-id').value = pet.id;
        document.getElementById('pet-name').value = pet.name;
        document.getElementById('species').value = pet.species;
        document.getElementById('breed').value = pet.breed;
        document.getElementById('dob').value = pet.dob;
        document.getElementById('vaccinations').value = pet.vaccinations;
        document.getElementById('medical-history').value = pet.medicalHistory;
        document.getElementById('diseases').value = pet.diseases;

        if (pet.photo) {
            const imgPreview = document.createElement('img');
            imgPreview.src = pet.photo;
            imgPreview.alt = pet.name;
            imgPreview.style.maxWidth = '100px';
            imgPreview.style.marginTop = '10px';
            petPhotoInput.parentNode.insertBefore(imgPreview, petPhotoInput.nextSibling);
        }
    }

    function resetForm() {
        document.getElementById('pet-id').value = '';
        document.getElementById('pet-form').reset();
        const imgPreview = document.querySelector('#pet-photo + img');
        if (imgPreview) {
            imgPreview.remove();
        }
    }
});

function loadPets() {
    const pets = JSON.parse(localStorage.getItem('pets')) || [];
    const petList = document.getElementById('pets');
    petList.innerHTML = '';

    pets.forEach(pet => {
        const li = document.createElement('li');
        li.innerHTML = `
            ${pet.photo ? `<img src="${pet.photo}" alt="${pet.name}">` : ''}
            <div>
                <strong>${pet.name}</strong> - ${pet.species} - ${pet.breed} - ${new Date(pet.dob).toLocaleDateString()}<br>
                <em>Vaccinări:</em> ${pet.vaccinations}<br>
                <em>Istoric Medical:</em> ${pet.medicalHistory}<br>
                <em>Boli:</em> ${pet.diseases}<br>
                <button class="edit" data-id="${pet.id}">Editează</button>
                <button class="delete" data-id="${pet.id}">Șterge</button>
            </div>
        `;
        petList.appendChild(li);
    });
}
