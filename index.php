<body style="margin-left:0px;margin-top:0px">
<meta name="viewport" content="width=device-width, initial-scale=6">	
		<?php
		include("menutab.html");
		?>

		<h1 style="margin-top:60px">The Land for sale</h1>
		<?php
		
	$con=mysqli_connect("localhost","root","","project");
	$q=mysqli_query($con,"select*from house group by id");
	while($f=mysqli_fetch_array($q)){
		?>  <table style="border:0px solid grey;margin-top:0px">
        <tr><td class="enlarge-image">
<a href="viewproducts.php?odsa=<?php echo $f['id'];?>">
<img src="<?php echo $f['image'];?>" width="297" height="200" "></img></a>
	<b>
		<div class="filh">
      
			<?php echo $f['district_location'];?>
			<?php echo $f['sector_location'];?><br>
			<?php echo $f['price'];?><br><?php echo $f['category'];?>
			<?php echo $f['action'];?>
			<br></td></tr>
    </div></div>
			</body>


		<?php
			}
			?>
		</table><br><br><br><br><br><p>

        <style>
            table{
float:left;


            }
			img{
				margin:0px;
			}
            tr{
                float:left;
                margin:1px;
            }

			</style>
<br></table><br>
			
<div class="lcc">

<style>
    .lcc{
        margin-top:700px;
        margin-left:0px;
        margin-bottom:0px;
    }
	
</style>


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

	}
    body{
    bottom: 0px;
    left: 0px;
    position: absolute;
    right: 0px;
    top: 0px;
    }

</style>