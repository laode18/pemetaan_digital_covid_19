<div class="container-fluid">

    <br>
    <div class="row">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Map Visualisasi
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 85vh;'></div>        
                </div>
            </div>
              
    </div>

    

</div>
<br>


@push('scripts')

<script>

document.addEventListener('livewire:load', () => {
    const defaultLocation = [140.50566893412537, -2.566534074354763]

    mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        center: defaultLocation,
        zoom: 14.15,
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
        map.setFog({}); // Set the default atmosphere style
    });

    const loadLocations = (geoJson) => {
        geoJson.features.forEach((location) => {
            const {geometry, properties} = location
            const {iconSize, locationId, tanggal_pelaksanaan, jumlah_peserta, jumlah_peserta_vaksin1, jumlah_peserta_vaksin2, jumlah_peserta_vaksin3} = properties

            let markerElement = document.createElement('div')
            markerElement.className = 'marker' + locationId
            markerElement.id = locationId
            markerElement.style.backgroundImage = 'url(https://cdn.icon-icons.com/icons2/2699/PNG/512/mapbox_logo_icon_169974.png)'
            markerElement.style.backgroundSize = 'cover'
            markerElement.style.width = '50px'
            markerElement.style.height = '50px'

            const content = `
                <div style="overflow-y: auto; max-height: 400px; width: 100%;">
                    <table class="table table-sm mt-2">
                        <tbody>
                            <tr>
                                <td>Tanggal Pelaksanaan</td>
                                <td>${tanggal_pelaksanaan}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Peserta</td>
                                <td>${jumlah_peserta}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Peserta Vaksin 1</td>
                                <td>${jumlah_peserta_vaksin1}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Peserta Vaksin 2</td>
                                <td>${jumlah_peserta_vaksin2}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Peserta Vaksin 3</td>
                                <td>${jumlah_peserta_vaksin3}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            `

            const popUp = new mapboxgl.Popup({
                offset:25
            }).setHTML(content).setMaxWidth("400px")

            new mapboxgl.Marker(markerElement)
            .setLngLat(geometry.coordinates)
            .setPopup(popUp)            
            .addTo(map)

        })
    }

    loadLocations({!! $geoJson !!})

    map.addControl(new mapboxgl.NavigationControl())

    map.on('click', (e) => {
        const longtitude = e.lngLat.lng
        const lattitude = e.lngLat.lat

        @this.long = longtitude
        @this.lat = lattitude 
    })
})

</script>

@endpush
