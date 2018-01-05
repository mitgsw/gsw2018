<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/workshops_big.jpg">
    <div class="parallax-text">
        <span class="hidden-xs">Our Speakers</span>
    </div>
</div>
<div class="section" id="speaker-section">
    <div class="section-header section-header-highlighted">An esteemed panel of global speakers</div>
    <br>
    <br>
</div>
<?php
$scripts .= "
<script>
   d3.csv(\"data/speakers.csv\", function(error, speakers) {
      if (error) throw error;
   
   speakers.forEach(function(d){
       d.id = +(d.id);
   });   
   
    var totalColumns = 4;
    var rows = speakers.length/totalColumns;
    for (var i = 0; i < rows; i++){
        var markup = '<div class=\'row speaker-row text-center\'>';
        for (var j = 0; j < totalColumns; j++){
            var index = i*totalColumns + j;
            if (index < speakers.length){
                var speaker = speakers[i*totalColumns + j];
                var imageMarkup = '<div class=\'speaker col-sm-6 col-md-3\'>' +
                    '<img class=\'speaker-picture-association\' src=\'speaker/img/' + speaker.association + '\'/>' +
                    '<a href=\'speakers.php#speaker' + speaker.id +'\'><img class=\'speaker-picture\' src=\'speaker/img/' + speaker.imgpath + '\'></a>';
                var nameSpeaker = '<a class=\'link-to-speaker\' href=\'speakers.php#speaker' + speaker.id +'\'>'+speaker.name+'</a>';
                markup += imageMarkup + nameSpeaker + '</div>';
            }
            else {
                markup += '<div class=\'speaker col-sm-6 col-md-3\'></div>';
            }
        }
        markup += '</div>';
        $(markup).appendTo('#speaker-section');
    }
   
   });
   
   
</script>";
