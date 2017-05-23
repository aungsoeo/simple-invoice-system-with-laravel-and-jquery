@extends('master')
@section('content')
    <!DOCTYPE html>
    <html>
    <head>
        <title>   
            <script type="text/javascript">
            $(document).ready(
            function compute(){
                var amount = document.getElementById('product_qty').value;
                var price = document.getElementById('product_price').value;
                var sum =(amount*price);
                sum=sum.toString();
                document.getElementById('total').innerHTML =" $"+ sum ;                     
            });
            </script>    
         </title>
    </head>
    <body>
    <form action = "<?= URL::to('save') ?> " method = "post" >
        <input type="hidden" name="_token" value="{{csrf_token() }}" >
        <h2 style="margin-left:40%">New Invoice</h2>      
        <h4 style="margin-left:15%">  Invoice Name</h4> <input type="text" name="invoice_name" class="form-control" id="iname" style="width:20%;margin-left:15%">
    <br><br>
    <table class = 'table table-bordered table-hover' id="tt" style="width:1000px;margin-left:10%;margin-right:10%">
    <thead>
        <th>Item Name</th>
        <th># of items</th>
        <th>Price</th>
        <th>Total</th>
        <th>     </th>
    </thead>
    <tbody>
       <tr id="ttr">     
            <td><input type ="text"  name = "product_name" class = "form-control" ></td>
            <td onchange="compute()"><input id="product_qty" name = "product_qty" type="number" min="1" max="1000" value="1" step="1" class = "form-control"></td>
            <td onchange="compute()"><input id="product_price" name = "product_price" type="number"  class = "form-control" ></td>
       
            <td><p id="total"> </p></td>
            <td> <a href="<?php echo 'DeleteProduct/' ?>"> &times </a>  </td>
        </tr>   
        <tr>
            <td colspan="5"><a id="create" class="current_validation" href="#">Add Item </a></td>
        </tr>

        <tr>
            <td colspan="3" align="right">Subtotal</td>
            <td colspan="2" id="total"></td>
        </tr>
        <tr> 
            <td colspan="3" align="right">Tax</td>
            <td colspan="2"><input type="text" name="tax" id="tax"><br><br></td>
        </tr>
        <tr>
            <td colspan="3" align="right">Total</td>
            <td colspan="2"> </td>
        </tr>
       
    </tbody>
    </table>
          <input type = "submit" id="ok" value = "Save Record" class = "btn btn-primary" style="margin-left:80%">

    </form>
             <a href="<?= 'productmain' ?>" class="btn btn-primary" style="margin-left:70%">Back</a>

    <script type="text/javascript">
        window.onload=function() { 
        document.getElementById("create").onclick=function() {
        var table = document.getElementById("tt");
        var row = tt.insertRow(2);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5=row.insertCell(4);
        cell1.innerHTML = "<input type='text' name='product_name' class = 'form-control'>";
        cell2.innerHTML = "<input type='text' name='product_price' class = 'form-control'>";
        cell3.innerHTML = "<input type='text' name='product_qty' class = 'form-control'>";
        cell4.innerHTML = " <p>  </p>";
        cell5.innerHTML = "<a href='# '> &times; </a>";
      }
        
        function deleterow(tableID) {

        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
         var row = table.rows[rowCount - 1 ];
         document.write(rowCount);

        }

            var tasks= new Array();
            $('input[name^="task"]').each(function() 
            {
            tasks.push($(this).val());
            });
    
    
        }
    </script>

@stop()

</body>
</html>
    