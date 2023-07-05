
<!DOCTYPE html>
<html>
<head>
<title>Table</title>
   <center><h1>Admin page</h1></center>
</head>
<body>
<center>
<div style="background-color:lightblue;width:700px;height=700px;border:"4";">
<table border="4" id="show" width="700" height="400">
<tr>
<th width="100">Item/Customer</th>
<th width="100">Customer1
</th>
<th width="100">Customer2</th>
<th width="100">Total</th>
</tr>
<tr>
<th width="100">Quantity</th><th></th><th></th><th></th></tr>
<tr>
    <th width="100">Weight</th><th></th><th></th><th></th></tr>
<tr>
<th width="100">BoxCount</th><th></th><th></th><th></th></tr>
</table>
    </div><script>
    location="userhome.php"
var list1 = [];
var list2 = [];
var list3 = [];
var list4 = [];


var n = 1;
var x = 0;
 function AddRow(){
var AddRown = documment.getElementById('Item/Cutomer');
var NewRow = AddRown.insertRow(n);
list1[x] = document.getElementById("Item/Customer").value;
list1[x] = document.getElementById("Customer1").value;
list1[x] = document.getElementById("Customer2").value;
list1[x] = document.getElementById("Total").value;

var cel1 = NewRow.insertcel1(0);
var cel2 = NewRow.insertcel1(1);
var cel3 = NewRow.insertcel1(2);
var cel4 = NewRow.insertcel1(3);

cel1.innerHTML = list1[x];
cel2.innerHTML = list2[x];
cel3.innerHTML = list3[x];
cel4.innerHTML = list4[x];


n++;
x++;
    </script>

    </center>
</body>
</html>