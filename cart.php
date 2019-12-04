<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
			.splitl {
			height: 100%;
			width: 19%;
			position: fixed;
			z-index: 1;
			top: 0;
			overflow-x: hidden;
			padding-top: 20px;
			}
			.splitr {
			height: 100%;
			width: 81%;
			position: fixed;
			z-index: 1;
			top: 0;
			overflow-x: hidden;
			padding-top: 20px;
			}
			
			.left {
			left: 0;
			top:60px;
			background-color: #111;
			}
			.right {
            right: 0;
			top:60px;
			}
			
			.sidenav {
		  height: 100%;
		  width: 18%;
		  position: fixed;
		  z-index: 1;
		  top: 60px;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  padding-top: 20px;
		}

		.sidenav a {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 25px;
		  color: #FFF;
		  display: block;
		}

		.sidenav a:hover {
		  color: #f1f1f1;
		}

		.main {
		  margin-left: 160px; /* Same as the width of the sidenav */
		  font-size: 28px; /* Increased text to enable scrolling */
		  padding: 0px 10px;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
</style>
<title>Collectors Spot online</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="height:60px;background-color:#000000;align:center;">
      <img src="logo.jpg"height="50px"width="300px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	<div class="splitl left">
		<div class="sidenav">
		    <a href="cart.php">Cart</a><br/>
			<a href="coin.php">Coins</a><br/>
			<a href="note.php">Notes</a><br/>
			<a href="stamp.php">Stamps</a><br/>
			<a href="add.php">Exchange</a>
			<?php 
			echo"<li><a href='logout.php'><i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>Logout</a></li>";
			?>
		</div>
	</div>
		<div class="splitr right">
		</div>
		<div style="background-color:#000000; height:120px; text-color:'white';margin-top:10px;">
	  <table align="center">
	  <tr>
	      <td>
		     <h4>Home</h4>
			 <ul>
			 <li>Log Out</li>
			 <li>Connectivity</li>
			 <li>About us</li>
			 </ul>
		  </td>
		  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <td>
		     <h4>My Exchangeables</h4>
			 <ul>
			 <li>Coin</li>
			 <li>Notes</li>
			 <li>Stamp</li>
			 </ul>
		  </td>
	   </tr>
	   </table>
	</div>
</body>