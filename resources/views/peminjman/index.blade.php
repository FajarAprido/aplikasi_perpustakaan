@extends('layout.admin')
@section('judul')
Managemen Peminjaman Buku
@endsection
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Buku</th>
                  <th scope="col">No Hp</th>
                  <th scope="col">Tanggal Peminjaman</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataPeminjman as $index => $peminjman)
                <tr>
                  <th scope="row">{{ ++$index }}</th>
                  <td>{{ $peminjman->nama }}</td>
                  <td>{{ $peminjman->buku }}</td>
                  <td>{{ $peminjman->NoHp }}</td>
                  <td>{{ $peminjman->tanggalPinjam }}</td>
                  <td>
                    <!-- <a class="dropdown-item" href="{{ route('peminjman.edit',$peminjman->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a >   -->
                    <form action="{{ route('peminjman.destroy',$peminjman->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"> <i class="bx bxs-trash me-1"></i>Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>

      </div>

      
    </div>
  </section>
@endsection