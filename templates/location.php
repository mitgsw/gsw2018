<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg" id="location">
    <div class="parallax-text">
        <span class="hidden-xs">Venue</span>
    </div>
</div>
<div class="section header-section">
    <div class="location-row row">
        <div class="col-md-6 col-md-6">
            <div class="location-header">27th March & 28th March (Day 1 & Day 2)</div>
            <div class="location-name"><a href="#">Factoria Italia</a></div>
            <div class="location-address">
                <p>Av. Italia 850,</p>
                <p>Santiago, Providencia,</p>
                <p>Región Metropolitana,</p>
                <p>Chile</p>
            </div>
            <div class="location-map" id="location-1">
            </div>
        </div>
        <div class="col-md-6 col-md-6">
            <div class="location-header">27th March & 28th March (Day 1 & Day 2)</div>
            <div class="location-name"><a href="#">Factoria Italia</a></div>
            <div class="location-address">
                <p>Av. Italia 850,</p>
                <p>Santiago, Providencia,</p>
                <p>Región Metropolitana,</p>
                <p>Chile</p>
            </div>
            <div class="location-map" id="location-2">
            </div>
        </div>
    </div>
    <hr>
    <div class="location-row-hotel row">
        <div class="col-md-6 col-md-6">
            <div class="section-header">Recommended Hotel</div>
            <a href="#"><div class="location-header">Hotel Name</div></a>
            <div class="location-address">
                <p>Av. Italia 850,</p>
                <p>Santiago, Providencia,</p>
                <p>Región Metropolitana,</p>
                <p>Chile</p>
            </div>
        </div>
        <div class="col-md-6 col-md-6">
            <div class="location-map" id="location-hotel"></div>
        </div>
    </div>
</div>

<?php
$scripts .= "
    <script>
        var map;
        function initMap() {
            var width = $('.col-md-6').width() - 50;
            var height = 300;
            $('.location-map').css('width',width+'px');
            $('.location-map').css('height',height+'px');

            var locations = [
                {coords:{lat: -25.363, lng: 131.044}, id:'location-1', name:'Location 1'},
                {coords:{lat: -25.363, lng: 131.044}, id:'location-2', name:'Location 1'},
                {coords:{lat: -25.363, lng: 131.044}, id:'location-hotel', name:'Recommended Hotel'}
            ];

            locations.forEach(function(d){
                map = new google.maps.Map(document.getElementById(d.id), {
                    center: d.coords,
                    zoom: 8,
                    disableDefaultUI: true
                });
                var marker = new google.maps.Marker({
                    position: d.coords,
                    map: map,
                    title: d.name
                });
            });
        }
    </script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAce8nsU3Xl9DUqTfyELOW3sT4hoZZ_nlU&callback=initMap'
            async defer></script>";
?>