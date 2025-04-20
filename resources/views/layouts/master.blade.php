@php
    $menu = App\Models\MenuModel::orderBy('menu_order', 'ASC')->get();
    $settingsData = App\Models\SettingsModel::all();
    $settings = [];
    foreach ($settingsData as $item) {
        $settings[$item->settings_name] = $item->settings_value;
    }
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
                <a href="{{isset($settings['book_appointment_link']) ? $settings['book_appointment_link'] : '' }}" class="btn">Book Appointment</a>
                <a href="#!">
                    <img class="img-fluid" src="assets/images/WhatsApp_icon.png" alt="">
                </a>
                <div class="helpline">
                    <h6>Patient Helpline</h6>
                    <span>{{isset($settings['header_whatsapp']) ? $settings['header_whatsapp'] : '' }}</span>
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
                    {!!isset($settings['contact_us_info']) ? $settings['contact_us_info'] : '' !!}
                    
                    <div class="d-flex gap-3 mt-3">
                        {!!isset($settings['facebook_link']) ? '<a target="_blank" href="'.$settings['facebook_link'].'"><i class="bi bi-facebook"></i></a>' : '' !!}
                        {!!isset($settings['instagram_link']) ? '<a target="_blank" href="'.$settings['instagram_link'].'"><i class="bi bi-instagram"></i></a>' : '' !!}
                        {!!isset($settings['youtube_link']) ? '<a target="_blank" href="'.$settings['youtube_link'].'"><i class="bi bi-youtube"></i></a>' : '' !!}
                        {!!isset($settings['linkedin_link']) ? '<a target="_blank" href="'.$settings['linkedin_link'].'"><i class="bi bi-linkedin"></i></a>' : '' !!}
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
                        {!!isset($settings['app_links_tilte']) ? $settings['app_links_tilte'] : '' !!}
                    </p>
                    <p class="app_icon mt-3">
                        <a href="{{isset($settings['app_appstore_link']) ? $settings['app_appstore_link'] : '#' }}"><i class="bi bi-apple"></i> <span>Apple Store</span></a>
                        | &nbsp;
                        <a href="{{isset($settings['app_playstore_link']) ? $settings['app_playstore_link'] : '#' }}"><i class="bi bi-android2"></i> <span>Google Play</span></a>
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/libraries/bootstrap.bundle.min.js"></script>
</body>

</html>