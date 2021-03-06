@extends('layouts.master')

<body>
    <nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="#">Riska</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
        <a class="nav-link text-dark" href="#">Features</a>
        <a class="nav-link text-dark" href="#">Pricing</a>
        <a class="nav-link disabled text-dark">Disabled</a>
      </div>
    </div>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success btn-success text-black" type="submit">Search</button>
    </form>
  </div>
</nav>
    </body>

    @section('content')
    <div class="text-bg-info p-3">
        <div class="container">
        <h1 align="center">Data Mahasiswa</h1>
            <a class="btn btn-warning" href="/mahasiswa/create">+ Tambahkan Mahasiswa</a>
            <table class="table table-dark table-hover">
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>JENIS KELAMIN</th>
                    <th>NIM</th>
                    <th>PRODI</th>
                    <th>SEMESTER</th>
                    <th>ALAMAT</th>
                    <th>OPSI</th>
                </tr>
                @foreach($mahasiswa as $m)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->email}}</td>
                        <td>{{$m->jenis_kelamin}}</td>
                        <td>{{$m->nim}}</td>
                        <td>{{$m->prodi}}</td>
                        <td>{{$m->semester}}</td>
                        <td>{{$m->alamat}}</td>
                        <td>
                            <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                            <form action="/mahasiswa/{{$m->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        </div>
@endsection