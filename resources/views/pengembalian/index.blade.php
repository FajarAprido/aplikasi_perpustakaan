@extends('layout.admin')
@section('judul')
Data Pengembalian Buku
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
                  <th scope="col">Tanggal Pengembalian</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataPengembalian as $index => $pengembalian)
                <tr>
                  <th scope="row">{{ ++$index }}</th>
                  <td>{{ $pengembalian->nama }}</td>
                  <td>{{ $pengembalian->buku }}</td>
                  <td>{{ $pengembalian->NoHp }}</td>
                  <td>{{ $pengembalian->tanggalPengmbalian }}</td>
                  <td>
                    <!-- <a class="dropdown-item" href="{{ route('pengembalian.edit',$pengembalian->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a >   -->
                    <form action="{{ route('pengembalian.destroy',$pengembalian->id) }}" method="POST">
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