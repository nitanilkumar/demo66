@include('global.header') 
<body>
    <div class="wrapper">
        @include('global.sidebar')  
        <div class="main-panel">
            <!-- Navbar -->
             @include('global.nav')
            <!-- End Navbar -->
            <div class="map-container">
                <div id="map"></div>
            </div>
             @include('global.fotter') 