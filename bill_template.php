<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.card{
			left: 500px;
			right: 500px;
		}
	</style>
  </head>
  <body background="bg7.png">


<div class="row ml-3 mt-2 my-3" >
<div class="col-lg-4 col-sm-6 portfolio-item" ><br>
<div class="card" style="width:350px;">
<img class="card-img-top" src="logo.jpg" alt="Card image" style="width:100%;height:300px">
<div class="card-body">
<h3 class="card-title"></h3>
<p class="card-text">
<b>Bill No : </b> <b><?php echo $BillNO; ?></b><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?>
<b>Customer ID : </b> <?php echo $Cust_id; ?><br>
<b>Address :</b><?php echo "Las vegas, 23 Downtown"; ?><br>
<b></b>
<h5 align="center">- - - - - - - - - - - - - - -  - - - - -</h5>
<div id="bot" align="center">
					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h5>Item<?php echo"&nbsp&nbsp"; ?></h5></td>
								<td class="Hours"><h5>Quantity</h5></td>
								<td class="Rate"><h5><?php echo"&nbsp&nbsp"; ?> Sub Total</h5></td>
							</tr>
              <?php require "connection.php";
              $sql="SELECT `item_name`,`quantity`,`sub_tot` FROM `display_bill` WHERE `Order_No`='$OrderNO'";
              $result=mysqli_query($conn,$sql);
			  while($row=mysqli_fetch_assoc($result))
							echo"<tr class='service'>
								<td class='tableitem' align='center'><p class='itemtext'>".$row['item_name']."</p></td>
								<td class'tableitem' align='center'><p class='itemtext'>".$row['quantity']."</p></td>
								<td class='tableitem' align='center'><p class='itemtext'>Rs.".$row['sub_tot']."</p></td>
							</tr>";
                ?>
							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h5><?php echo"&nbsp&nbsp"; ?>Total</h5></td>
								<td class="payment" align="center"><h5><?php echo"&nbsp&nbspRs.".$Total; ?></h5></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you!</strong> </p>
					</div>
					<div>
					<a name="pay" id="p1" class="btn btn-primary" href="payment.php" role="button">PAY</a>
					</div>
</p>


</div>
</div>
</div>
</div>

	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>



