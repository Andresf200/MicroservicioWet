var map = L.map('map').setView([.505, -0.04], 5);


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


var cities = [
    [40.712776, -74.005974], // Nueva York
    [28.538336, -81.379234], // Orlando
    [25.761681, -80.191788]  // Miami
  ];

  var cityMarkers = cities.map(function(city, index) {
    var marker = L.marker(city).addTo(map);

    // Agrega un popup al marcador de Miami
    if (index === 0) {
        marker.bindPopup("Nueva York").openPopup();
    }

    if (index === 1) {
        marker.bindPopup("Orlando").openPopup();
    }

    if (index === 2) {
      marker.bindPopup("Miami").openPopup();
    }

    return marker;
  });

  var group = L.featureGroup(cityMarkers).addTo(map);

  map.fitBounds(group.getBounds());
