@extends('layouts.dashboard')
@section('title', 'Mascotas Perdidas')
@section('content')
    <h1 class="w-full text-center text-3xl font-bold mb-4">Mascotas perdidas</h1>
    <canvas id="petsLostMonth"></canvas>
    <div id="cards" class="flex flex-wrap w-full align-center justify-center">
        <x-card-dashboard title="Mascotas perdidas" image="" description="" chart="LFChart"/>
        <x-card-dashboard title="País que encuentra menos mascotas" image="fi" description="" chart="none"/>
        <x-card-dashboard title="País que encuentra mas mascotas" image="fi" description="" chart="none"/>
        <x-card-dashboard title="País que empieza a encontrar mas mascotas" image="fi" description="" chart="none"/>
        <x-card-dashboard title="País que empieza a encontrar menos mascotas" image="fi" description="" chart="none"/>
    </div>
@endsection
@section('script')
    <script>
        const lostpets = JSON.parse('{!! $pets !!}').filter(pet => pet.current_state == "Perdido");
        const foundedPets = JSON.parse('{!! $pets !!}').filter(pet => pet.current_state == "Encontrado");
        const ctx = document.getElementById('LFChart');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Perdidas', 'Encontradas'],
                datasets: [{
                    label: 'Número de Mascotas',
                    data: [lostpets.length, foundedPets.length],
                    borderWidth: 1
                }],
            },
        });
    </script>
    <script>
        const countries = [
            { name: "Afganistán", code: "af" },
            { name: "Albania", code: "al" },
            { name: "Alemania", code: "de" },
            { name: "Andorra", code: "ad" },
            { name: "Angola", code: "ao" },
            { name: "Antigua y Barbuda", code: "ag" },
            { name: "Arabia Saudita", code: "sa" },
            { name: "Argelia", code: "dz" },
            { name: "Argentina", code: "ar" },
            { name: "Armenia", code: "am" },
            { name: "Australia", code: "au" },
            { name: "Austria", code: "at" },
            { name: "Azerbaiyán", code: "az" },
            { name: "Bahamas", code: "bs" },
            { name: "Bangladés", code: "bd" },
            { name: "Barbados", code: "bb" },
            { name: "Baréin", code: "bh" },
            { name: "Bélgica", code: "be" },
            { name: "Belice", code: "bz" },
            { name: "Benín", code: "bj" },
            { name: "Bielorrusia", code: "by" },
            { name: "Birmania", code: "mm" },
            { name: "Bolivia", code: "bo" },
            { name: "Bosnia y Herzegovina", code: "ba" },
            { name: "Botsuana", code: "bw" },
            { name: "Brasil", code: "br" },
            { name: "Brunéi", code: "bn" },
            { name: "Bulgaria", code: "bg" },
            { name: "Burkina Faso", code: "bf" },
            { name: "Burundi", code: "bi" },
            { name: "Bután", code: "bt" },
            { name: "Cabo Verde", code: "cv" },
            { name: "Camboya", code: "kh" },
            { name: "Camerún", code: "cm" },
            { name: "Canadá", code: "ca" },
            { name: "Catar", code: "qa" },
            { name: "Chad", code: "td" },
            { name: "Chile", code: "cl" },
            { name: "China", code: "cn" },
            { name: "Chipre", code: "cy" },
            { name: "Ciudad del Vaticano", code: "va" },
            { name: "Colombia", code: "co" },
            { name: "Comoras", code: "km" },
            { name: "Corea del Norte", code: "kp" },
            { name: "Corea del Sur", code: "kr" },
            { name: "Costa de Marfil", code: "ci" },
            { name: "Costa Rica", code: "cr" },
            { name: "Croacia", code: "hr" },
            { name: "Cuba", code: "cu" },
            { name: "Dinamarca", code: "dk" },
            { name: "Dominica", code: "dm" },
            { name: "Ecuador", code: "ec" },
            { name: "Egipto", code: "eg" },
            { name: "El Salvador", code: "sv" },
            { name: "Emiratos Árabes Unidos", code: "ae" },
            { name: "Eritrea", code: "er" },
            { name: "Eslovaquia", code: "sk" },
            { name: "Eslovenia", code: "si" },
            { name: "España", code: "es" },
            { name: "Estados Unidos", code: "us" },
            { name: "Estonia", code: "ee" },
            { name: "Etiopía", code: "et" },
            { name: "Filipinas", code: "ph" },
            { name: "Finlandia", code: "fi" },
            { name: "Fiyi", code: "fj" },
            { name: "Francia", code: "fr" },
            { name: "Gabón", code: "ga" },
            { name: "Gambia", code: "gm" },
            { name: "Georgia", code: "ge" },
            { name: "Ghana", code: "gh" },
            { name: "Granada", code: "gd" },
            { name: "Grecia", code: "gr" },
            { name: "Guatemala", code: "gt" },
            { name: "Guyana", code: "gy" },
            { name: "Guinea", code: "gn" },
            { name: "Guinea-Bisáu", code: "gw" },
            { name: "Guinea Ecuatorial", code: "gq" },
            { name: "Haití", code: "ht" },
            { name: "Honduras", code: "hn" },
            { name: "Hungría", code: "hu" },
            { name: "India", code: "in" },
            { name: "Indonesia", code: "id" },
            { name: "Irak", code: "iq" },
            { name: "Irán", code: "ir" },
            { name: "Irlanda", code: "ie" },
            { name: "Islandia", code: "is" },
            { name: "Islas Marshall", code: "mh" },
            { name: "Islas Salomón", code: "sb" },
            { name: "Israel", code: "il" },
            { name: "Italia", code: "it" },
            { name: "Jamaica", code: "jm" },
            { name: "Japón", code: "jp" },
            { name: "Jordania", code: "jo" },
            { name: "Kazajistán", code: "kz" },
            { name: "Kenia", code: "ke" },
            { name: "Kirguistán", code: "kg" },
            { name: "Kiribati", code: "ki" },
            { name: "Kuwait", code: "kw" },
            { name: "Laos", code: "la" },
            { name: "Lesoto", code: "ls" },
            { name: "Letonia", code: "lv" },
            { name: "Líbano", code: "lb" },
            { name: "Liberia", code: "lr" },
            { name: "Libia", code: "ly" },
            { name: "Liechtenstein", code: "li" },
            { name: "Lituania", code: "lt" },
            { name: "Luxemburgo", code: "lu" },
            { name: "Madagascar", code: "mg" },
            { name: "Malasia", code: "my" },
            { name: "Malaui", code: "mw" },
            { name: "Maldivas", code: "mv" },
            { name: "Malí", code: "ml" },
            { name: "Malta", code: "mt" },
            { name: "Marruecos", code: "ma" },
            { name: "Mauricio", code: "mu" },
            { name: "Mauritania", code: "mr" },
            { name: "México", code: "mx" },
            { name: "Micronesia", code: "fm" },
            { name: "Moldavia", code: "md" },
            { name: "Mónaco", code: "mc" },
            { name: "Mongolia", code: "mn" },
            { name: "Montenegro", code: "me" },
            { name: "Mozambique", code: "mz" },
            { name: "Namibia", code: "na" },
            { name: "Nauru", code: "nr" },
            { name: "Nepal", code: "np" },
            { name: "Nicaragua", code: "ni" },
            { name: "Níger", code: "ne" },
            { name: "Nigeria", code: "ng" },
            { name: "Noruega", code: "no" },
            { name: "Nueva Zelanda", code: "nz" },
            { name: "Omán", code: "om" },
            { name: "Países Bajos", code: "nl" },
            { name: "Pakistán", code: "pk" },
            { name: "Palaos", code: "pw" },
            { name: "Panamá", code: "pa" },
            { name: "Papúa Nueva Guinea", code: "pg" },
            { name: "Paraguay", code: "py" },
            { name: "Perú", code: "pe" },
            { name: "Polonia", code: "pl" },
            { name: "Portugal", code: "pt" },
            { name: "Reino Unido", code: "gb" },
            { name: "República Centroafricana", code: "cf" },
            { name: "República Checa", code: "cz" },
            { name: "República de Macedonia", code: "mk" },
            { name: "República del Congo", code: "cg" },
            { name: "República Democrática del Congo", code: "cd" },
            { name: "República Dominicana", code: "do" },
            { name: "República Sudafricana", code: "za" },
            { name: "Ruanda", code: "rw" },
            { name: "Rumania", code: "ro" },
            { name: "Rusia", code: "ru" },
            { name: "Samoa", code: "ws" },
            { name: "San Cristóbal y Nieves", code: "kn" },
            { name: "San Marino", code: "sm" },
            { name: "San Vicente y las Granadinas", code: "vc" },
            { name: "Santa Lucía", code: "lc" },
            { name: "Santo Tomé y Príncipe", code: "st" },
            { name: "Senegal", code: "sn" },
            { name: "Serbia", code: "rs" },
            { name: "Seychelles", code: "sc" },
            { name: "Sierra Leona", code: "sl" },
            { name: "Singapur", code: "sg" },
            { name: "Siria", code: "sy" },
            { name: "Somalia", code: "so" },
            { name: "Sri Lanka", code: "lk" },
            { name: "Suazilandia", code: "sz" },
            { name: "Sudán", code: "sd" },
            { name: "Sudán del Sur", code: "ss" },
            { name: "Suecia", code: "se" },
            { name: "Suiza", code: "ch" },
            { name: "Surinam", code: "sr" },
            { name: "Tailandia", code: "th" },
            { name: "Tanzania", code: "tz" },
            { name: "Tayikistán", code: "tj" },
            { name: "Timor Oriental", code: "tl" },
            { name: "Togo", code: "tg" },
            { name: "Tonga", code: "to" },
            { name: "Trinidad y Tobago", code: "tt" },
            { name: "Túnez", code: "tn" },
            { name: "Turkmenistán", code: "tm" },
            { name: "Turquía", code: "tr" },
            { name: "Tuvalu", code: "tv" },
            { name: "Ucrania", code: "ua" },
            { name: "Uganda", code: "ug" },
            { name: "Uruguay", code: "uy" },
            { name: "Uzbekistán", code: "uz" },
            { name: "Vanuatu", code: "vu" },
            { name: "Venezuela", code: "ve" },
            { name: "Vietnam", code: "vn" },
            { name: "Yemen", code: "ye" },
            { name: "Yibuti", code: "dj" },
            { name: "Zambia", code: "zm" },
            { name: "Zimbabue", code: "zw" },
        ];
        const countryL = '{!! $finalLeastCountry !!}';
        const countryM = '{!! $finalMostCountry !!}';
        const countryLeast = document.querySelector('#cards > div:nth-child(2) > div:nth-child(2) > i');
        const countryMost = document.querySelector('#cards > div:nth-child(3) > div:nth-child(2) > i');
        const countryBeginM = document.querySelector('#cards > div:nth-child(4) > div:nth-child(2) > i');
        const countryBeginL = document.querySelector('#cards > div:nth-child(5) > div:nth-child(2) > i');
        const countryLeastName = document.querySelector('#cards > div:nth-child(2) > div.flex.flex-col.justify-center.align-center > p');
        const countryMostName = document.querySelector('#cards > div:nth-child(3) > div.flex.flex-col.justify-center.align-center > p');
        const countryBeginNameM = document.querySelector('#cards > div:nth-child(4) > div.flex.flex-col.justify-center.align-center > p');
        const countryBeginNameL = document.querySelector('#cards > div:nth-child(5) > div.flex.flex-col.justify-center.align-center > p');
        const countryLFlag = countries.filter(country => country.name === countryL)[0].code;
        const countryMFlag = countries.filter(country => country.name === countryM)[0].code;
        countryLeastName.innerText = countryL;
        countryMostName.innerText = countryM;
        countryLeast.classList.add(`fi-${countryLFlag}`);
        countryMost.classList.add(`fi-${countryMFlag}`);
    </script>
    <script>
        const pets = JSON.parse('{!! $pets !!}');
        const petsGroupedByMonth = {};
        pets.forEach(pet => {
            const date = new Date(pet.updated_at);
            const month = date.getMonth() + 1;
            (petsGroupedByMonth[month]) ? petsGroupedByMonth[month].push(pet) : petsGroupedByMonth[month] = [pet];
        });
        const petsGroupedByMonthArray = Object.keys(petsGroupedByMonth).map(key => petsGroupedByMonth[key]);
        const lostMonth = [];
        petsGroupedByMonthArray.forEach(month => {
            let i = 0;
            month.forEach(pet => {
                if (pet.current_state === "Perdido") {
                    i++;
                }
            });
            lostMonth.push(i);
        });
        const data = {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Mascotas perdidas por mes',
                data: lostMonth,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };
        new Chart(document.getElementById('petsLostMonth'), config);
        const countryBeginLeast = countries.filter(country => country.name === petsGroupedByMonthArray[11][1].location)[0].code;
        const countryBeginMost = countries.filter(country => country.name === petsGroupedByMonthArray[4][1].location)[0].code;
        countryBeginL.classList.add(`fi-${countryBeginLeast}`);
        countryBeginM.classList.add(`fi-${countryBeginMost}`);
        countryBeginNameL.innerText = petsGroupedByMonthArray[11][1].location;
        countryBeginNameM.innerText = petsGroupedByMonthArray[4][1].location;
    </script>
@endsection
