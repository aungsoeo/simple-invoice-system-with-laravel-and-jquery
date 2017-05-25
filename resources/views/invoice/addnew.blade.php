@extends('master')
@section('content')

    <div id="invoice" style="width:900; margin:20px auto;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="clearfix">
                    <span class="panel-title"><h3>Create Invoice</h3></span>
                </div>
            </div>

            <div class="panel-body">
              <form action = "<?= URL::to('save') ?> " method = "post" >
                      <input type="hidden" name="_token" value="{{csrf_token() }}" >

                  <div class="row">
                      <div class="col-sm-4">
                          <div class="form-group">
                              <label>Invoice No.</label>
                              <input type="text" name="invoice_name" class="form-control" id="iname" >

                          </div>
                      </div>

                  </div>

                  <hr>

                  <table class="table table-bordered table-form" id="tt">
                      <thead>
                          <tr>
                            <th>Item Name</th>
                            <th># of items</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>     </th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class="ttr">
                             <td><input type ="text"  name = "product_name[]" class = "form-control" ></td>
                             <td><input id="product_qty" name = "product_qty[]" type="text" min="1" max="1000" value="1" step="1" class = "form-control" oninput="compute()"></td>
                             <td><input id="product_price" name = "product_price[]" type="text"  class = "form-control" oninput="compute()" ></td>

                             <td><input id="total" name="total[]" class = "form-control"> </td>
                             <td> <a href="#"> &times </a>  </td>
                         </tr>
                         <tr>
                             <td colspan="5"><a id="create" class="btn btn-primary current_validation" href="#" style="align:right">Add Item </a></td>
                         </tr>

                         <tr>
                             <td colspan="3" align="right">Subtotal</td>
                             <td colspan="2"><input id="subtotal" name="total" class = "form-control"></td>
                         </tr>
                         <tr>
                             <td colspan="3" align="right">Tax(%)</td>
                             <td colspan="2"><input type="text" name="tax" id="tax" oninput="compute2()"></td>
                         </tr>
                         <tr>
                             <td colspan="3" align="right">Total</td>
                             <td colspan="2"><input id="grandtotal" name="grandtotal" class = "form-control"> </td>
                          </tr>
                      </tbody>
                      <script type="text/javascript">

                      function compute(){
                                  var amount = document.getElementById('product_price').value;
                                  var qty= document.getElementById('product_qty').value;
                                  var result= document.getElementById('total');
                                  var tax= document.getElementById('tax').value;
                                  var tot=(amount*qty);
                                  result.value=tot;
                                  var sutotal=document.getElementById('subtotal');
                                   var sub=+tot;
                                  subtotal.value=sub;

                          }


                   </script>
                   <script type="text/javascript">
                          function compute1(){
                                  var amount = document.getElementById('price').value;
                                  var qty= document.getElementById('qty').value;
                                  var result= document.getElementById('total1');
                                  var tax= document.getElementById('tax').value;
                                  var tot=(amount*qty);
                                  result.value=tot;
                                  var sub=document.getElementById('subtotal');
                                  var subvalue=document.getElementById('subtotal').value;
                                  var sub1=+tot+ +subvalue ;
                                  sub.value=sub1;
                          }
                  </script>

                  <!-- start calculate tax and grandToal -->

                  <script type="text/javascript">
                       function compute2()
                       {
                                  var tax=document.getElementById('tax').value;
                                  var subvalue=document.getElementById('subtotal').value;
                                  var grandtotal=document.getElementById('grandtotal');
                                  var result1=+subvalue+ +(subvalue*(tax/100));
                                  grandtotal.value=result1;

                        }
                  </script>
                    <!--end  calculate tax and grandToal -->

                  </table>
                  <div>
                      <a href="<?= 'show' ?>" class="btn btn-default" >Back</a>

                      <input type = "submit" id="ok" value = "Save Record" class = "btn btn-success" >
                  </div>


                  <script type="text/javascript">
                      $i=0;
                      document.getElementById("create").onclick=function()
                      {
                        var n=$i++;
                        var table = document.getElementById("tt");
                        var row = tt.insertRow(2);
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);
                        var cell3 = row.insertCell(2);
                        var cell4 = row.insertCell(3);
                        var cell5=row.insertCell(4);
                        cell1.innerHTML = "<input type='text' name='product_name[]' class = 'form-control'>";
                        cell2.innerHTML = "<input type='text' id='qty' name='product_qty[]' class = 'form-control' onmouseout='compute1()' >";
                        cell3.innerHTML = "<input type='text'  id='price' name='product_price[]' class = 'form-control' onmouseout='compute1()'>";
                        cell4.innerHTML = "<input id='total1' name='total[]' class = 'form-control' >";
                        cell5.innerHTML = "<a href='# '> &times; </a>";
                      }

                      // <!-- function deleterow(tableID)
                      //  {
                      // var table = document.getElementById(tableID);
                      // var rowCount = table.rows.length;
                      //  var row = table.rows[rowCount - 1 ];
                      //  document.write(rowCount);
                      // }
                      //     var tasks= new Array();
                      //     $('input[name^="task"]').each(function()
                      //     {
                      //     tasks.push($(this).val());
                      //     });


                      // }
                  </script>
              </form>

            </div>
        </div>
    </div>

@stop
