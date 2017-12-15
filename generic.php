<?php
	$pageTitle = "MIT Global Startup Workshop 2018";
	$headerImageSrc = "headers/img/header1.jpg";
	include("header.php");
?>

<div class="section" id="speaker-section">
    <div class="section-header">This year, we welcome an esteemed panel of global speakers</div>
    <br>
    <br>
</div>
<div class="section" id="speaker-section-expanded">
    <hr>
    <div class="section-header">About Our Speakers</div>
    <br>
    <div class="row speaker-expanded-bio">
        <div class="col-md-3"></div>
        <div class="col-md-9"></div>
    </div>
</div>

<script>
    var speakers = [
        {name:"Firstname Lastname", imgpath:"ramiabiakl.jpg", association:"mit.png", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Firstname Last2", imgpath:"ramiabiakl.jpg", association:"harvard.svg", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Testname Lastname", imgpath:"ramiabiakl.jpg", association:"mit.png", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Lorem Ipsum", imgpath:"ramiabiakl.jpg", association:"mit.png", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Firstname Lastname3", imgpath:"ramiabiakl.jpg", association:"", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Firstname4 Lastname", imgpath:"ramiabiakl.jpg", association:"mit.png", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."}
    ]
    var totalColumns = 4;
    var rows = speakers.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class="row speaker-row text-center">';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < speakers.length){
                var speaker = speakers[i*totalColumns + j];
                imageMarkup = '<div class="speaker col-sm-6 col-md-3">' +
                    '<img class="speaker-picture-association" src="speaker/img/' +  speaker.association + '">' +
                    '<a href="#speaker' + speaker.name.replace(" ","") + '"><img class="speaker-picture" src="speaker/img/' + speaker.imgpath + '"></a>';
                markup += imageMarkup + speaker.name + '</div>';

                speakerInfoMarkup = '<div class="row speaker-expanded-bio" id="speaker' + speaker.name.replace(" ","") + '">' +
                    imageMarkup + '</div><div class="col-sm-6 col-md-9 speaker-expanded-text">'
                    + '<div class="speaker-expanded-name">' + speaker.name + '</div>'
                    + speaker.bio + '</div></div>';
                $(speakerInfoMarkup).appendTo("#speaker-section-expanded");
            }
            else {
                markup += '<div class="speaker col-sm-6 col-md-3"></div>';
            }
        }
        markup += '</div>';
        $(markup).appendTo("#speaker-section");
    }
</script>
<!-- END GENERIC SECTION - IMAGES -->





<!-- GENERIC SECTION - TEXT -->
<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header2.jpg">
    <div class="parallax-text">
        <span class="hidden-xs">Generic Title</span>
    </div>
</div>
<div class="section header-section">
    <div class="section-header">Generic Section Description</div>
    <br>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div>
<!-- END GENERIC TEXT SECTION -->




<!-- GENERIC SECTION - TEAM -->
<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
    <div class="parallax-text">
        <span class="hidden-xs">Organizing Team</span>
    </div>
</div>
<div class="section" id="team-section">
    <div class="section-header-light">Our team consists of individuals across all parts of the MIT campus, and is supported by an accomplished advisory board.</div>
    <br>
    <br>
</div>
<div class="section" id="team-section-expanded">
    <hr>
    <div class="section-header">About Our Team</div>
    <br>
</div>

<script>
    var teams = [
        {name:"Firstname Lastname", imgpath:"ramiabiakl.jpg", role:"Tech Team", association:"MIT School of __", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Firstname Last2", imgpath:"ramiabiakl.jpg", role:"Tech Team",  association:"Harvard School of __", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Testname Lastname", imgpath:"ramiabiakl.jpg", role:"Tech Team",  association:"MIT School of ___", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Lorem Ipsum", imgpath:"ramiabiakl.jpg", role:"Tech Team",  association:"Test Department of __", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Firstname Lastname3", imgpath:"ramiabiakl.jpg", role:"Tech Team",  association:"Placeholder School", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."},
        {name:"Firstname4 Lastname", imgpath:"ramiabiakl.jpg", role:"Tech Team",  association:"MIT", bio:"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."}
    ]
    var totalColumns = 4;
    var rows = teams.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class="row team-row text-center">';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < teams.length){
                var team = teams[i*totalColumns + j];
                imageMarkup = '<div class="team col-sm-6 col-md-3">' +
                    '<a href="#team' + team.name.replace(" ","") + '"><img class="team-picture" src="team/img/' + team.imgpath + '"></a>';
                markup += imageMarkup
                    +'<div class="team-name">' +  team.name + '</div>'
                    +'<div class="team-role">' +  team.role + '</div>'
                    +'<div class="team-association">' +  team.association + '</div></div>';

                teamInfoMarkup = '<div class="row team-expanded-bio" id="team' + team.name.replace(" ","") + '">' +
                    imageMarkup + '</div><div class="col-sm-6 col-md-9">'
                    +'<div class="team-expanded-name">' +  team.name + '</div>'
                    +'<div class="team-expanded-role">' +  team.role + '</div>'
                    +'<div class="team-expanded-association">' +  team.association + '</div>'
                    +'<div class="team-expanded-text">' + team.bio + '</div></div></div>';
                $(teamInfoMarkup).appendTo("#team-section-expanded");
            }
            else {
                markup += '<div class="team col-sm-6 col-md-3"></div>';
            }
        }
        markup += '</div>';
        $(markup).appendTo("#team-section");
    }
