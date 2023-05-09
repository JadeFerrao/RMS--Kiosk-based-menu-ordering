<!doctype html>
  
<head>
    
<title>CUSTOMER DETAILS</title>
    
<!-- Required meta tags -->
    
<meta charset="utf-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  
<!-- Bootstrap CSS -->
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  
</head>
  

<body class="bg-lavender">
      
<nav class="navbar navbar-expand-x1 ">
  
<div class="container-fluid">
    
<a class="navbar-brand" style="font-family: Amatic sc ;color: red;"><i class="fa fa-fw fa-heart"></i>Customer Details</a>
    
<div class="collapse navbar-collapse" id="navbarSupportedContent">
 
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
<li class="nav-item">
          
<a class="nav-link active" aria-current="page" href="boot.html"style="color: red;font-family: Amatic sc;"><i class="fa fa-fw fa-home"></i>Home</a>
        
</li>
       
</ul>
    
</div>
  
</div>

</nav>


<div class=" bg-light">

<table class="table table-light table-striped-columns" style="border: 4px solid aqua;" id="myTable" >
   
<thead style="border: 3px solid aqua;">
    
<tr>
      
<th style='border: 3px solid aqua;' scope="col">S.No</th>
      
<th style='border: 3px solid aqua;' scope="col">Customer ID</th>
     
 <th style='border: 3px solid aqua;' scope="col">Customer Name</th>
     
 <th style='border: 3px solid aqua;' scope="col">Bill Number</th>
      
<th style='border: 3px solid aqua;' scope="col">Total Amount</th>
      
<th style='border: 3px solid aqua;' scope="col">Bill Date</th>
      
<th style='border: 3px solid aqua;' scope="col">Payment ID</th>
     
 <th style='border: 3px solid aqua;' scope="col">Payment date</th>
      
<th style='border: 3px solid aqua;' scope="col">Payment Method</th>
     
 <th style='border: 3px solid aqua;' scope="col">Status</th>
      
    
</tr>
  
</thead>
  
<tbody>
   
 <?php require "connection.php";
    $sql1="SELECT Customer_id, Customer_name,BILL.Bill_No,BILL.T_amount,BILL.Bill_date,PAYMENT.PAYMENT_id,PAYMENT.Pay_Status,PAY_METHOD.P_method,
PAYMENT.Pay_Status FROM `CUSTOMER` INNER JOIN BILL ON Customer_id=BILL.C_id INNER JOIN PAYMENT ON 
BILL.Bill_No=PAYMENT.BILL_no INNER JOIN PAY_METHOD on PAYMENT.method_id=PAY_METHOD.M_id;";
        $result=mysqli_query($conn, $sql1);
        $num=1;
        while($row=mysqli_fetch_assoc($result))
        {
   echo" <tr style='border: 3px solid aqua;'>
      
<th style='border: 3px solid aqua;' scope='row'>$num</th>
     
 <td style='border: 3px solid aqua;'>".$row['Customer_id']."</td>
      
<td style='border: 3px solid aqua;'>".$row['Customer_name']."</td>
      
<td style='border: 3px solid aqua;'>".$row['Bill_No']."</td>
      
<td style='border: 3px solid aqua;'>".$row['T_amount']."</td>
     
 <td style='border: 3px solid aqua;'>".$row['Bill_date']."</td>
      
<td style='border: 3px solid aqua;'>".$row['PAYMENT_id']."</td>
      
<td style='border: 3px solid aqua;'>".$row['Pay_Status']."</td>
      
<td style='border: 3px solid aqua;'>".$row['P_method']."</td>
     
 <td style='border: 3px solid aqua;'>".$row['Pay_Status']."</td>
   
 </tr>";
    $num=$num+1;
        }
        $num=1;
    mysqli_close($conn);
    ?>
  
</tbody>

</table>

</div>
    
<!-- Optional JavaScript -->
    
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    
</script>
  
</body>

</html>