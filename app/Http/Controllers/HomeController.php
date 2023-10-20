<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Penyebaran;
  
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $total_peserta = Penyebaran::select(DB::raw("CAST(SUM(jumlah_peserta) as int) as total_peserta"))
            ->GroupBy(DB::raw("Month(tanggal_pelaksanaan)"))
            ->pluck('total_peserta');

        $bulan = Penyebaran::select(DB::raw("MONTHNAME(tanggal_pelaksanaan) as bulan"))
            ->GroupBy(DB::raw("MONTHNAME(tanggal_pelaksanaan)"))
            ->orderBy('id_penyebaran')
            ->pluck('bulan');

        $jumlah_peserta = Penyebaran::sum('jumlah_peserta');
        $jumlah_peserta1 = Penyebaran::sum('jumlah_peserta_vaksin1');
        $jumlah_peserta2 = Penyebaran::sum('jumlah_peserta_vaksin2');
        $jumlah_peserta3 = Penyebaran::sum('jumlah_peserta_vaksin3');

        return view('home', compact('total_peserta', 'bulan', 'jumlah_peserta', 'jumlah_peserta1', 'jumlah_peserta2', 'jumlah_peserta3'));
    }
}