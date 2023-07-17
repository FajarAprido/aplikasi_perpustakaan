@extends('layout.admin')
@section('judul')
Managemen Waktu Peminjaman 
@endsection
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <!-- General Form Elements -->
            <form action="{{ route('peminjman.update',$peminjman->id) }}" method="POST">
              @csrf
              @method('PUT')
                <div class="row mb-3 mt-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input value="{{ $peminjman->judul }}" name="judul" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">buku</label>
                  <div class="col-sm-10">
                    <input value="{{ $peminjman->pengarang }}" name="pengarang" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">NoHp</label>
                  <div class="col-sm-10">
                    <input value="{{ $peminjman->penerbit }}" name="penerbit" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input value="{{ $peminjman->tahun }}" name="tahun" type="text" class="form-control">
                  </div>
                </div>


              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>

    </div>
  </section>
  @endsection
