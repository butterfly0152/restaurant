<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel = "stylesheet" type = "text/css" href = "stil.css" /> 
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(44.215837, 28.627389),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<title> Restaurant </title>
</head>

<body>

<div class = "container-fluid">
    
    <div class = "row">
        <img class = "img-responsive center-block" src = "./img/img10.jpg" />
    </div> <!-- end of row class -->
	
    <nav class = "navbar navbar-default">
    	<div class = "container-fluid">
       		
            <ul class = "nav navbar-nav">
            	<li><a href = "#">Home</a></li>
                <li><a href = "#">Meniu</a></li>
                <li><a href = "#">Contact</a></li>
            </ul>
            
            <ul class = "nav navbar-nav navbar-right">
            	<li><a href = "#">Sign Up</a></li>
                <li><a href = "#">Login</a></li>
            </ul>
        
        </div><!-- end of nav container class -->
     </nav>
	<div class = "row">
	<div class = "col-md-5">
    <div class = "order">
      
       <form action = "prelucreaza.php" method = "post">
            <table>
                <tr>
                    <th>Comanda rapid aici</th>
                </tr>
                
                <tr>
                    <td>Nume</td>
                    <td><input type = "text" name = "nr_cal" /></td>
                </tr>
                
                <tr>
                    <td>Telefon</td>
                    <td><input type = "text" name = "nr_cal" /></td>
                </tr>
                
                <tr>
                    <td>Numarul maxim de calorii:</td>
                    <td><input type = "text" name = "nr_cal" /></td>
                </tr>
                
                <tr>
                    <td>Adresa de livrare</td>
                    <td><input type = "text" name = "adresa" /></td>
                </tr>
                
                <tr>
                    <td>Observatii</td>
                    <td><textarea rows = "2" cols = "22" name = "obs" ></textarea></td>
                </tr>
                
                <tr>
                	<td></td>
                    <td><input type = "submit" value = "Ok" /></td>
                    
                </tr>
               
            </table>   
        </form> 
         
    </div> <!--end of order class -->
	</div><!-- end of col-md-5 class -->
    <div class = "col-md-4">
    	<img class = "img-responsive" src = "./img/img03.jpg" />
    </div><!-- end of col-md-4 class -->
    <div class = "col-md-3">
    <div id="googleMap" style="width:355px;height:330px"></div>
    </div>
    </div><!-- end of row class -->
</div> <!-- end of container class -->

</body>
</html>