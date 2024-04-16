
<body style="margin-left:0px;margin-top:0px">
<?php
include("menutab.html");
$id=$_GET['odsa'];
		?><a href="project.php" target="cl">Back</a>
<?php
$con=mysqli_connect("localhost","root","","project");
$q=mysqli_query($con,"select*from house where id='$id'");
while($f=mysqli_fetch_array($q)){

	?><center><table style="border:0px solid black;margin-top:80px;">
	<tr>
		<td><b><h2><img src="<?php echo $f['image'];?>" width="300" height="240"><br>
		Names:<?php echo $f['name'];?><br>
		District:<?php echo $f['district_location'];?><br>
		Sector:<?php echo $f['sector_location'];?><br>
		Price:<?php echo $f['price'];?><br>
		Actiion:<?php echo $f['action'];?><br>
		
		Category: <?php echo $f['category'];?></td>
	</tr>
		</body>


	<?php
		}
		?>
	</table>

<div class="col" style="width: 100%;">
<div class="columns"><h1 style="color: white"><center>Adress</h1><h4 style="color: white">Rwanda-kigali-nyarugenge<br>
At road kk23747-24302</h4>
<h3 style="color: white">Contact</h3><h4 style="color: white">phone number:0787549324<br>
  facebook:onlineshop<br>
instagram:onlishop<br>
twitter:shopon<br>
e-mail:onlineshoping1@gmail.com</h4>
<h5 style="color: white">&copy 2022 jaxofff</h5></div></div>
<style type="text/css">
   a{
    font-size: 10px;
  }  @media screen and (max-width: 768px) {
    .columns {
      width:100%;
    }
	img{
		width:330;
	}
	body{
		margin-left:0px;
	}

     .enlarge-image {
  transition: transform 0.2s ease-in-out;
}

.enlarge-image:hover {
  transform: scale(0.2);
  /* Adjust the scale factor as needed */
}
  }
 .enlarge-image {
  transition: transform 6s ease-in-out;
 
}

.enlarge-image:hover {
  transform: scale(1.2); /* Adjust the scale factor as needed */
}
		.columns{
      text-align:center;
		float: left;
bottom:0;
margin-left:0px;
		background-color:#333;
		border: 0.2px solid black;
    width: 100%;
	border:0px;
	position:bottom;
	margin-right:0px;

	}
    body{
    bottom: 0px;
    left: 0px;
    position: absolute;
    right: 0px;
    top: 0px;
    }

</style>