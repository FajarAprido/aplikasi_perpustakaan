@extends('layout.admin')
@section('judul')
User
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
                  <th scope="col">Card ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Nomor Telepon</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($dataUser as $index => $user)
                <tr>
                  <th scope="row">{{ ++$index }}</th>
                  <td>{{ $user->cardid }}</td>
                  <td>{{ $user->nama }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->nomorhp }}</td>
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
                <tr>
                  <th scope="row">2</th>
                  <td>Bridie Kessler</td>
                  <td>Developer</td>
                  <td>35</td>
                  <td>2014-12-05</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ashleigh Langosh</td>
                  <td>Finance</td>
                  <td>45</td>
                  <td>2011-08-12</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Angus Grady</td>
                  <td>HR</td>
                  <td>34</td>
                  <td>2012-06-11</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Raheem Lehner</td>
                  <td>Dynamic Division Officer</td>
                  <td>47</td>
                  <td>2011-04-19</td>
                </tr>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>

      </div>

      
    </div>
  </section>
@endsection