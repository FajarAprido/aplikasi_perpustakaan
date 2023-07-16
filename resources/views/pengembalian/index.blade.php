@extends('layout.admin')
@section('judul')
Managemen Pengembalian
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
                  <td>{{ $pengembalian->cardId }}</td>
                  <td>{{ $pengembalian->nama }}</td>
                  <td>{{ $pengembalian->buku }}</td>
                  <td>{{ $pengembalian->noHp }}</td>
                  <td>{{ $pengembalian->tanggalPengembalian }}</td>
                  <td>
                    <a class="dropdown-item" href="{{ route('pengembalian.edit',$buku->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                    </a >  
                    <form action="{{ route('pengembalian.destroy',$pengembalian->id) }}" method="POST">
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