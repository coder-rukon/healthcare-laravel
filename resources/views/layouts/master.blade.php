@php
    $menu = App\Models\MenuModel::orderBy('menu_order', 'ASC')->get();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Scan Diagnostics</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/libraries/bootstrap.min.css">
    <!-- Bootstrap Icons CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>

        <div class="container top_header">
            <div class="header_left">
                <a href="#!">
                    <img class="img-fluid" src="assets/images/logo.png" alt="Healthcare Scan Diagnostics">
                </a>
                <div class="top_menus">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($menu as $item)
                            @if ($item->location == 'Header Top Menu')
                            @php
                                $i++;
                            @endphp
                               @if ($i >= 2)
                                 |  
                               @endif
                               <a href="{{ $item->menu_link }}" target="{{ $item->menu_link_target }}">{{ $item->menu_name }}</a>
                            @endif
                        @endforeach
                </div>
            </div>
            <div class="header_right">
                <input type="search" class="form-control form-control-sm w-auto" placeholder="search" />
                <a href="#" class="btn">Book Appointment</a>
                <a href="#!">
                    <img class="img-fluid" src="assets/images/WhatsApp_icon.png" alt="">
                </a>
                <div class="helpline">
                    <h6>Patient Helpline</h6>
                    <span>+91 06600 12345</span>
                </div>
            </div>
        </div>

        <nav>
            <div class="container d-flex justify-content-between">
                <div class="main_menus">
                    <ul>
                        @foreach ($menu as $item)
                            @if ($item->location == 'Main Menu')
                                <li><a href="{{ $item->menu_link }}" target="{{ $item->menu_link_target }}">{{ $item->menu_name }}</a> </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="nav_right">
                    @foreach ($menu as $item)
                    @if ($item->location == 'Main Menu right')
                        <a href="{{ $item->menu_link }}" target="{{ $item->menu_link_target }}">{{ $item->menu_name }}</a>
                    @endif
                    @endforeach
                </div>
            </div>
        </nav>

    </header>

    <main>
        @yield('content')

    </main>

    <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <h4>Healthcare Scan Diagnostics</h4>
                    <p><a href="tel:+917890015555">+91 7890015555</a></p>
                    <p><a href="mailto:contact@healthcarescan.in">contact@healthcarescan.in</a></p>
                    <div class="d-flex gap-3 mt-3">
                        <a href="#!"><i class="bi bi-facebook"></i></a>
                        <a href="#!"><i class="bi bi-instagram"></i></a>
                        <a href="#!"><i class="bi bi-youtube"></i></a>
                        <a href="#!"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul>
                        @foreach ($menu as $item)
                            @if ($item->location == 'Footer Quick Links')
                                <li><a href="{{ $item->menu_link }}" target="{{ $item->menu_link_target }}">{{ $item->menu_name }}</a> </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-3">
                    <h5>Services</h5>
                    <ul>
                        @foreach ($menu as $item)
                            @if ($item->location == 'Footer Services')
                                <li><a href="{{ $item->menu_link }}" target="{{ $item->menu_link_target }}">{{ $item->menu_name }}</a> </li>
                            @endif
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-3">
                    <p>
                        You can also stay connected with
                        <br>
                        Providers using free
                        <br>
                        Healthcare scan Diagnostics App
                    </p>
                    <p class="app_icon mt-3">
                        <a href="#!"><i class="bi bi-apple"></i> <span>Apple Store</span></a>
                        | &nbsp;
                        <a href="#!"><i class="bi bi-android2"></i> <span>Google Play</span></a>
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/libraries/bootstrap.bundle.min.js"></script>
</body>

</html>