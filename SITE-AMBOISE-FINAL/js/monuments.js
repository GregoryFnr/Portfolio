document.addEventListener("DOMContentLoaded", function () {
    // Coordonnées et informations des monuments historiques
    const monuments = [
        {
            elementId: "royal-amboise",
            coords: [47.41352689411957, 0.9857906837017812], 
            title: "Château d'Amboise",
            imageUrl: "./img/chateau-amboise.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4136,0.9886"
        },
        {
            elementId: "saint-denis",
            coords: [47.40974586300231, 0.9786522107349894], 
            title: "Église collégiale Saint-Denis",
            imageUrl: "./img/eglise-collegiale-saint-denis-2.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4152,0.9856"
        },
        {
            elementId: "clos-luce",
            coords: [47.410289647457375, 0.9921343932722807], 
            title: "Clos Lucé",
            imageUrl: "./img/chateau-clos-luce.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4130,0.9912"
        },
        {
            elementId: "saint-hubert",
            coords: [47.41298592612656, 0.9857236063313357], 
            title: "Chapelle Saint-Hubert",
            imageUrl: "./img/chapelle-saint-hubert.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4128,0.9877"
        },
        {
            elementId: "tour-chanteloup",
            coords: [47.39111758204069, 0.9701834829568639], 
            title: "La Pagode de Chanteloup",
            imageUrl: "./img/la-pagode-de-chanteloup.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4088,0.9873"
        },
        {
            elementId: "chateau-gaillard",
            coords: [47.41043196914964, 0.9993450809046939], 
            title: "Domaine Royal du Château Gaillard",
            imageUrl: "./img/domaine-royal-du-chateau-gaillard.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4143,0.9854"
        },
        {
            elementId: "musee-hotel-morin",
            coords: [47.41318242399062, 0.9839440118912816], 
            title: "Musée Hôtel Morin",
            imageUrl: "./img/musee-hotel-morin.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4126,0.9842"
        },
        {
            elementId: "tour-dor-blanc",
            coords: [47.417574537742155, 0.9813702121053478], 
            title: "La Tour d'Or Blanc",
            imageUrl: "./img/tour-dor-blanc-min.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4138,0.9803"
        },
        {
            elementId: "tour-horloge",
            coords: [47.412548972977426, 0.9840066999460402], 
            title: "Tour de l’Horloge",
            imageUrl: "./img/tour-horloge-amboise.jpeg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4137,0.9846"
        },
        {
            elementId: "eglise-notre-dame",
            coords: [47.41801665277742, 0.982149660720769], 
            title: "Église Notre-Dame-du-Bout-des-Ponts",
            imageUrl: "./img/eglise-notre-dame-du-bout-des-ponts.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4145,0.9818"
        },
        {
            elementId: "chapelle-saint-jean",
            coords: [47.421503163395954, 0.9941638964871926], 
            title: "Chapelle Saint-Jean",
            imageUrl: "./img/chapelle-saint-jean.jpeg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4134,0.9824"
        },
        {
            elementId: "hotel-joyeuse",
            coords: [47.41116672485949, 0.9846242058989086], 
            title: "Hôtel Joyeuse",
            imageUrl: "./img/hotel-joyeuse-2.jpg",
            itineraryUrl: "https://www.google.com/maps/dir/?api=1&destination=47.4129,0.9825"
        }
    ];

    // Initialisation de la carte centrée sur Amboise
    const map = L.map('map-monument').setView([47.4136, 0.9824], 15);

    // Ajouter une couche de tuiles (tiles layer) à la carte
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

    const markers = [];

    // Ajout des marqueurs et gestion des interactions
    monuments.forEach((monument) => {
        const marker = L.marker(monument.coords, { icon: defaultIcon }).addTo(map);

        marker.bindPopup(`
            <div>
                <h3>${monument.title}</h3>
                <img src="${monument.imageUrl}" alt="${monument.title}" style="width:100%; height:auto; margin-top:10px;">
                <a href="${monument.itineraryUrl}" target="_blank">
                    <button style="margin-top:10px; padding: 8px 12px; background-color: #C7AA67; color: white; border: none; border-radius: 2px; cursor: pointer;">
                        Itinéraire
                    </button>
                </a>
            </div>
        `);

        const monumentCard = document.getElementById(monument.elementId);

        // Survol de la carte du monument
        monumentCard.addEventListener("mouseover", () => {
            marker.setIcon(highlightedIcon);
        });

        monumentCard.addEventListener("mouseout", () => {
            marker.setIcon(defaultIcon);
        });

        // Clic sur la carte du monument
        monumentCard.addEventListener("click", () => {
            map.setView(monument.coords, 15, {
                animate: true,
                pan: { duration: 0.5 }
            });
            marker.openPopup();
        });

         // Ajout du marqueur dans un tableau pour le filtrage
         markers.push({ marker, category: monumentCard.dataset.category });
        });
    
        // Gestion des filtres
        const filterButtons = document.querySelectorAll('.filter-btn');
    
        

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                
                    // Supprimer la classe 'active' de tous les boutons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Ajouter la classe 'active' au bouton cliqué
                button.classList.add('active');

                markers.forEach(({ marker, category }) => {
                    if (filter === 'all' || category === filter) {
                        marker.addTo(map); // Affiche le marqueur
                    } else {
                        map.removeLayer(marker); // Cache le marqueur
                    }
                });

                // Gérer l'affichage des cartes de monuments
                const monumentCards = document.querySelectorAll('.card-map');
                monumentCards.forEach(card => {
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
