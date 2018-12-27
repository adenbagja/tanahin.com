let lokasi = [-6.9295752, 107.7172293];
let sponsor = "Rizka's Sweet home";
let marker = L.marker(lokasi).addTo(map);
			marker.bindPopup(sponsor).openPopup();
		