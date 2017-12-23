<?php
    $pageTitle = 'Team | MIT Global Startup Workshop 2018';
    $headerImageSrc = 'headers/img/header1.jpg';
    include('templates/nav-bar.php');
?>

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

<?php
$scripts = "
<script>
    var teams = [
        {name:\"Firstname Lastname\", imgpath:\"ramiabiakl.jpg\", role:\"Tech Team\", association:\"MIT School of __\", bio:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"},
        {name:\"Firstname Last2\", imgpath:\"ramiabiakl.jpg\", role:\"Tech Team\",  association:\"Harvard School of __\", bio:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"},
        {name:\"Testname Lastname\", imgpath:\"ramiabiakl.jpg\", role:\"Tech Team\",  association:\"MIT School of ___\", bio:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"},
        {name:\"Lorem Ipsum\", imgpath:\"ramiabiakl.jpg\", role:\"Tech Team\",  association:\"Test Department of __\", bio:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"},
        {name:\"Firstname Lastname3\", imgpath:\"ramiabiakl.jpg\", role:\"Tech Team\",  association:\"Placeholder School\", bio:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"},
        {name:\"Firstname4 Lastname\", imgpath:\"ramiabiakl.jpg\", role:\"Tech Team\",  association:\"MIT\", bio:\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\"}
    ]
    var totalColumns = 4;
    var rows = teams.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class=\"row team-row text-center\">';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < teams.length){
                var team = teams[i*totalColumns + j];
                imageMarkup = '<div class=\"team col-sm-6 col-md-3\">' +
                    '<a href=\"#team' + team.name.replace(\" \",\"\") + '\"><img class=\"team-picture\" src=\"team/img/' + team.imgpath + '\"></a>';
                markup += imageMarkup
                    +'<div class=\"team-name\">' +  team.name + '</div>'
                    +'<div class=\"team-role\">' +  team.role + '</div>'
                    +'<div class=\"team-association\">' +  team.association + '</div></div>';

                teamInfoMarkup = '<div class=\"row team-expanded-bio\" id=\"team' + team.name.replace(\" \",\"\") + '\">' +
                    imageMarkup + '</div><div class=\"col-sm-6 col-md-9\">'
                    +'<div class=\"team-expanded-name\">' +  team.name + '</div>'
                    +'<div class=\"team-expanded-role\">' +  team.role + '</div>'
                    +'<div class=\"team-expanded-association\">' +  team.association + '</div>'
                    +'<div class=\"team-expanded-text\">' + team.bio + '</div></div></div>';
                $(teamInfoMarkup).appendTo(\"#team-section-expanded\");
            }
            else {
                markup += '<div class=\"team col-sm-6 col-md-3\"></div>';
            }
        }
        markup += '</div>';
        $(markup).appendTo(\"#team-section\");
    }
</script>
";

include("templates/footer.php");
?>