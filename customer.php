<!DOCTYPE html>
<html>
  <head><title>Customer</title>
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
        <div id="custcount">number of customers</div>
        <form>
        <div>
          <button >Download CSV</button>
          <label>Search:</label><input type="search" placeholder="Type here..."/>
        </div>
          <table>
            <th>Customer Name</th>
            <th>Email</th>
            <th>Phone</th>
          <?php
              echo "
                  <tr>
                    <td>".$row['']."</td>
                    <td>".$row['']."</td>
                    <td>".$row['']."</td>                  
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
</html>