<div class="parallax-window header" data-parallax="scroll" data-image-src="headers/img/header1.jpg">
    <div class="parallax-text">
        <span class="hidden-xs">Our Speakers</span>
    </div>
</div>
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