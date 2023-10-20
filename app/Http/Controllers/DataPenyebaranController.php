<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyebaran;
use App\Models\Daerah;
  
class DataPenyebaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $daerah = DB::table('tb_daerah')->get();

        $penyebaran = DB::table('tb_datapenyebaran')
            ->join('tb_daerah', 'tb_daerah.id_daerah', '=', 'tb_datapenyebaran.id_daerah')
            ->get();

        return view('datapenyebaran', compact('penyebaran', 'daerah'));
    }

    public function create()
    {
        return view('datapenyebaran');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'tanggal_pelaksanaan' => 'required',
            'jumlah_peserta' => 'required',
            'jumlah_peserta_vaksin1' => 'required',
            'jumlah_peserta_vaksin2' => 'required',
            'jumlah_peserta_vaksin3' => 'required',
            'no_batch1' => 'required',
            'no_batch2' => 'required',
            'no_batch3' => 'required',
            'keterangan' => 'required',
            'id_daerah' => 'required',
        ]);

        $penyebaran = Penyebaran::create([
        'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
        'jumlah_peserta' => $request->jumlah_peserta,
        'jumlah_peserta_vaksin1' => $request->jumlah_peserta_vaksin1,
        'jumlah_peserta_vaksin2' => $request->jumlah_peserta_vaksin2,
        'jumlah_peserta_vaksin3' => $request->jumlah_peserta_vaksin3,
        'no_batch1' => $request->no_batch1,
        'no_batch2' => $request->no_batch2,        
        'no_batch3' => $request->no_batch3,        
        'keterangan' => $request->keterangan,        
        'id_daerah' => $request->id_daerah,
        'longtitude' => $request->longtitude,
        'lattitude' => $request->lattitude,
        ]);

        if($penyebaran){
        //redirect dengan pesan sukses
            return redirect()->route('datapenyebaran')->with(['success' => 'Data Saved Successfully!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('datapenyebaran')->with(['error' => 'Data Save Failed!']);
        }

    }

    public function edit($id_penyebaran)
    {
        $penyebaran = DB::table('tb_datapenyebaran')
            ->join('tb_daerah', 'tb_daerah.id_daerah', '=', 'tb_datapenyebaran.id_daerah')
            ->get();

        return view('livewire.editmap-location', compact('penyebaran'));
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('tb_datapenyebaran')->where('id_penyebaran',$request->id_penyebaran)->update([
            'tanggal_pelaksanaan' => $request->tanggal_pelaksanaan,
            'jumlah_peserta' => $request->jumlah_peserta,
            'jumlah_peserta_vaksin1' => $request->jumlah_peserta_vaksin1,
            'jumlah_peserta_vaksin2' => $request->jumlah_peserta_vaksin2,
            'jumlah_peserta_vaksin3' => $request->jumlah_peserta_vaksin3,
            'no_batch1' => $request->no_batch1,
            'no_batch2' => $request->no_batch2,        
            'no_batch3' => $request->no_batch3,        
            'keterangan' => $request->keterangan,        
            'id_daerah' => $request->id_daerah,
        ]);

        return redirect('/datapenyebaran')->with(['success' => 'Data Updated Successfully!']);
    }

    public function destroy($id_penyebaran)
    {
        DB::table('tb_datapenyebaran')->where('id_penyebaran', $id_penyebaran)->delete();

        return redirect ('/datapenyebaran')->with(['success' => 'Data Deleted Successfully!']);
    }
}