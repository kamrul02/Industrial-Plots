<?php include_once "include/header.inc.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact</h1>


<table class="table table-striped">
<tr>
	<th>#</th><th>Title</th><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Fax</th><th>Phone</th><th>Cell Phone</th><th>Street</th><th>ZIP/City</th><th>Message</th>
</tr>
<?php
$q="SELECT * FROM contact ";
$result=mysqli_query($link,$q);
$i=0;
while($l=mysqli_fetch_array($result)){
$i++;
	echo"<tr><td>$i</td><td>".$l['title']."</td><td>".$l['fn']."</td><td>".utf8_encode($l['ln'])."</td><td>".$l['mail']."</td><td>".$l['fax']."</td><td>".$l['phone']."</td><td>".$l['mobile']."</td><td>".$l['street']."</td><td>".$l['zip']."</td><td>".$l['msg']."</td></tr>";
	}
echo"<table>";
?>
	

<?php include_once "include/footer.inc.php" ?>