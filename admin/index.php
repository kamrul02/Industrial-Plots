<?php include_once "include/header.inc.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Dashboard <small>Dashboard Home</small></h1>
<ul>
<li><a href="hotel.php">Add Industrial Plots</a>
<!-- <li><a href="office.php">Add Office</a>
<li><a href="shop.php">Add Shopping Mall</a> -->
<li><a href="core.php">Add Industrial Buildings</a>

</ul>

<h3>Result</h3><br>
<table class="table table-striped">
<tr>
	<th>Type</th><th>Continent</th><th>Country</th><th>State</th><th>City</th><th>Property Type</th><th>Total Investment</th><th>UPDATE and  Add Translations</th><th>DELETE</th>
</tr>
<?php
$q="SELECT type,continent.EnName,country.EnName,state.EnName,city.Name,property,investd,investf,job.id FROM job,country,state,continent,city WHERE job.country=country.id AND job.continent=continent.id AND job.state=state.id AND job.city=city.id ";
$result=mysqli_query($link,$q);
while($l=mysqli_fetch_array($result))
	echo"<tr><td>".$l['type']."</td><td>".$l[1]."</td><td>".$l[2]."</td><td>".utf8_encode($l[3])."</td><td>".$l[4]."</td><td>".$l['property']."</td><td>$".$l['investd']."-$".$l['investf']."</td><td><a href='update.php?post=".$l[8]."' >Updateand  Add Translations</a></td><td><a href='delete.php?post=".$l[8]."' >Delete</a></td></tr>";
	
echo"<table>";
?>
	

<?php include_once "include/footer.inc.php" ?>