<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Penyebaran;

class EditMapLocation extends Component
{
    public $long, $lat;

    public function render()
    {
        $data = DB::table('tb_datapenyebaran')->get();

        $penyebaran = Penyebaran::where('id_penyebaran', $data->id_penyebaran)
            ->join('tb_daerah', 'tb_daerah.id_daerah', '=', 'tb_datapenyebaran.id_daerah')
            ->get();

        return view('livewire.editmap-location', compact('penyebaran'));
    }

}
