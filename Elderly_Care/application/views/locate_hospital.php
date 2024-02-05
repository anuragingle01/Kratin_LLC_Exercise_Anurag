<!-- application/views/locate_hospital.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locate Nearby Hospital</title>
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

    <div id="map"></div>

    <script>
        const apiKey = 'AIzaSyByH7PoDePLb8Adsu7de3KdPfM8B4XALxw';

        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 14
            });

            // Use the Places API to find nearby hospitals
            const service = new google.maps.places.PlacesService(map);
            service.nearbySearch({
                location: map.getCenter(),
                radius: 5000, // Search within a 5km radius
                types: ['hospital']
            }, (results, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (const place of results) {
                        createMarker(place);
                    }
                }
            });
        }

        function createMarker(place) {
            const marker = new google.maps.Marker({
                map,
                position: place.geometry.location,
                title: place.name
            });

            const infowindow = new google.maps.InfoWindow({
                content: `<strong>${place.name}</strong><br>${place.vicinity}`
            });

            marker.addListener('click', () => {
                infowindow.open(map, marker);
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?= $apiKey ?>&callback=initMap&libraries=places"></script>
</body>
</html>
