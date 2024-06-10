@props(['profilerv'])

<nav>
    <div class="section-intro">
        <h2 class="section-intro-title">
            <img src="https://themes.getmotopress.com/luviana/wp-content/themes/luviana/images/header_default.png" alt="">
            Our flights
            <img src="https://themes.getmotopress.com/luviana/wp-content/themes/luviana/images/header_default.png" alt="">
        </h2>
    </div>

    <div>
        <style>
            .section-intro {
                height: 300px;
                background: linear-gradient(#00000031, rgba(0, 0, 0, 0.397)),
                    url("{{ url('storage/images/imgvol.png') }}");
                background-position: center;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
                background-attachment: fixed;
            }
            .section-intro-title {
                font-size: 4em;
                font-family: "MuseoModerno", cursive;
                color: #cccccc;
                position: relative;
                padding-top: 30px;
            }
            .section-intro-title img {
                position: absolute;
                left: 0;
                top: 0;
                left: 0;
                right: 0;
                margin: auto;
            }
        </style>

        <div class="tabs-pane-vol">
            <div class="radio-inputs-vol">
                <label class="radio" id="vol">
                    <input type="radio" name="radio">
                    <span class="name"><a href="/flights">Search for flights</a></span>
                </label>
            </div>

            <form method="GET" action="/search">
                <div class="bar-recherch_vol">
                    <div id="selector">
                        <div class="options">
                            <div class="col">
                                <div class="sb-custom-select">
                                    <select name="country" id="countryId" onchange="countryChange()">
                                        <option value="" selected disabled>Starting city</option>
                                        <option value="Marrakech">Marrakech</option>
                                        <option value="United States">États-Unis</option>
                                        <option value="China">Chine</option>
                                        <option value="Canada">Canada</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="sb-custom-select">
                                    <label id="stateLabel"></label>
                                    <select name="state" id="stateId">
                                        <option value="" selected disabled>Arrival city</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col">
                                <div class="sb-custom-select">
                                    <select name="type" id="type">
                                        <option value="" disabled selected>Class</option>
                                        <option value="economique">Economique</option>
                                        <option value="Double">Double</option>
                                        <option value="Suite">Suite</option>
                                    </select>
                                </div>
                            </div>

                            <div class="colt">
                                <input placeholder="Date of departure" name="date_depart" class="textbox-n" type="text" onfocus="(this.type='date')" id="indate" onchange="updatedate();">
                            </div>

                            <div class="colt">
                                <input placeholder="Arrival date" class="textbox-n" name="Ville_arrivee" type="text" onfocus="(this.type='date')" id="outdate" onchange="updatedate();">
                            </div>
                        </div>
                        <div class="searchv">
                            <button name="search" type="submit" id="search-vol" data-submit="...Sending"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>

<script>
    function countryChange() {
        var countryState = [
            ['United States', [
                ['', 'Arrival city'],
                ['New York', 'New York'],
                ['New Jersey', 'New Jersey'],
                ['Texas', 'Texas']
            ]],
            ['China', [
                ['', 'Arrival city'],
                ['Beijing', 'Beijing'],
                ['Tanger', 'Tanger'],
                ['Shanxi', 'Shanxi'],
            ]],
            ['Marrakech', [
                ['', 'Arrival city'],
                ['Rabat', 'Rabat'],
                ['Tanger', 'Tanger'],
                ['Fès', 'Fès'],
                ['Agadir', 'Agadir'],
                ['Ouarzazate', 'Ouarzazate'],
                ['Casablanca', 'Casablanca'],
            ]],
            ['Canada', [
                ['', 'Arrival city'],
                ['Marrakech', 'Marrakech'],
                ['Beijing', 'Rabat'],
                ['Tanger', 'Tanger'],
                ['Shanxi', 'Shanxi'],
            ]]
        ];

        var countryElement = document.getElementById('countryId');
        var stateElement = document.getElementById('stateId');
        var stateLabelElement = document.getElementById('stateLabel');

        if (countryElement && stateElement) {
            var listOfState = [['XX', 'None']];
            var currentCountry = countryElement.options[countryElement.selectedIndex].value;

            for (var i = 0; i < countryState.length; i++) {
                if (currentCountry == countryState[i][0]) {
                    listOfState = countryState[i][1];
                }
            }

            if (listOfState.length < 1) {
                stateElement.style.display = 'none';
                stateLabelElement.style.display = 'none';
            } else {
                stateElement.style.display = 'inline';
                stateLabelElement.style.display = 'inline';
            }

            var selectedState;
            for (var i = 0; i < stateElement.length; i++) {
                if (stateElement.options[i].selected === true) {
                    selectedState = stateElement.options[i].value;
                }
            }

            stateElement.options.length = 0;
            for (var i = 0; i < listOfState.length; i++) {
                stateElement.options[i] = new Option(listOfState[i][1], listOfState[i][0]);
                if (listOfState[i][0] == selectedState) {
                    stateElement.options[i].selected = true;
                }
            }
        }
    }

    function updatedate() {
        var indate = document.getElementById("indate").value;
        document.getElementById("outdate").setAttribute("min", indate);
        if (document.getElementById("outdate").value == indate) {
            document.getElementById("outdate").stepUp(1);
        }
    }
</script>
