<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locate Nearby Hospital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 0;
            font-size: 2em;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #34495e;
        }

        nav a {
            text-decoration: none;
            color: #ecf0f1;
            font-size: 1.2em;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #3498db;
        }

        #map {
            height: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Locate Nearby Hospital</h1>
    </header>

    <nav>
        <a href="<?= base_url('home'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
    </nav>
    <body>
    <div id="map" style="height: 500px;"></div>

    <script>
        var map = L.map('map').setView([51.505, -0.09], 13); // Initialize map with a default location

        // Add OpenStreetMap tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Get user's location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var userLocation = [position.coords.latitude, position.coords.longitude];

                // Move map to user's location
                map.setView(userLocation, 13);

                // Add marker for user's location
                L.marker(userLocation).addTo(map)
                    .bindPopup('Your location').openPopup();

                // Query hospitals near user's location using Overpass API
                var query = '[out:json];node(around:' + 5000 + ',' + userLocation[0] + ',' + userLocation[1] + ')[amenity=hospital];out;';
                fetch('https://overpass-api.de/api/interpreter?data=' + encodeURIComponent(query))
                    .then(response => response.json())
                    .then(data => {
                        // Loop through results and add markers for hospitals
                        data.elements.forEach(element => {
                            var hospitalLocation = [element.lat, element.lon];
                            L.marker(hospitalLocation).addTo(map)
                                .bindPopup('<b>' + element.tags.name + '</b><br>' + element.tags.addr_street + '<br>' + element.tags.addr_city);
                        });
                    });
            });
        }
    </script>
</body>
</html>