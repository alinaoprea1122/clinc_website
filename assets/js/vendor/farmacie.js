let siglaCos = document.querySelector('#sigla-cos');
let CosDeCumparaturi = document.querySelector('.cos-de-cumparaturi');
let inchideCos = document.querySelector('#inchide-cos');

siglaCos.onclick = () => {
    CosDeCumparaturi.classList.add("active");
};

inchideCos.onclick = () => {
    CosDeCumparaturi.classList.remove("active");
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    var stergeCosButon = document.getElementsByClassName('sterge-cos');
    for (var i = 0; i < stergeCosButon.length; i++) {
        var buton = stergeCosButon[i];
        buton.addEventListener('click', stergeProduseCos);
    }

    var cantitateIntrodusa = document.getElementsByClassName('cantitate-cos');
    for (var i = 0; i < cantitateIntrodusa.length; i++) {
        var introducere = cantitateIntrodusa[i];
        introducere.addEventListener('change', cantitateschimbata);
    }

    var adaugacos = document.getElementsByClassName('adauga-cos');
    for (var i = 0; i < adaugacos.length; i++) {
        var buton = adaugacos[i];
        buton.addEventListener('click', adaugacosapasat);
    }

    document
        .getElementsByClassName('buton-cumpara')[0]
        .addEventListener('click', butonulcumparaapasat);
}

function butonulcumparaapasat() {
    alert('Comanda este plasata !');
    var continutcos = document.getElementsByClassName('continut-cos')[0];
    while (continutcos.hasChildNodes()) {
        continutcos.removeChild(continutcos.firstChild);
    }
    actualizeazaTotal();
}

function stergeProduseCos(event) {
    var ButonApasat = event.target;
    ButonApasat.parentElement.remove();
    actualizeazaTotal();
}

function cantitateschimbata(event) {
    var introducere = event.target;
    if (isNaN(introducere.value) || introducere.value <= 0) {
        introducere.value = 1;
    }
    actualizeazaTotal();
}

function adaugacosapasat(event) {
    var buton = event.target;
    var cumparaproduse = buton.parentElement;
    var titlu = cumparaproduse.getElementsByClassName('titlu-produs')[0].innerText;
    var pret = cumparaproduse.getElementsByClassName('pret')[0].innerText;
    var produsImg = cumparaproduse.getElementsByClassName('imagine-produs')[0].src;
    adaugaprodusulincos(titlu, pret, produsImg);
    actualizeazaTotal();
}

function adaugaprodusulincos(titlu, pret, produsImg) {
    var sectiunecoscumparaturi = document.createElement('div');
    sectiunecoscumparaturi.classList.add('sectiune-cos');
    var produsecos = document.getElementsByClassName('continut-cos')[0];
    var numeprodusecos = produsecos.getElementsByClassName('titlu-produs-cos');
    for (var i = 0; i < numeprodusecos.length; i++) {
        if (numeprodusecos[i].innerText === titlu) {
            alert('Deja ai adaugat acest produs in cos');
            return;
        }
    }
    var sectiunecontinutcos = `
        <img src="${produsImg}" alt="" class="imagine-cos">
        <div class="sectiune-detalii">
            <div class="titlu-produs-cos">${titlu}</div>
            <div class="pret-cos">${pret}</div>
            <input type="number" value="1" class="cantitate-cos">
        </div>
        <i class='bx bx-trash sterge-cos'></i>
    `;
    sectiunecoscumparaturi.innerHTML = sectiunecontinutcos;
    produsecos.append(sectiunecoscumparaturi);
    sectiunecoscumparaturi
        .getElementsByClassName('sterge-cos')[0]
        .addEventListener('click', stergeProduseCos);
    sectiunecoscumparaturi
        .getElementsByClassName('cantitate-cos')[0]
        .addEventListener('change', cantitateschimbata);
}

function actualizeazaTotal() {
    var continutCos = document.getElementsByClassName('continut-cos')[0];
    var sectiuneCos = continutCos.getElementsByClassName('sectiune-cos');
    var total = 0;
    for (var i = 0; i < sectiuneCos.length; i++) {
        var osectiuneCos = sectiuneCos[i];
        var pretProdus = osectiuneCos.getElementsByClassName('pret-cos')[0];
        var cantitateProdus = osectiuneCos.getElementsByClassName('cantitate-cos')[0];
        if (pretProdus && cantitateProdus) {
            var pret = parseFloat(pretProdus.innerText.replace(" RON", ""));
            var cantitate = cantitateProdus.value;
            total = total + (pret * cantitate);
        }
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('pret-total')[0].innerText = total + ' RON';
}
