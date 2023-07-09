@extends('layout.admin')
@section('judul')
Tambah Buku
@endsection
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

            <!-- General Form Elements -->
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <div class="row mb-3 mt-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input name="judul" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Pengarang</label>
                  <div class="col-sm-10">
                    <input name="pengarang" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Penerbit</label>
                  <div class="col-sm-10">
                    <input name="penerbit" type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tahun Terbit</label>
                  <div class="col-sm-10">
                    <input name="tahun" type="text" class="form-control">
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
