<!DOCTYPE html>
<html>
  <head><title>Item</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  
  <body>
     <div id="nav">
            <div id="navwrapper">
                <a id="underline" href="#"><div id="menu1" class="menu1">Dashboard</div></a>
                <a id="underline" href="#"><div id="menu1" class="menu1">Customers</div></a>
                  <div class="dropdown" >
                      <button onclick="myFunction()" class="dropbtn">Sales</button>
                      <div id="myDropdown" class="dropdown-content">
                            <a href="#">Sales Order</a>
                            <a href="#">Invoices</a>
                            <a href="#">Payments</a>
                            <a href="#">Shipments</a>
                      </div>
                  </div>
                 
                    
                
                <a id="underline" href="#"><div id="menu1" class="menu1">Purchase</div></a>
                <a id="underline" href="#"><div id="menu1" class="menu1">Supplier</div></a>
                <a id="underline" href="#"><div id="menu1" class="menu1">Inventory</div></a>
                <a id="underline" href="#"><div id="menu1" class="menu1">Shipping</div></a>
                <a id="underline" href="#"><div id="menu1" class="menu1">Reports</div></a>
            </div>        
        </div>
      <div id="custcontainter">
        <div id="custheader"><h4>Customers</h4></div>
        <div id="custcount">
          
          number of customers
          quantity
          cost of stock on hand
          retail value of stock on hand
          profit value of stock on hand
        </div>
        <form>
        <div>
          <button >Download CSV</button>
          <label>Search:</label><input type="search" placeholder="Type here..."/>
        </div>
          <table>
            <th>Item Name</th>
            <th>On hand</th>
            <th>Purchases($)</th>
            <th>Wholesale($)</th>
            <th>Retail($)</th>
            <th>Action</th>
          <?php
              echo "
                  <tr>
                    <td>".$row['']."</td>
                    <td>".$row['']."</td>
                    <td>".$row['']."</td>  
                    <td>".$row['']."</td>  
                    <td>".$row['']."</td>  
                    
                            <form action='update_information.php' method='POST'>
                             <input type='hidden' name='editID' value='$row[123]'>
                             <td><input type='submit' value='Edit'></td>
                             </form>
                             <form action='delete_record.php' method='POST'>
                             <input type='hidden' name='deleteID' value='$row[123]'>
                             <td><input type='submit' value='Delete' onclick='return Delalert()' class='Dbuttons'></td>
                             </form> 
                  </tr>";
          
          ?>
          </table>
        </form>
    </div>
  </body>
<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
  </script>
  <script>
    function Delalert(){
      var x = confirm("Are you sure you want to delete this item?")
      if(x){
        return true;
      }else{
        return false;
      }
      
    }
  
  </script>
</html>