</script>
<!-- END GENERIC SECTION - TEAM -->




<!-- GENERIC SECTION - TEXT -->
<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
    <div class="parallax-text">
        <span class="hidden-xs">Generic Title</span>
    </div>
</div>
<div class="section header-section">
    <div class="section-header">Generic Section Description</div>
    <br>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div>
<!-- END GENERIC TEXT SECTION -->


<!-- GENERIC SECTION - LOCATIONS -->
<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
    <div class="parallax-text">
        <span class="hidden-xs">Location</span>
    </div>
</div>
<div class="section header-section">
    <div class="section-header">Conference Venue</div>
    <br>
    <div class="location-row row">
        <div class="col-md-6 col-md-6">
            <div class="location-header">27th March & 28th March (Day 1 & Day 2)</div>
            <div class="location-name"><a href="#">Factoria Italia</a></div>
            <div class="location-address">
                Av. Italia 850,<br>
                Santiago, Providencia,<br>
                Región Metropolitana,<br>
                Chile
            </div>
            <div class="location-map" id="location-1">
            </div>
        </div>
        <div class="col-md-6 col-md-6">
            <div class="location-header">27th March & 28th March (Day 1 & Day 2)</div>
            <a href="#"><div class="location-name">Factoria Italia</div></a>
            <div class="location-address">
                Av. Italia 850,<br>
                Santiago, Providencia,<br>
                Región Metropolitana,<br>
                Chile
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
                Av. Italia 850,<br>
                Santiago, Providencia,<br>
                Región Metropolitana,<br>
                Chile
            </div>
        </div>
        <div class="col-md-6 col-md-6">
            <div class="location-map" id="location-hotel"></div>
        </div>
    </div>
</div>
<script>
    var map;
    function initMap() {
        var width = $(".col-md-6").width() - 50;
        $(".location-map").css("width",width+"px");
        $(".location-map").css("height",width+"px");

        var locations = [
            {coords:{lat: -25.363, lng: 131.044}, id:"location-1", name:"Location 1"},
            {coords:{lat: -25.363, lng: 131.044}, id:"location-2", name:"Location 1"},
            {coords:{lat: -25.363, lng: 131.044}, id:"location-hotel", name:"Recommended Hotel"}
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAce8nsU3Xl9DUqTfyELOW3sT4hoZZ_nlU&callback=initMap"
        async defer></script>
<!-- END GENERIC TEXT SECTION -->




<!-- GENERIC SECTION - FOOTER -->
<div class="parallax-window" data-parallax="scroll" data-image-src="splash/img/parallax1.jpg" id="parallax_social_media">
    <div class="parallax-text" id="parallax_social_media_text">
        Connect <span class="hidden-xs">with Us</span>
    </div>
</div>

<div id="section_social_media" class="section">
    <div class="row text-center">
        <div class="col-xs-4 col-md-offset-1 col-md-2">
            <a href="https://twitter.com/MITGSW"><span class="fa fa-twitter-square sm-icon"></span></a>
        </div>
        <div class="col-xs-4 col-md-2">
            <a href="https://www.facebook.com/MITGSW/"><span class="fa fa-facebook-square sm-icon"></span></a>
        </div>
        <div class="col-xs-4 col-md-2">
            <a href="https://www.instagram.com/MITGSW/"><span class="fa fa-instagram sm-icon"></span></a>
        </div>
        <div class="col-xs-4 col-xs-offset-2 col-md-offset-0 col-md-2">
            <a href="https://www.linkedin.com/groups/4117846"><span class="fa fa-linkedin-square sm-icon"></span></a>
        </div>
        <div class="col-xs-4 col-md-2">
            <a href="mailto:gsw-tech@mit.edu"><span class="fa fa-envelope-square sm-icon"></span></a>
        </div>
    </div>
</div>

<?php include("footer.php") ?>