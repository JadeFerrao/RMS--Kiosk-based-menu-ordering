<!doctype html>

<html lang="en">
  
<head>
    
<title>MENU DETAILS</title>
    
<!-- Required meta tags -->
    
<meta charset="utf-8">
    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

<!-- Bootstrap CSS -->
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js">
</script>
  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
</script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
</script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<link href="https://fonts.googleapis.com/css?family=Amatic sc:300,400,500,700" rel="stylesheet">


<style>

.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
 
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

</style>
  
</head>


<body class="bg-lavender">

<nav class="navbar navbar-expand-xl ">
  
<div class="container-fluid">
    
<a class="navbar-brand" style="color: red;font-family: Amatic sc;" href="bootmain.html"><i class="fa fa-id-card"></i>Home</a>
     
<div class="collapse navbar-collapse" id="navbarSupportedContent">
      
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
   
     
<!--<li class="nav-item">
          
<a class="nav-link active" aria-current="page" href="boot.html"style="color: red;font-family: Amatic sc;"><i class="fa fa-fw fa-home"></i>Home</a>
        
</li>
  -->      

<li class="nav-item">
          
<a class="nav-link" href="Menu.php"style="color: red;font-family: Amatic sc;"><i class="fa fa-fw fa-book"></i>Add Items</a>
        
</li>
<li class="nav-item">
          
<a class="nav-link" href="store.php"style="color: red;font-family: Amatic sc;"><i class="fa fa-fw fa-book"></i>All Items</a>
        
</li>
      
</ul>
      
   
</div>
  
</div>

</nav>



<div class="bg-light">

<table class="table table-light table-striped-columns" id="myTable">
   
<thead style='border: 3px solid aqua;'>
    
<tr>
      
<th style='border: 3px solid aqua;' scope="col">S.No</th>
      
<th style='border: 3px solid aqua;' scope="col">Item ID</th>
      
<th style='border: 3px solid aqua;' scope="col">Item Name</th>
      
<th style='border: 3px solid aqua;' scope="col">Item Price</th>
      
<th style='border: 3px solid aqua;' scope="col">Category</th>
      
<th style='border: 3px solid aqua;' scope="col">Picture Information</th>
    
</tr>
  
</thead>
  
<tbody>
    
<?php require "connection.php";
    $sql1="SELECT * FROM `MENU`";
        $result=mysqli_query($conn, $sql1);
        $num=1;
        while($row=mysqli_fetch_assoc($result))
        {
   echo" <tr>
      <th style='border: 3px solid aqua;' scope='row'>$num</th>
      <td style='border: 3px solid aqua;'>".$row['item__id']."</td>
      <td style='border: 3px solid aqua;'>".$row['item_name']."</td>
      <td style='border: 3px solid aqua;'>".$row['item_price']."</td>
      <td style='border: 3px solid aqua;'>".$row['category']."</td>
      <td style='border: 3px solid aqua;'>".$row['pic_info']."</td>
</tr>";
    $num=$num+1;
        }
        $num=1;
    mysqli_close($conn);
    ?>
  
</tbody>

</table>

</div>

<div class="mt-3 ml-3">
<!-- Button to Open EDIT -->
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal23">
    EDIT
  </button>
      
</div>

  <!-- The EDIT -->
  
<div class="modal fade" id="myModal23">
    
<div class="modal-dialog modal-dialog-scrollable">
      
<div class="modal-content">
      
        
<!-- Modal Header -->
        
<div class="modal-header">
          
<h4 class="modal-title" >ITEM DETAILS</h4>
          
<button type="button" class="close" data-dismiss="modal">&times;</button>
       
 </div>
        
       
 <!-- Modal body -->
        
<div class="modal-body">
          
<div class="signup-box">
<form  method="post"  action="mdetails.php">
<label>Item ID(Required)</label>

<input type="number" placeholder="XXXX1234" required name="item__id">

<label ><h2>UPDATE</h2></label>

<label>Item name</label>
<input type="text" placeholder="soup" name="iname" >
<label>Item Price</label>
<input type="text" placeholder="120" name="iprice">
<label>Item Category</label>
<input type="text" placeholder="starter" name="cat" >
<label>Picture Information</label>
<input type="text" placeholder="pic.jpeg" name="Pi" >

<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>
          
</div>
        </div>
        
        <!-- Modal footer -->
       
 <div class="modal-footer">
         
 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
</div>
      
</div>
    
</div>
  
</div>

</div>




<div class="mt-3 ml-3">
  <!-- Button to Open DELETE -->
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#MyModal234">
    DELETE
  </button>
      
</div>
  <!-- The DELETE -->
  <div class="modal fade" id="MyModal234">
  <div class="modal-dialog ">
      
<div class="modal-content">
      
        <!-- Modal Header -->
        
<div class="modal-header">
          <h4 class="modal-title">Delete Items</h4>
          
<button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="signup-box">
<form  method="post" action="del1.php" >
<label>Item ID(Required)</label>
<input type="text" placeholder="XXXX1234" required name="item_id">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</form>
</div>
</div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
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
        
