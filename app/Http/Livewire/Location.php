<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Penyebaran;

class Location extends Component
{
    public $long, $lat;
    public $geoJson;

    private function loadLocations(){
        $locations = Penyebaran::orderBy('id_penyebaran')->get();

        $customLocations = [];

        foreach ($locations as $location) {
            $customLocations[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$location->longtitude, $location->lattitude],
                    'type' => 'Point'
                ],
                'properties' => [
                    'tanggal_pelaksanaan' => $location->tanggal_pelaksanaan,
                    'jumlah_peserta' => $location->jumlah_peserta,
                    'jumlah_peserta_vaksin1' => $location->jumlah_peserta_vaksin1,
                    'jumlah_peserta_vaksin2' => $location->jumlah_peserta_vaksin2,
                    'jumlah_peserta_vaksin3' => $location->jumlah_peserta_vaksin3 
                ]
            ]; 
        }

        $geoLocation = [
            'type' => 'FeatureCollection',
            'features' => $customLocations
        ];

        $geoJson = collect($geoLocation)->toJson();
        $this->geoJson = $geoJson;
    }
    
    public function render()
    {
        $this->loadLocations();

        return view('livewire.location');
    }
}
