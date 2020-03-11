@extends('layouts.frontend')

@include('layouts.navbars.mynav')

@section('content')
<div class="container-fluid mx-0 bg-image-home position-relative">
<div class="bgo-white position-absolute w-100 h-100 bgo-absolute"></div>
@if (session('error'))
    <div class="alert alert-danger alert-dismissible message-top rounded-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session('error') }}</strong>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success alert-dismissible message-top rounded-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>{{ session('success') }}</strong>
    </div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h3 class="mb-4 font-weight-bold">FORM PENDAFTARAN BUKU TAMU</h3>
                <form action="{{ url('/buku_tamu/add') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-8 pr-md-5">
                            <div class="pr-md-5 pr-0 mr-md-3 mr-0">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" required class="form-control" placeholder="Isikan nama lengkap anda">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="radio" name="gender" value="Laki-Laki" required id="male">
                                            <label for="male">Laki laki</label>
                                        </div>
                                        <div class="col-3">
                                            <input type="radio" name="gender" value="Perempuan" required id="female">
                                            <label for="male">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="phone">Nomor Handphone</label>
                                            <input type="text" name="phone" id="phone" required class="form-control" placeholder="Isikan nomor hp anda">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="umur">Umur</label>
                                            <input type="number" name="umur" id="umur" required class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" required rows="5" placeholder="Provinsi, Kabupaten / Kota, Kecamatan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="instansi">Instansi ( Opsional )</label>
                                    <input type="text" name="instansi" id="instansi" class="form-control" placeholder="Isikan asal instansi anda">
                                </div>
                                <div class="form-group">
                                    <label for="user">Pilih Pegawai</label>
                                    <select name="user" required id="user" class="form-control">
                                        <option value="">Pilih Pegawai</option>
                                        @foreach ($pegawai as $pgw)
                                            <option value="{{ $pgw->id }}">{{ $pgw->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tujuan">Tujuan bertamu</label>
                                    <textarea name="tujuan" required id="tujuan" class="form-control" rows="5" placeholder="Apa tujuan anda bertamu ?"></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="position-sticky text-center" style="top: 100px">
                                <div class="card-choose">
                                    <div style="height: 300px" class="w-100 bg-white rounded position-relative"></div>
                                </div>
                                <button type="submit" class="btn btn-danger w-50 py-2 mb-5 mt-3">Ambil foto</button>
                            </div>
                            <div class="row my-5">
                                <div class="col-6">
                                    <button type="button" class="btn btn-light w-100 py-2" disabled>Reset</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-success w-100 py-2" disabled>Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
