<!DOCTYPE html>
<html>
<head>
<title>PAYMENT</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.tab 
	{
	float: left;
	border: 1px solid #ccc;
	background-color: #f1f1f1;
	width: 15%;
	height: 400px;
	}

.tab button 
	{
	display: block;
	background-color: inherit;
	color: black;
	padding: 22px 16px;
	width: 100%;
	border: none;
	outline: none;
	text-align: left;
	cursor: pointer;
	font-size: 17px;
	}

.tab button:hover 
	{
	background-color: #ddd;
	}

.tab button.active 
	{
	background-color: #ccc;
	}


.tabcontent 
	{
	float: left;
	padding: 30px 40px;
	border: none;
	width: 70%;
	border-left: none;
	height: 400px;
	}


input[type="text"], input[type="password"]
	{
	display: block;
	box-sizing: border-box;
	border: none;
	border-bottom: 6px solid;
	background: #ffffff;
	padding: 5px;
	margin: 0px 0px 2px 0px;
	border: 1px solid #888888;		
	width: 50%;
	}
	
p
	{
	margin: 10px 0px 3px 0px;
	font-size: 17px;
	font-width: 17px strong;
	
	}
	
input[type="submit"], input[type="reset"]
		{
		background-color: #d9d9d9;
		color: black;
		padding: 10px 20px;
		margin: 15px 10px 20px 40px;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		width: 15%;
		text:strong;
		}	
	
	
</style>
</head>

<body background="pay.jpeg" width=100>

	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Credit Card')"id="defaultOpen" aria-readonly="true"><i class="fa fa-credit-card"></i>Credit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Debit Card')"><i class="fa fa-cc-visa" ></i>Debit Card</button>
		<button class="tablinks" onclick="openCity(event, 'Gpay/UPI/Paypal')"><i class="fa fa-paypal"></i>Gpay/UPI/Paypal</button>
                <button class="tablinks" onclick="openCity(event, 'Cash')"><i class="fa fa-money"></i>Cash</button>
	</div>	
	
	<div id="Credit Card" class="tabcontent">
		<h3>Pay by Credit Card</h3>
		<p>Card Number</p>
		<form method="post" action="Payment.php">
		<input type='text' name='pid' value='4' size='1px' placeholder="3" style="opacity:0%" readonly>
		<input type="text" name="card" placeholder="Enter Card Number" >
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="MM/DD" >
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv" >
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name" ><br><br>

        <center> Or pay via <a href="https://razorpay.com/payment-link/plink_Kl9kEuX5ZMgKUQ">RAZORPAY</a></center>

		<input type="submit" value="Submit">
		<input type="reset" value="Reset">
		</form>
	</div>
	
	<div id="Debit Card" class="tabcontent">
		
		<h3>Pay by Debit Card</h3>
		<p>Card Number</p>
		<form method="post" action="Payment.php">
		<input type='text' name='pid' value='4' size='1px' placeholder="4" style="opacity:0%" readonly >
		<input type="text" name="card" placeholder="Enter Card Number" required>
	
		<p>Expiration Date</p>
		<input type="month" name="month" placeholder="MM/DD" required>
	
		<p>CVV/CVC</p>
		<input type="text" name="cvv" required>
	
		<p>Card Holder Name</p>
		<input type="text" name="name" placeholder="Enter Card Holder Name" required><br><br>
		
       <center> Or pay via <a href="https://razorpay.com/payment-link/plink_Kl9kEuX5ZMgKUQ">RAZORPAY</a></center>

		<input type="submit" value="Submit" >
		<input type="reset" value="Reset">
		</form>
	</div>
	
	<div id="Gpay/UPI/Paypal" class="tabcontent">
                 <h3>Pay by Gpay/UPI/Paypal</h3>
<br>
                <center><img src="frame.png" width="300" height="300"></center>
<br>
<br>
                <center>Scan the above QR code to Pay</center><br>
                <center> Or pay via <a href="https://razorpay.com/payment-link/plink_Kl9kEuX5ZMgKUQ">RAZORPAY</a></center>
				<form method="post" action="Payment.php">
					<input type='text' name='pid' value='2' size='1px' placeholder="2" style="opacity:0%" readonly><br><br>
					<center><input type="submit" value="Done" ></center>
				</form>
	</div>
	
         <div id="Cash" class="tabcontent">
		<h3>Pay by Cash </h3>
		
 <center>Pay via <a href="https://razorpay.com/payment-link/plink_Kl9kEuX5ZMgKUQ">RAZORPAY</a></center>
 <form method="post" action="Payment.php">
	<input type='text' name='pid' value='1' size='1px' placeholder="1" style="opacity:0%" readonly>
			<a href="customer.php">SEND</a>		
</form>
		
	</div>
	
	<script>
		function openCity(evt, mop) 
		{
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) 
			{
				tabcontent[i].style.display = "none";
			}
		
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) 
			{
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
		
			document.getElementById(mop).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
		
		
</body>
</html>

  
	  <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		
	  <!-- Optional JavaScript -->
	  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
  </html>