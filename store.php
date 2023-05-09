<!doctype html>
<html lang="en">
  <head>
    <title>All Items</title>
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
    
</head>
  <body>
      <div class="bg-light">

<table class="table table-light table-striped-columns" id="myTable">
   
<thead style='border: 3px solid aqua;'>
    
<tr>
      
<th style='border: 3px solid aqua;' scope="col">S.No</th>
      
<th style='border: 3px solid aqua;' scope="col">Item Name</th>
      
<th style='border: 3px solid aqua;' scope="col">Item Price</th>
      
<th style='border: 3px solid aqua;' scope="col">Category</th>
      
</tr>
  
</thead>
  
<tbody>
<?php require "connection.php";
$sql="SELECT `item_name`,`item_price`,`category` FROM `MENU` UNION SELECT `item_name`, `item_price`, `category` FROM `deleted_items`";
$result=mysqli_query($conn, $sql);
        $num=1;
        while($row=mysqli_fetch_assoc($result))
        {
   echo" <tr>
      <th style='border: 3px solid aqua;' scope='row'>$num</th>
      <td style='border: 3px solid aqua;'>".$row['item_name']."</td>
      <td style='border: 3px solid aqua;'>".$row['item_price']."</td>
      <td style='border: 3px solid aqua;'>".$row['category']."</td>
</td>
    
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