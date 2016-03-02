<?php 

if(isset($_POST['fileToUpload'])){ $fileToUpload = $_POST['fileToUpload']; } 


?>
<?php
session_start();

 ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome member; ?></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label>Welcome To Mohammad's Kingdom</label>
</div>
    <div>
        
    </div>
    <div>
        
    </div>
    <div>
        
    </div>
        </div>

</body>
    <body>
        <div id ="middle">
            </div id ="left">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div id="header">
 <div id="left">  
        Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
    </body> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <div id="content">
    Hey!! try out the map!! and also REFRESH THE PAGE TO SEE THE BACKGROUND CHANGE!! A COOL IMAGE BACKGROUND API CHANGE!!
    </div>
    
<head>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:500px;height:380px;"></div>
</body>

</html> 
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">

    var keyword = "mountains";

    $(document).ready(function(){

        $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?",
        {
            tags: keyword,
            tagmode: "any",
            format: "json"
        },
        function(data) {
            var rnd = Math.floor(Math.random() * data.items.length);

            var image_src = data.items[rnd]['media']['m'].replace("_m", "_b");

            $('body').css('background-image', "url('" + image_src + "')");

        });

    });
    </script>
</head>
<body>

</body>
<a href="weather.php"><font color="white"><u>Visit my weather API</a></u></font>
</html>
