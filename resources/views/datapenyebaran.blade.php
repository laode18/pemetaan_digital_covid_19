@extends('layouts.home.app')
@section('content')

	<div class="py-4">
                <div class="dropdown">
                    <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 navbar-dark navbar-theme-primary" aria-haspopup="true" style="color: white;" aria-expanded="false">
                        &nbsp; Data Penyebaran &nbsp;
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
                            <a href="/map">
                        <button class="bi bi-plus-circle-fill btn btn-success" style="color:white;"> Tambah Data</button>
                    </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle; text-align: center; width: 10%;">No.</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Tanggal</th>
                                            <th style="vertical-align: middle; text-align: center; width: 25%;">Kelurahan/Kampung</th>
                                            <th style="vertical-align: middle; text-align: center; width: 15%;">Jumlah Peserta</th>
                                            <th style="vertical-align: middle; text-align: center; width: 20%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot>
                                    <tbody>
                                        <?php $no=1; ?>
                                        @foreach ($penyebaran as $py)
                                        <tr>
                                            <td style="vertical-align: middle; text-align: center;">{{$no++}}.</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ tanggal_indonesia1($py->tanggal_pelaksanaan) }}</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $py->nama_daerah }}</td>
                                            <td style="vertical-align: middle; text-align: center;">{{ $py->jumlah_peserta }} Orang</td>
                                            <td style="text-align: center;">
                                                <div class="container mb-0">
                                                <button data-toggle="modal" data-target="#editModal{{ $py->id_penyebaran }}" class="btn btn-warning col-xl-4 col-md-4 mb-2" style="font-size: 1.3rem; color:white; width: 36%;" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg></button>&nbsp;
                                                <a data-toggle="modal" data-target="#my-modal{{ $py->id_penyebaran }}" class="btn btn-danger col-xl-4 col-md-4 mb-2" style="font-size: 1.2rem; color:white; width: 36%;" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg></a>&nbsp;
                                                <button class="btn btn-info col-xl-4 col-md-4 mb-2" data-toggle="modal" data-target="#myModal{{ $py->id_penyebaran }}" style="font-size: 1.3rem; color:white; width: 36%;" role="button">
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
                <br>
                <!-- /.container-fluid -->

    @foreach ($penyebaran as $py)
                 <!-- HapusData -->
    <div id="my-modal{{ $py->id_penyebaran }}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">   
                <div class="modal-body p-0">
                    <div class="card border-0 p-sm-3 p-2 justify-content-center">
                        <div class="card-header pb-0 bg-white border-0 "><div class="row"><div class="col ml-auto"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div> </div>
                        <p class="font-weight-bold mb-2"> Are you sure you wanna delete this ?</p><p class="text-muted "> These changes will be visible on your portal and the data will be deleted.</p>     </div>
                        <div class="card-body px-sm-4 mb-2 pt-1 pb-0"> 
                            <div class="row justify-content-end no-gutters"><div class="col-auto"><button type="button" class="btn btn-light text-muted" data-dismiss="modal">Cancel</button><a class="btn btn-danger px-4" href="/datapenyebaran/{{ $py->id_penyebaran }}" role="button">Delete</a></div><div class="col-auto"></div></div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($penyebaran as $py)
    <div id="myModal{{ $py->id_penyebaran }}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
             <div class="modal-content" style="background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%); width: 100%;">
                <div class="modal-header text-white">
                <h4>Detail Data Penyebaran</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal">&times;</button>
                    </div>
                <div class="modal-body text-white">
                    <div class="row">
                    <div class="col-lg-12">
                    <table class="table table-bordered no-margin" style="background-color: white;">
                    <thead>
                    <tr>
                        <th>Tanggal Pelaksanaan</th>
                        <td>{{ tanggal_indonesia1($py->tanggal_pelaksanaan) }}</td>
                        </tr>
                        <tr>
                        <th>Nama Kelurahan/Kampung</th>
                        <td>{{ $py->nama_daerah }}</td>
                        </tr>
                        <tr>
                        <th>Jumlah Peserta</th>
                        <td>{{ $py->jumlah_peserta }} Orang</td>
                        </tr>
                        <tr>
                        <th>Jumlah Peserta Vaksin 1</th>
                        <td>{{ $py->jumlah_peserta_vaksin1 }} Orang</td>
                        </tr>
                        <tr>
                        <th>Jumlah Peserta Vaksin 2</th>
                        <td>{{ $py->jumlah_peserta_vaksin2 }} Orang</td>
                        </tr>
                        <tr>
                        <th>Jumlah Peserta Vaksin 3</th>
                        <td>{{ $py->jumlah_peserta_vaksin3 }} Orang</td>
                        </tr>
                        <tr>
                        <th>Nomor Batch 1</th>
                        <td>{{ $py->no_batch1 }}</td>
                        </tr>
                        <tr>
                        <th>Nomor Batch 2</th>
                        <td>{{ $py->no_batch2 }}</td>
                        </tr>
                        <tr>
                        <th>Nomor Batch 3</th>
                        <td>{{ $py->no_batch3 }}</td>
                        </tr>
                        <tr>
                        <th>Keterangan</th>
                        <td>{{ $py->keterangan }}</td>
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

    <!-- TambahData -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content navbar-dark navbar-theme-primary">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Tambah Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="#" method="POST" id="editform">
                @csrf
                <div class="form-group" style="color: black;">
                    <label for="birthday" style="color: white;">Tanggal</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </span>
                        <input data-datepicker="" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Daerah/Kabupaten</label>
                    <input type="text" name="nama_daerah" class="form-control" placeholder="Nama Daerah" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                </div>
                <div class="form-group">
                    <label class="my-1 me-2" for="country">Kondisi</label>
                    <select class="form-select" id="country" aria-label="Default select example">
                        <option selected hidden>Kondisi</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
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

    @foreach ($penyebaran as $py)
    <!-- EditData -->
    <div class="modal fade" id="editModal{{ $py->id_penyebaran }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content navbar-dark navbar-theme-primary">
                <div class="modal-header text-white">
                    <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
                    <button type="button" class="close" style="color: white;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body text-white">
                <form action="{{ url('/datapenyebaran/update',  $py->id_penyebaran) }}" method="POST" id="editform">
                {!! csrf_field() !!}
                <div class="form-group" style="color: black;">
                                <label for="birthday" style="color: white;">Tanggal Pelaksanaan</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input data-datepicker="" class="form-control" id="birthday" type="text" value="{{ $py->tanggal_pelaksanaan }}" required name="tanggal_pelaksanaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="my-1 me-2" for="country">Nama Kelurahan/Kampung</label>
                                <select class="form-select" id="country" aria-label="Default select example" required name="id_daerah">
                                    <option selected hidden value="{{ $py->id_daerah }}">{{ $py->nama_daerah }}</option>
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
                <center><button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
                <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                </div>
            </form>
            </div>
            </div>
        </div>
        
    </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	

@endsection