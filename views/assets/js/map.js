
    // Initialize map centered on India
    var map = L.map('map').setView([22.9734, 78.6569], 5);

    // Carto Voyager tiles (closest to Google Maps look, English labels)
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
      subdomains: 'abcd',
      maxZoom: 20
    }).addTo(map);

    // City markers
    var cities = [
      { coords: [19.0760, 72.8777], name: "Mumbai, Maharashtra" },
      { coords: [12.9716, 77.5946], name: "Bangalore" },
      { coords: [13.0827, 80.2707], name: "Chennai" },
      { coords: [28.7041, 77.1025], name: "Delhi" },
      { coords: [23.0225, 72.5714], name: "Ahmedabad" }
    ];

    cities.forEach(city => {
      L.marker(city.coords).addTo(map)
        .bindPopup(`<b>${city.name}</b>`);
    });
