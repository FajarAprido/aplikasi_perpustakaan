@extends('layout.admin')
@section('judul')
Managemen Buku
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
                  <th scope="col">No</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Pengarang</th>
                  <th scope="col">Penerbit</th>
                  <th scope="col">Tahun Terbit</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataBuku as $index => $buku)
                <tr>
                  <th scope="row">{{ ++$index }}</th>
                  <td>{{ $buku->judul }}</td>
                  <td>{{ $buku->pengarang }}</td>
                  <td>{{ $buku->penerbit }}</td>
                  <td>{{ $buku->tahun }}</td>
                  <td>
                    <a class="dropdown-item" href="{{ route('buku.edit',$buku->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a >  
                    <form action="{{ route('buku.destroy',$buku->id) }}" method="POST">
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