@extends('layouts.home.app')
@section('content')

	<div class="py-4">
                <div class="dropdown">
                    <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 navbar-dark navbar-theme-primary" aria-haspopup="true" style="color: white;" aria-expanded="false">
                        &nbsp; Daerah/Kabupaten &nbsp;
                    </button>
                </div>
            </div>
            <br>
            @include('layouts.messages')
            <br>
	<!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a data-toggle="modal" data-target="#addModal">
                        <button class="bi bi-plus-circle-fill btn btn-success" style="color:white;"> Tambah Data</button>
                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle; text-align: center; width: 10%;">No.</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Nama Kelurahan/Kampung</th>
                                            <th style="vertical-align: middle; text-align: center; width: 15%;">Kode Pos</th>
                                            <th style="vertical-align: middle; text-align: center; width: 15%;">Luas Wilayah</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Jumlah Penduduk</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach ($daerah as $dr)
                                        <tr>
                                            <td style="vertical-align: middle; text-align: center;">{{$no++}}.</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $dr->nama_daerah }}</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $dr->kode_pos }}</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $dr->luas_wilayah }} km²</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $dr->jumlah_penduduk }} Orang</td>
                                            <td style="text-align: center;">
                                                <div class="container mb-0">
                                                <button data-toggle="modal" data-target="#editModal{{ $dr->id_daerah }}" class="btn btn-warning col-xl-4 col-md-4 mb-2" style="font-size: 1.3rem; color:white; width: 36%;" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg></button>&nbsp;
                                                <a data-toggle="modal" data-target="#my-modal{{ $dr->id_daerah }}" class="btn btn-danger col-xl-4 col-md-4 mb-2" style="font-size: 1.2rem; color:white; width: 36%;" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg></a>&nbsp;
                                                <button class="btn btn-info col-xl-4 col-md-4 mb-2" data-toggle="modal" data-target="#myModal{{ $dr->id_daerah }}" style="font-size: 1.3rem; color:white; width: 36%;" role="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                    </svg>
                                                </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <br>
	
    @foreach ($daerah as $dr)
    <!-- HapusData -->
    <div id="my-modal{{ $dr->id_daerah }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">   
                <div class="modal-body p-0">
                    <div class="card border-0 p-sm-3 p-2 justify-content-center">
                        <div class="card-header pb-0 bg-white border-0 "><div class="row"><div class="col ml-auto"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div> </div>
                        <p class="font-weight-bold mb-2"> Are you sure you wanna delete this ?</p><p class="text-muted "> These changes will be visible on your portal and the data will be deleted.</p>     </div>
                        <div class="card-body px-sm-4 mb-2 pt-1 pb-0"> 
                            <div class="row justify-content-end no-gutters"><div class="col-auto"><button type="button" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button><a class="btn btn-danger px-4" href="/daerah/{{ $dr->id_daerah }}" role="button">Delete</a></div><div class="col-auto"></div></div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- TambahData -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%); width: 100%;">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Tambah Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="{{ route('storedaerah') }}" method="POST" id="editform">
                @csrf
                <div class="form-group">
                    <label>Nama Kelurahan/Kampung</label>
                    <input type="text" name="nama_daerah" class="form-control" placeholder="Nama Kelurahan/Kampung" required>
                </div>
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" required>
                </div>
                <div class="form-group">
                    <label>Luas Wilayah</label>
                    <input type="text" name="luas_wilayah" class="form-control" placeholder="Luas Wilayah" required>
                </div>
                <div class="form-group">
                    <label>Jumlah Penduduk</label>
                    <input type="text" name="jumlah_penduduk" class="form-control" placeholder="Jumlah Penduduk" required>
                </div>
                
                <br />
                <div class="modal-footer">
                <center><button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                </div>
            </form>
            </div>
            </div>
        </div>
        
    </div>

    @foreach ($daerah as $dr)
    <!-- EditData -->
    <div class="modal fade" id="editModal{{ $dr->id_daerah }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%); width: 100%;">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="{{ url('/daerah/update',  $dr->id_daerah) }}" method="POST" id="editform">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Nama Kelurahan/Kampung</label>
                    <input type="text" name="nama_daerah" class="form-control" required="required" value="{{ $dr->nama_daerah }}">
                </div>
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" name="kode_pos" class="form-control" required="required" value="{{ $dr->kode_pos }}">
                </div>
                <div class="form-group">
                    <label>Luas Wilayah</label>
                    <input type="text" name="luas_wilayah" class="form-control" required="required" value="{{ $dr->luas_wilayah }}">
                </div>
                <div class="form-group">
                    <label>Jumlah Penduduk</label>
                    <input type="text" name="jumlah_penduduk" class="form-control" required="required" value="{{ $dr->jumlah_penduduk }} ">
                </div>
                
                <br />
                <div class="modal-footer">
                <center><button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                </div>
            </form>
            </div>
            </div>
        </div>
        
    </div>
    @endforeach

    @foreach ($daerah as $dr)
    <div id="myModal{{ $dr->id_daerah }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
             <div class="modal-content" style="background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%); width: 100%;">
                <div class="modal-header text-white">
                <h4>Detail Data Wilayah</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                    </div>
                <div class="modal-body text-white">
                    <div class="row">
                    <div class="col-lg-12">
                    <table class="table table-bordered no-margin" style="background-color: white;">
                    <thead>
                    <tr>
                        <th>Nama Kelurahan/Kampung</th>
                        <td>{{ $dr->nama_daerah }}</td>
                        </tr>
                        <tr>
                        <th>Kode Pos</th>
                        <td>{{ $dr->kode_pos }}</td>
                        </tr>
                        <tr>
                        <th>Luas Wilayah</th>
                        <td>{{ $dr->luas_wilayah }} km²</td>
                        </tr>
                        <tr>
                        <th>Jumlah Penduduk</th>
                        <td>{{ $dr->jumlah_penduduk }} Orang</td>
                        </tr>
                        
                        
                    </thead>
                    </table>
                 </div>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    

@endsection