<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>Membres Montpellier adultes Nataraj Bollywood</title>
</head>

<body>

<?php
if (isset($_POST['login']) AND $_POST['login'] == "MPL") //Mot de passe correct
    
{

?>
        <h4> Bonne répétition !</h4> 
        <section class="row">
        	<div class="col-md-3"><h4> Ottagathai </h4></div>
        	<div class="col-md-3"><a href="https://1drv.ms/v/s!AswS-zdviXgagRnbBpC51UylJDz5"><img src="photo_ottagathai.jpg" alt="Ottagathai"/></a></div>
        	<div class="col-md-3"><h4> Tattad </h4></div>
        	<div class="col-md-3"><a href="https://1drv.ms/i/s!AswS-zdviXgagWGN1kqIRpjR7Hb2"><img src="photo_tattad.jpg" alt="Tattad"/></a></div>
        </section>
 	<?php
}


else // Mot de passe incorrect
    {
        echo '<p>Mot de passe incorrect</p>';
    } 
?>



</body>
</html>

