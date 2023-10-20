<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Daerah;
  
class DaerahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $daerah = DB::table('tb_daerah')->get();

        return view('daerah', compact('daerah'));
    }

    public function create()
    {
        return view('daerah');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'nama_daerah' => 'required',
            'kode_pos' => 'required',
            'luas_wilayah' => 'required',
            'jumlah_penduduk' => 'required',
        ]);

        $daerah = Daerah::create([
        'nama_daerah' => $request->nama_daerah,
        'kode_pos' => $request->kode_pos,
        'luas_wilayah' => $request->luas_wilayah,
        'jumlah_penduduk' => $request->jumlah_penduduk,
        
        ]);

        if($daerah){
        //redirect dengan pesan sukses
            return redirect()->route('daerah')->with(['success' => 'Data Saved Successfully!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('daerah')->with(['error' => 'Data Save Failed!']);
        }

    }

    public function edit($id_daerah)
    {
        $daerah = Daerah::where('id_daerah',$id_daerah)->get();

        return view('daerah', compact('daerah'));
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
        DB::table('tb_daerah')->where('id_daerah',$request->id_daerah)->update([
            'nama_daerah' => $request->nama_daerah,
            'kode_pos' => $request->kode_pos,
            'luas_wilayah' => $request->luas_wilayah,
            'jumlah_penduduk' => $request->jumlah_penduduk,
        ]);

        return redirect('/daerah')->with(['success' => 'Data Updated Successfully!']);
    }

    public function destroy($id_daerah)
    {
        DB::table('tb_daerah')->where('id_daerah', $id_daerah)->delete();

        return redirect ('/daerah')->with(['success' => 'Data Deleted Successfully!']);
    }
}