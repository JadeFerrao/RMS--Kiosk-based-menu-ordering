
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
body {
  padding-top: 80px;
}

.show-cart li {
  display: flex;
}
.card {
  margin-bottom: 20px;
}
.card-img-top {
  width: 200px;
  height: 200px;
  align-self: center;
}
</style>
  </head>
  <body background="bg3.jpg">
      <nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</nav>

<p>
  <a class="btn btn-primary ml-3" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Pizza
  </a>
  <a class="btn btn-primary ml-3" data-toggle="collapse" href="#collapseExample12" role="button" aria-expanded="false" aria-controls="collapseExample12">
    Juice 
  </a>
  <a class="btn btn-primary ml-3" data-toggle="collapse" href="#collapseExample13" role="button" aria-expanded="false" aria-controls="collapseExample">
    Chinese
  </a>
  <a class="btn btn-primary ml-3" data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">
    Starter
  </a>
  
  <!--<a class="btn btn-primary ml-3" data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">
    Pasta
  </a>
  <a class="btn btn-primary ml-3" data-toggle="collapse" href="#collapseExample14" role="button" aria-expanded="false" aria-controls="collapseExample">
    South Indian
  </a>-->

</p>
<!-- pizza -->
<div class="collapse" style="background: rgba(76, 175, 80, 0.1);" id="collapseExample">
  <div class="card card-body">
    <div class="row">
    <?php require "connection.php";
$sql = "SELECT * FROM `MENU` WHERE `category`='pizza'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  echo" <div class='col'>
          <div class='card' style='width: 20rem;'>
            <img class='card-img-top' src=$row[pic_info] alt='Card image cap'>
              <div class='card-block'>
                <h4 class='card-title'>$row[item_name]</h4>
                <p class='card-text'>Price: Rs.$row[item_price]</p>
                <a href='#' data-name=$row[data_name]  data-price=$row[item_price] data-id=$row[item__id] class='add-to-cart btn btn-primary'>Add to cart</a>
          </div>
        </div>
      </div>";
}
?>
    </div>
  </div>
</div>

<!-- South Indian -->
<div class="collapse" id="collapseExample15">
  <div class="card card-body">
    <div class="row">
    <?php require "connection.php";
$sql = "SELECT * FROM `MENU` WHERE `category`='south indian'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  echo" <div class='col'>
          <div class='card' style='width: 20rem;'>
            <img class='card-img-top' src=$row[pic_info] alt='Card image cap'>
              <div class='card-block'>
                <h4 class='card-title'>$row[item_name]</h4>
                <p class='card-text'>Price: Rs.$row[item_price]</p>
                <a href='#' data-name=$row[data_name]  data-price=$row[item_price] data-id=$row[item__id] class='add-to-cart btn btn-primary'>Add to cart</a>
          </div>
        </div>
      </div>";
}
?>
    </div>
  </div>
</div>


<!-- Starters -->
<div class="collapse" id="collapseExample14">
  <div class="card card-body">
    <div class="row">
    <?php require "connection.php";
$sql = "SELECT * FROM `MENU` WHERE `category`='starter'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  echo" <div class='col'>
          <div class='card' style='width: 20rem;'>
            <img class='card-img-top' src=$row[pic_info] alt='Card image cap'>
              <div class='card-block'>
                <h4 class='card-title'>$row[item_name]</h4>
                <p class='card-text'>Price: Rs.$row[item_price]</p>
                <a href='#' data-name=$row[data_name]  data-price=$row[item_price] data-id=$row[item__id] class='add-to-cart btn btn-primary'>Add to cart</a>
          </div>
        </div>
      </div>";
}
?>
    </div>
  </div>
</div>

<!-- Chinese -->
<div class="collapse" id="collapseExample13">
  <div class="card card-body">
    <div class="row">
    <?php require "connection.php";
