<div class="container-fluid">

    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Map Lokasi
                </div>
                <div class="card-body">
                    <div wire:ignore id='map' style='width: 100%; height: 155vh;'></div>        
                </div>
            </div>
                    
        </div>

        @foreach ($penyebaran as $py)
        <div class="col-md-4">
            <h2>Edit Data</h2>
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Form
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ url('/datapenyebaran/update',  $py->id_penyebaran) }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label>Longtitude</label>
                                <input type="text" name="longtitude" value="{{ $py->longtitude }}" class="form-control" wire:model="long">
                            </div>            
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Lattitude</label>
                                <input type="text" name="lattitude" value="{{ $py->lattitude }}" class="form-control" wire:model="lat">
                            </div>  
                        </div>
                        </div>
                            <div class="form-group" style="color: black;">
                                <label for="birthday" style="color: white;">Tanggal Pelaksanaan</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input data-datepicker="" class="form-control" id="birthday" type="text" value="{{ $py->tanggal_pelaksanaan }}" required name="tanggal_pelaksanaan">
                                </div>
                            </div>
                            <?php 
                                $daerah = DB::table('tb_daerah')->get();
                            ?>
                            <div class="form-group">
                                <label class="my-1 me-2" for="country">Nama Kelurahan/Kampung</label>
                                <select class="form-select" id="country" aria-label="Default select example" required name="id_daerah">
                                    <option selected hidden value="{{ $py->id_penyebaran }}">{{ $py->nama_daerah }}</option>
                                    @foreach ($daerah as $dr)
                                    <option value="{{ $dr->id_daerah }}">{{ $dr->nama_daerah }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" value="{{ $py->keterangan }}" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Peserta</label>
                                <input type="text" name="jumlah_peserta" class="form-control" value="{{ $py->jumlah_peserta }}" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Peserta Vaksin 1</label>
                                <input type="text" name="jumlah_peserta_vaksin1" class="form-control" value="{{ $py->jumlah_peserta_vaksin1 }}">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Peserta Vaksin 2</label>
                                <input type="text" name="jumlah_peserta_vaksin2" class="form-control" value="{{ $py->jumlah_peserta_vaksin2 }}">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Peserta Vaksin 3</label>
                                <input type="text" name="jumlah_peserta_vaksin3" class="form-control" value="{{ $py->jumlah_peserta_vaksin3 }}">
                            </div>
                            <div class="form-group">
                                <label>Nomor Batch 1</label>
                                <input type="text" name="no_batch1" class="form-control" value="{{ $py->no_batch1 }}">
                            </div>
                            <div class="form-group">
                                <label>Nomor Batch 2</label>
                                <input type="text" name="no_batch2" class="form-control" value="{{ $py->no_batch2 }}">
                            </div>
                            <div class="form-group">
                                <label>Nomor Batch 3</label>
                                <input type="text" name="no_batch3" class="form-control" value="{{ $py->no_batch3 }}">
                            </div>
                            
                            <br />
                            <div class="modal-footer">
                            <center><a href="/datapenyebaran" class="btn btn-danger" type="button">Batal</a></center>
                            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    

</div>


@push('scripts')

<script>

document.addEventListener('livewire:load', () => {
    const defaultLocation = [140.50566893412537, -2.566534074354763]

    mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
    const map = new mapboxgl.Map({
        container: 'map', // container ID
        center: defaultLocation,
        zoom: 11.15,
        style: 'mapbox://styles/mapbox/streets-v11', // style URL
        projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
        map.setFog({}); // Set the default atmosphere style
    });

    const geoJson = {
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [
          "106.73830754205",
          "-6.2922403995615"
        ],
        "type": "Point"
      },
      "properties": {
        "message": "Mantap",
        "iconSize": [
          50,
          50
        ],
        "locationId": 30,
        "title": "Hello new",
        "image": "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
        "description": "Mantap"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [
          "106.68681595869",
          "-6.3292244652013"
        ],
        "type": "Point"
      },
      "properties": {
        "message": "oke mantap Edit",
        "iconSize": [
          50,
          50
        ],
        "locationId": 29,
        "title": "Rumah saya Edit",
        "image": "0ea59991df2cb96b4df6e32307ea20ff.png",
        "description": "oke mantap Edit"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [
          "106.62490035406",
          "-6.3266855038639"
        ],
        "type": "Point"
      },
      "properties": {
        "message": "Update Baru",
        "iconSize": [
          50,
          50
        ],
        "locationId": 22,
        "title": "Update Baru Gambar",
        "image": "d09444b68d8b72daa324f97c999c2301.jpeg",
        "description": "Update Baru"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [
          "106.72391468711",
          "-6.3934163494543"
        ],
        "type": "Point"
      },
      "properties": {
        "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        "iconSize": [
          50,
          50
        ],
        "locationId": 19,
        "title": "awdwad",
        "image": "f0b88ffd980a764b9fca60d853b300ff.png",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [
          "106.67224158205",
          "-6.3884963990263"
        ],
        "type": "Point"
      },
      "properties": {
        "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
        "iconSize": [
          50,
          50
        ],
        "locationId": 18,
        "title": "adwawd",
        "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "coordinates": [
          "106.74495523289",
          "-6.3642034511073"
        ],
        "type": "Point"
      },
      "properties": {
        "message": "awdwad",
        "iconSize": [
          50,
          50
        ],
        "locationId": 12,
        "title": "adawd",
        "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
        "description": "awdwad"
      }
    }
  ]
}


    const loadLocations = () => {
        geoJson.features.forEach((location) => {
            const {geometry, properties} = location
            const {iconSize, locationId, title, image, description} = properties

            let markerElement = document.createElement('div')
            markerElement.className = 'marker' + locationId
            markerElement.id = locationId
            markerElement.style.backgroundImage = 'url(https://cdn.icon-icons.com/icons2/2699/PNG/512/mapbox_logo_icon_169974.png)'
            markerElement.style.backgroundSize = 'cover'
            markerElement.style.width = '50px'
            markerElement.style.height = '50px'

            const content = `
                <div style="overflow-y: auto; max-height: 400px; width: 100%;">
                    <table>
                        <tbody>
                            <tr>
                                <td>Title</td>
                                <td>${title}</td>
                            </tr>
                            <tr>
                                <td>Picture</td>
                                <td><img src="${image}" loading="lazy" class="img-fluid"></td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>${description}</td>
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

    loadLocations()

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