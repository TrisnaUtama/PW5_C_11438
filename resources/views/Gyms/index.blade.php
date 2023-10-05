@extends('dashboard')
@section('content')
    <!-- Main content -->
    <style>
        .gambar {
            height: 100px;
            border-radius: 100px;
            border: 1px solid black;
            background-image: none;
        }

        .gambarKelas {
            width: 300px;
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <h1>Gofit Analysis</h1>
            <div class="row align-items-center mt-3">
                <!-- Colom 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card mx-3 p-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img class="gambar me-2 p-1" src="{{ asset('img/foto1.png') }}" alt="">
                                <div class="mt-3 text-start">
                                    <p class="m-0">Total Member</p>
                                    <h4>100</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Colom 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card mx-3 p-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img class="gambar me-2 p-3" src="{{ asset('img/foto2.png') }}" alt="">
                                <div class="mt-3 text-start">
                                    <p class="m-0">Jumlah Trainer</p>
                                    <h4>20</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Colom 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card mx-3 p-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img class="gambar me-2 p-3" src="{{ asset('img/foto3.png') }}" alt="">
                                <div class="mt-3 text-start">
                                    <p class="m-0">Pendapatan</p>
                                    <h4>Rp 3.000.000</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Colom 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="card mx-3 p-0">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img class="gambar me-2 p-3" src="{{ asset('img/foto4.png') }}" alt="">
                                <div class="mt-3 text-start">
                                    <p class="m-0">Rating</p>
                                    <h4>
                                        <ul class="list-unstyled d-flex flexrow mb-0" style="color: Gold;">
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star fa-xs"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star-half faxs"></i>
                                            </li>
                                        </ul>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <h1>Fasilitas Kelas Gofit</h1>
            <table class="table-striped border-dark table text-center">
                <tr class="">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Fasilitas</th>
                    <th>Instruktur</th>
                    <th>Ruang</th>
                    <th>Rating</th>
                </tr>
                @forelse ($kelas as $item)
                    <tr>
                        <td>{{ $item['no'] }} </td>
                        <td><img class="gambarKelas rounded" src="{{ $item['gambar'] }}" alt=""></td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['instruktur'] }}</td>
                        <td>{{ $item['ruang'] }}</td>
                        <td>
                            @if ($item['rating'] == 5)
                                <div class="mb-0" style="color: black;">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                            @elseif ($item['rating'] == 4)
                                <div class="mb-0" style="color: black;">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                            @elseif ($item['rating'] == 3)
                                <div class="mb-0" style="color: black;">
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                    <i class="fas fa-star fa-xs"></i>
                                </div>
                            @endif
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Kelas masi kosong
                    </div>
                @endforelse
            </table>
        </div>
    </div>
@endsection
