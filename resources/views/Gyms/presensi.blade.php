<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Boostrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>GD5_C_11438</title>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            {{-- Modal --}}
            <!-- Button trigger modal -->

            <!-- Modal -->
           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Apakah Yakin Logout?</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <a type="button" class="btn btn-danger" href="{{ url('Login') }}">Logout</a>
                    </div>
                  </div>
                </div>
              </div>


            <div class="modal" id="exampleModal2" tabindex="" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel2"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Kelas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-content p-3">
                            <h1>Boxing</h1>
                            <p> Nama instruktur&emsp;&emsp;&nbsp;:I Putu Trisna Budi Utama <br>
                                Kode Instruktur &emsp;&emsp;&nbsp;:210711438 <br>
                                Haris Kelas &emsp;&emsp;&emsp;&emsp;&nbsp;:{{ now()->format('l') }} <br>
                                Tanggal Kelas&emsp;&emsp;&emsp;&nbsp;&nbsp;:{{ now()->format('d-M-Y') }} <br>
                                Ruang &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:Kelas C <br>
                                Rating &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;:<i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                                <i class="fas fa-star fa-xs"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of Modal --}}
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->
                    <li class="nav-item d-flex align-items-center">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </button>
                        <div class="navbar-search-block">
                            <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img src=" {{ asset('img/GofitLogo.png') }}" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">Gofit UAJY</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel d-flex mb-3 mt-3 pb-3">
                        <div class="image">
                            <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"> Trisna Utama </a>
                        </div>
                    </div>
                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="{{ url('gyms') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle"></i>
                                    <p> Home</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('presensi') }}" class="nav-link">
                                    <i class="nav-icon far fa-circle"></i>
                                    <p> Presensi Member</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="card mb-3 me-5 ms-5 mt-3">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="{{ url('https://res.cloudinary.com/display97/image/upload/7930/boxing2-224119.jpeg') }}"
                                    class="rounded-4 w-100 border-dark border-3 border" alt="boxing pic">
                            </div>
                            <div class="col-md-5 ms-3">
                                <p class="card-title fs-2 fw-bold">Boxing <button class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal2"><i
                                            class="fa-regular fa-eye fa-beat fa-xs"></i></button></p>
                                <p class="card-text fw-bold">Instruktur : Tebri <br>
                                    Ruang : Kelas D <br>
                                    Total Member : 5 <br>
                                    Rating : <i class="fas fa-star fa-xs" style="color: yellow"></i><i
                                        class="fas fa-star fa-xs" style="color: yellow"></i><i
                                        class="fas fa-star fa-xs" style="color: yellow"></i><i
                                        class="fas fa-star fa-xs" style="color: yellow"></i><i
                                        class="fas fa-star fa-xs" style="color: yellow"></i></p>
                            </div>
                            <div class="col mt-1">
                                <p class="card-title fs-5 fw-bold float-end"> Tanggal :
                                    {{ now()->format('l, d-M-Y ') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="me-5 ms-5">
                    <hr>
                    <h3 class="d-inline-block">Daftar Member</h3>

                    <a id="liveToastBtn" class="btn btn-primary float-end"> <i class="fa-solid fa-check fa-beat"></i>
                        Presensi</a>
                    <div class="row">
                        @forelse ($userData as $data)
                            <div class="col-4">
                                <a id="liveToastBtn">
                                    @if ($data['jenis_kartu'] == 'Gold')
                                        <div class="card border-warning border-3 border">
                                            <img src="{{ url($image) }}" class="object-fit-cover rounded-top">
                                            <p class="p-2"> <span class="fw-bold">{{ $data['nama'] }}</span> <br>
                                                Email : {{ $data['Email'] }} <br>
                                                No Tlep : {{ $data['noTlp'] }} <br>
                                                Jenis Kartu : <span
                                                    class="badge rounded-pill text-bg-warning">Gold</span> <br>
                                            @elseif($data['jenis_kartu'] == 'Silver')
                                            <div class="card border-secondary border-3 border">
                                                <img src="{{ url($image) }}" class="object-fit-cover rounded-top">
                                                <p class="p-2"> <span class="fw-bold">{{ $data['nama'] }}</span>
                                                    <br>
                                                    Email : {{ $data['Email'] }} <br>
                                                    No Tlep : {{ $data['noTlp'] }} <br>
                                                    Jenis Kartu : <span
                                                        class="badge rounded-pill text-bg-secondary">Silver</span> <br>
                                                @else
                                                <div class="card border-dark border-3 border">
                                                    <img src="{{ url($image) }}"
                                                        class="object-fit-cover rounded-top">
                                                    <p class="p-2"> <span
                                                            class="fw-bold">{{ $data['nama'] }}</span> <br>
                                                        Email : {{ $data['Email'] }} <br>
                                                        No Tlep : {{ $data['noTlp'] }} <br>
                                                        Jenis Kartu : <span
                                                            class="badge rounded-pill text-bg-dark">Black</span> <br>
                                    @endif
                                    @if ($data['metode_pembayaran'] == 'Deposit Uang')
                                        Metode Pembayaran : <span class="badge bg-success">Deposit Uang</span>
                                        </p>
                            </div>
                        @else
                            Metode Pembayaran : <span class="badge bg-primary">Deposit Kelas</span>
                            </p>
                    </div>
                    </p>
                    @endif
                    </a>
                </div>
            @empty
                @endforelse
            </div>
            <div class="position-fixed toast align-items-center text-bg-primary float-end bottom-0 end-0 mb-3 me-2 border-0"
                role="alert" aria-live="assertive" aria-atomic="true" id="liveToast">
                <div class="d-flex">
                    <div class="toast-body">
                        <i class="fa-solid fa-check fa-beat"></i> Berhasil Mempresensi Member
                    </div>
                    <button type="button" class="btn-close btn-close-white m-auto me-2" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="d-none d-sm-inline float-right">
                [ 210711438 ]
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Gofit</a>. </strong> All rights
            reserved.
        </footer>
        </div>
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 5.3 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script>
            const toastTrigger = document.getElementById('liveToastBtn')
            const toastLiveExample = document.getElementById('liveToast')

            if (toastTrigger) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                toastTrigger.addEventListener('click', () => {
                    toastBootstrap.show()
                })
            }
        </script>
    </body>

</html>