$sql = "SELECT * FROM `MENU` WHERE `category`='chinese'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  echo" <div class='col'>
          <div class='card' style='width: 20rem;'>
            <img class='card-img-top' src=$row[pic_info] alt='Card image cap'>
              <div class='card-block'>
                <h4 class='card-title'>$row[item_name]</h4>
                <p class='card-text'>Price: Rs.$row[item_price]</p>
                <a href='#' data-name=$row[data_name]  data-price=$row[item_price] data-id=$row[item__id] class='add-to-cart btn btn-primary'>Add to cart</a>
          </div>
        </div>
      </div>";
}
?>
    </div>
  </div>
</div>

<!-- Beverages -->
<div class="collapse" id="collapseExample12">
  <div class="card card-body">
    <div class="row">
    <?php require "connection.php";
$sql = "SELECT * FROM `MENU` WHERE `category`='beverage'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  echo" <div class='col'>
          <div class='card' style='width: 20rem;'>
            <img class='card-img-top' src=$row[pic_info] alt='Card image cap'>
              <div class='card-block'>
                <h4 class='card-title'>$row[item_name]</h4>
                <p class='card-text'>Price: Rs.$row[item_price]</p>
                <a href='#' data-name=$row[data_name]  data-price=$row[item_price] data-id=$row[item__id] class='add-to-cart btn btn-primary'>Add to cart</a>
          </div>
        </div>
      </div>";
}
?>
    </div>
  </div>
</div>

<!-- Pasta -->
<div class="collapse" id="collapseExample12">
  <div class="card card-body">
    <div class="row">
    <?php require "connection.php";
$sql = "SELECT * FROM `MENU` WHERE `category`='pasta'";
$result=mysqli_query($conn,$sql);
while ($row = mysqli_fetch_array($result)) {
  echo" <div class='col'>
          <div class='card' style='width: 20rem;'>
            <img class='card-img-top' src=$row[pic_info] alt='Card image cap'>
              <div class='card-block'>
                <h4 class='card-title'>$row[item_name]</h4>
                <p class='card-text'>Price: Rs.$row[item_price]</p>
                <a href='#' data-name=$row[data_name]  data-price=$row[item_price] data-id=$row[item__id] class='add-to-cart btn btn-primary'>Add to cart</a>
          </div>
        </div>
      </div>";
}
?>
    </div>
  </div>
</div>
 <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="order_details.php">
        <table class="show-cart table">
          
        </table>
        <div>Total price: Rs.<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="sub btn btn-primary">Order now</button>
      </div>
</form>
    </div>
  </div>
</div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
  cart = [];
  
  // Constructor
  function Item(name, price, count,id) {
    this.name = name;
    this.price = price;
    this.count = count;
    this.id = id;
  }
  
  // Save cart
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    // Load cart
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  

  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(name, price, count, id) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, count,id);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        //document.write("id="+cart[i].id)
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
    }
    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
      //print(totalCount+"\n")
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }
    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  // cart : Array
  // Item : Object/Class
  // addItemToCart : Function
  // removeItemFromCart : Function
  // removeItemFromCartAll : Function
  // clearCart : Function
  // countCart : Function
  // totalCart : Function
  // listCart : Function
  // saveCart : Function
  // loadCart : Function
  return obj;
})();


// *****************************************
// Triggers / Events
// ***************************************** 
// Add item
$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  
  var price = Number($(this).data('price'));
  var id = Number($(this).data('id'));
  shoppingCart.addItemToCart(name, price, 1 ,id);
  displayCart();
});

// Clear items
$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});

//Flush cart
$('.sub').click(function(){
  shoppingCart.clearCart();
});

function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {
    output += "<tr>"
      + "<td>" + cartArray[i].name + "</td>" 
      + "<td>( " + cartArray[i].price + " )</td>"
      + "<td><input type='text' name='iid[]' value='"+cartArray[i].id+"' size='1px' placeholder='"+cartArray[i].id+"' readonly></td>"
      + "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' name='quantity[]' class='item-count form-control' data-name='" + cartArray[i].name + "' value='"+cartArray[i].count+"'>"
      + "<button class='plus-item btn btn-primary input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + ">X</button></td>"
      + " = " 
      + "<td>" + cartArray[i].total + "</td>" 
      +  "</tr>";
  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});
displayCart();
</script>  
  </body>
</html>