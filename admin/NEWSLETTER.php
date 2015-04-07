<?php include_once "include/header.inc.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>NEWSLETTER</h1>


<table class="table table-striped">
<tr>
	<th>#</th><th>E-Mail</th>
</tr>
<?php
$q="SELECT * FROM newsletter ";
$result=mysqli_query($link,$q);
$i=0;
while($l=mysqli_fetch_array($result)){
$i++;
	echo"<tr><td>$i</td><td>".$l['email']."</td><td>";
	}
echo"<table>";
?>
	

<?php include_once "include/footer.inc.php" ?>