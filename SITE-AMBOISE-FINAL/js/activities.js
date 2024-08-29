
document.addEventListener("DOMContentLoaded", function () {
    
    
    const activities = [
        {
            elementId: "loire-terroir",
            coords: [47.429123770786276, 0.9395354857658118], 
            title: "Loire & Terroir",
            imageUrl: "./img/loire-a-velo.jpg",
            itineraryUrl: "https://www.google.fr/maps/dir//47.4294214,0.9393686/@47.4286054,0.9406583,16.5z/data=!4m2!4m1!3e3?entry=ttu",
            gpxUrl: "/gpx/loire-terroir.gpx"
        },
        {
            elementId: "la-voie-royale",
            coords: [47.41245536675158, 0.980743363624729], 
            title: "La voie royale",
            imageUrl: "./img/velo-3.jpg",
            itineraryUrl: "https://www.google.fr/maps/dir//47.4124737,0.9806796/@47.4124786,0.9801692,19.75z/data=!4m2!4m1!3e3?entry=ttu",
            gpxUrl: "/gpx/voie-royale.gpx"
        },
        {
            elementId: "au-coeur-de-la-cite",
            coords: [47.4122, 0.9823],
            title: "Au cœur de la cité",
            imageUrl: "./img/centre-ville-sombre.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4122,0.9823"
        },
        {
            elementId: "sur-les-terres-royales",
            coords: [47.4171, 0.9768], 
            title: "Sur les terres royales",
            imageUrl: "./img/randonnees-pedestre-val-amboise.png",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4171,0.9768"
        },
        {
            elementId: "clic-lac-parc",
            coords: [47.4077, 0.9831], 
            title: "Clic'Lac Parc Accrobranche",
            imageUrl: "./img/accrobranche.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4077,0.9831"
        },
        {
            elementId: "balloon-revolution",
            coords: [47.4129, 0.9883], 
            title: "Balloon Revolution",
            imageUrl: "./img/montgolfiere.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4129,0.9883"
        }
    ];

    const map = L.map('map-activity').setView([47.4136, 0.9824], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

      // Icône par défaut pour les marqueurs
      const defaultIcon = L.icon({
        iconUrl: './marker/location-dot-solid.svg',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    // Icône pour le survol
    const highlightedIcon = L.icon({
        iconUrl: './marker/location-dot-solid-hover.svg',
        iconSize: [30, 45],
        iconAnchor: [15, 45],
        popupAnchor: [1, -34],
        shadowSize: [45, 45]
    });

    const gpxLayerGroup = L.layerGroup().addTo(map); // Crée un groupe de calques pour les traces GPX

    const markers = [];

    activities.forEach((activity) => {
        const marker = L.marker(activity.coords, { icon: defaultIcon }).addTo(map);

        marker.bindPopup(`
            <div>
                <h3>${activity.title}</h3>
                <img src="${activity.imageUrl}" alt="${activity.title}" style="width:100%; height:auto; margin-top:10px;">
                <a href="${activity.itineraryUrl}" target="_blank">
                    <button style="margin-top:10px; padding: 8px 12px; background-color: #C7AA67; color: white; border: none; border-radius: 2px; cursor: pointer;">
                        Itinéraire
                    </button>
                </a>
            </div>
        `);

        

        const activityCard = document.getElementById(activity.elementId);

        activityCard.addEventListener("mouseover", () => {
            marker.setIcon(highlightedIcon);
        });

        activityCard.addEventListener("mouseout", () => {
            marker.setIcon(defaultIcon);
        });

        activityCard.addEventListener("click", () => {
            map.setView(activity.coords, 15, {
                animate: true,
                pan: { duration: 0.5 }
            });
            marker.openPopup();

            markers.push({ marker, category: activity.elementId });

            // Effacer toute trace GPX précédente
            gpxLayerGroup.clearLayers();

            // Charger et afficher la nouvelle trace GPX
            new L.GPX(activity.gpxUrl, {
                async: true,
                marker_options: {
                    startIconUrl: null,
                    endIconUrl: null,
                    shadowUrl: null
                },
                polyline_options: {
                    color: 'blue',
                    opacity: 0.75,
                    weight: 5,
                    lineCap: 'round'
                }
            }).on('loaded', function(e) {
                map.fitBounds(e.target.getBounds());
            }).addTo(gpxLayerGroup);
        });
    });

    const filterButtons = document.querySelectorAll(".filter-btn-activity");

    // Gestion des filtres
    filterButtons.forEach(button => {
        button.addEventListener("click", function() {
            const filter = button.getAttribute("data-filter");

            // Gérer la classe active sur les boutons
            filterButtons.forEach(btn => btn.classList.remove("active"));

            button.classList.add("active");

            // Filtrer les marqueurs sur la carte
            markers.forEach(({ marker, category }) => {
                if (filter === "all" || category === filter) {
                    marker.addTo(map); // Affiche le marqueur
                } else {
                    map.removeLayer(marker); // Cache le marqueur
                }
            });



            const activityCards = document.querySelectorAll('.card-map');
            activityCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        card.style.display = 'block'; // Affiche la carte
                    } else {
                        card.style.display = 'none'; // Cache la carte
                    }
                });





            

 
        });
    });
});
