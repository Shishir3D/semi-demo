@extends('layouts.frontend.app')
@section('head')
    {{-- for map leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- Include Axios Library -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
@section('content')
    <main class="md:columns-2 container mt-16 ">
        @include('components.location-card')
        <div class="max-w-md bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl p-4 mt-4 md:mb-28">
            <div class="rounded-xl overflow-hidden">
                <div id="map"></div>
            </div>
        </div>
        @include('components.wether-info')
        @include('components.plant-recommendation-form')
    </main>
@endsection


@section('styles')
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
@endsection

@section('scripts')
    <script>
        // OpenWeather API Key (replace with your own API key)
        const API_KEY = 'dd100e4c57ab74be4874fe96515cf5d1';

        // Initialize the map centered on Nepal
        var map = L.map('map').setView([28.3949, 84.1240], 7);
        var marker;

        // Load OpenStreetMap tiles
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // Event listener for map click
        map.on('click', function(e) {
            var lat = e.latlng.lat;
            var lng = e.latlng.lng;

            // Remove existing marker if present
            if (marker) {
                map.removeLayer(marker);
            }

            // Add a marker with popup
            marker = L.marker([lat, lng]).addTo(map)
                .bindPopup("Fetching address...")
                .openPopup();

            // Reverse geocoding using Axios to get address
            axios.get(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`)
                .then(function(response) {
                    const data = response.data;
                    const address = data.display_name || "No address found";

                    // Show and update the card with location details
                    document.getElementById('placeholderMessage').style.display = 'none';
                    document.getElementById('addressRow').style.display = 'block';
                    document.getElementById('latitudeRow').style.display = 'block';
                    document.getElementById('longitudeRow').style.display = 'block';

                    // Update the values
                    document.getElementById('address').textContent = address;
                    document.getElementById('latitude').textContent = lat.toFixed(5);
                    document.getElementById('longitude').textContent = lng.toFixed(5);

                    // Update the popup with address
                    marker.setPopupContent(
                        `📍 Address: ${address}<br>🌍 Latitude: ${lat.toFixed(5)}<br>🌐 Longitude: ${lng.toFixed(5)}`
                    ).openPopup();

                    // Fetch weather data using OpenWeather API
                    axios.get(
                            `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lng}&appid=${API_KEY}&units=metric`
                        )
                        .then(function(weatherResponse) {
                            const weatherData = weatherResponse.data;
                            const temp = weatherData.main.temp;
                            const weatherDesc = weatherData.weather[0].description;
                            const humidity = weatherData.main.humidity;

                            // Show weather info
                            document.getElementById('weatherInfo').style.display = 'block';
                            document.getElementById('temp').textContent = temp.toFixed(1);
                            document.getElementById('weatherDesc').textContent = weatherDesc;
                            document.getElementById('humidity').textContent = humidity;
                        })
                        .catch(function(error) {
                            console.error("Error fetching weather data:", error);
                        });
                })
                .catch(function(error) {
                    console.error("Error fetching address:", error);
                    marker.setPopupContent("Error fetching address.<br>Latitude: " + lat.toFixed(5) +
                        ", Longitude: " + lng.toFixed(5)).openPopup();
                });
        });
    </script>
@endsection
