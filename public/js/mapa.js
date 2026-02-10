
document.addEventListener('DOMContentLoaded', () => {

    const mapElement = document.getElementById('map');
    if (!mapElement) return;

    let map = null;

    function initMap() {
        map = L.map('map', {
            zoomControl: true,
            scrollWheelZoom: false
        }).setView([-22.976012, -43.229052], 8);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        // Garante render correto
        map.invalidateSize();

        return map;
    }

    // 🔥 Espera o layout estabilizar (grid + media queries)
    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            initMap();
        });
    });

    // 🔁 Resize real (desktop)
    window.addEventListener('resize', () => {
        if (map) map.invalidateSize();
    });

    // 📱 Orientation change (mobile)
    window.addEventListener('orientationchange', () => {
        setTimeout(() => {
            if (map) map.invalidateSize();
        }, 500);
    });

    // 📍 Geolocalização
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                if (!map) return;

                const { latitude, longitude } = position.coords;
                map.setView([latitude, longitude], 13);

                L.marker([latitude, longitude])
                    .addTo(map)
                    .bindPopup('Você está aqui')
                    .openPopup();

                map.invalidateSize();
            },
            () => {}, 
            { enableHighAccuracy: true }
        );
    }

    // 📌 Pontos vindos do banco
    fetch('api/pontosAprovados.php')
        .then(res => res.json())
        .then(pontos => {
            if (!map || !Array.isArray(pontos)) return;

            pontos.forEach(ponto => {
                if (ponto.latitude && ponto.longitude) {
                    L.marker([ponto.latitude, ponto.longitude])
                        .addTo(map)
                        .bindPopup(ponto.nome);
                }
            });

            map.invalidateSize();
        })
        .catch(err => console.error('Erro ao carregar pontos:', err));
});

