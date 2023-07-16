@extends('layout.admin')
@section('judul')
User
@endsection
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <a  href="{{ route('user.create') }}">Tambah</a>

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Default Table</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Card ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Password</th>
                  <th scope="col">Nomor Telepon</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataUser as $index => $user)
                <tr>
                  <th scope="row">{{ ++$index }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->password }}</td>
                  <td>{{ $user->nomorHp }}</td>
                  <td>
                    <a class="dropdown-item" href="{{ route('user.edit',$user->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a >  
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
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