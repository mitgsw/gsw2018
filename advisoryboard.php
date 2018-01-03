<?php
$pageTitle = 'Advisory Board eam | MIT Global Startup Workshop 2018';
$headerImageSrc = 'headers/img/header1.jpg';
include('templates/nav-bar.php');
?>

    <div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
        <h1 class="parallax-text">
            <span class="hidden-xs">Advisory Board</span>
        </h1>
    </div>
    <div class="section" id="advisor-section">
        <div class="col-sm-1"></div>
        <div class="col-md-10 advisor-intro-text">
            <p>Our advisors are highly accomplished individuals with a passion for sharing their insights and experiences with current and future startup entrepreneurs.</p>
        </div>
        <div class="col-sm-1"></div>
    </div>

<?php
$scripts = "
<script src=\"splash/js/d3.js\"></script>
<script>
d3.csv(\"data/advisoryBoard.csv\", function(error, board) {
      if (error) throw error;

    var totalColumns = 4;
    var rows = board.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class=\"row advisor-row text-center\">';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < board.length){
                var advisor = board[i*totalColumns + j];
                var imageMarkup = '<div class=\"advisor col-sm-6 col-md-3\">' +
                    '<a href=\"#advisor' + advisor.name.replace(\" \",\"\") + '\"><img class=\"advisor-picture\" src=\"advisoryboard/img/' + advisor.imgpath + '\"></a>';
                markup += imageMarkup
                    +'<div class=\"advisor-name\">' +  advisor.name + '</div>'
                    +'<div class=\"advisor-role\">' +  advisor.role + '</div>'
                    +'<div class=\"advisor-association\"><img class=\"advisor-picture-association\" src=\"advisoryboard/img/' + advisor.association + '\"/>'
                    +'</div></div>';
            }
            else {
                markup += '<div class=\"advisor col-sm-6 col-md-3\"></div>';
            }
        }
        markup += '</div>';
        $(markup).appendTo(\"#advisor-section\");
    }
})
    
</script>
";

include("templates/footer.php");
?>