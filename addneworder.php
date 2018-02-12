<!DOCTYPE html>
<html>
  <head><title>Customer</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="chosen.jquery.js"></script>
    <script src="chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="chosen.min.css">
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
       <label>Customer</label>
        <select id="Mysearch">
            <option>Kenny</option>
            <option value="1">Aachener Stra&#223;e</option>
			<option value="2">Abbestra&#223;e</option>
			<option value="3">Adalbertstra&#223;e</option>
			<option value="4">Adam-von-Trott-Stra&#223;e</option>
			<option value="5">Adenauerplatz</option>
			<option value="47">Am Rudolfplatz</option>
			<option value="48">Am Rupenhorn</option>
			<option value="49">Am Schillertheater</option>
			<option value="50">Am Speicher</option>

        
        </select>
        <label>Payment Method</label>
        <select>
          <option>Bank</option>
        <option>Cash</option>
        </select>
        <label>Date</label><input type="date" min="<?php echo date("Y-m-d"); ?>" max="<?php echo date("Y-m-d"); ?>" />
        <label>Reference</label><input type="text" value="" />
    </div>
    
    <div >
      <label>Add Item</label><input type="search" placeholder="Search Item"/>
      
      <table>
      <th>Item Name</th>
      <th>Description</th>
      <th>Quantity</th>
      <th>Rate($)</th>
      <th>Tax(%)</th>
      <th>Tax($)</th>
      <th>Amount</th>
      <th>Action</th>
      
      <?php
      echo "
          <tr>
          
      
      
        </tr>";
      
      
      ?>
    
    </table>
      <label>Sub Total($)</label><input type="text" readonly>
      <label>Total Tax($)</label><input type="text"  readonly/>
      <label>Grand Total($)</label><input type="text" readonly/>
    </div>
    
    <div>
      <label>Note</label>
      <textarea placeholder="Description ..."></textarea>
        
    </div>
    
    <div>
      <button >Cancel</button>
      <button >Submit</button>
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
   $("#Mysearch").chosen();
  
  
  </script>
  

</html>