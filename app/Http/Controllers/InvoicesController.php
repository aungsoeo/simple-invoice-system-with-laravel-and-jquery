<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

use DB;
class InvoicesController extends Controller{

 #...............start show invoice & items detail
	public function index ()
	{
	 $result = DB::table('products')->get();
	// $result = DB::table('products')->paginate(5);
	return view('invoice.index')->with('data', $result);

	}

 #............end show invoice & items detail

#.... start search function.....
 public function search(Request $request)
 {
			 $post = $request->all();

			 $users = DB::table('item')
						->where('name', 'LIKE', $post)
						->orwhere('item', 'LIKE', $post)
						->get();
			 return view('invoice.main')->with('data', $users);
}
#....end of search function.....

 #.......start show invoice name list....
  public function show()
  {


      $result1 = DB::table('item')->get();
  		return view('invoice.show')->with('data', $result1);
  }
	#.......end show invoice name list....

#.....start insert and save function.......
	public function insert()
	{
		return view('invoice.addnew');
	}

	public function save(Request $request)
	{
        $post = $request->all();
        $num_elements = 0;
        $sqlData = array();
        $sqlItem=array();

        while($num_elements < count($post['product_name']))
				{
            $sqlData[] = array(

                'product_name'          => $post['product_name'][$num_elements],
                'product_price'     => $post['product_price'][$num_elements],
                'product_qty'      => $post['product_qty'][$num_elements],
                'total'       => $post['total'][$num_elements], // you miss this field, aren't you?
                'grandtotal'    =>$post['grandtotal'],
                'invoice_name'         => $post['invoice_name'],
                );
        	$num_elements++;
                $sqlItem=array(
                    'name'=>$post['invoice_name'],
                    'item'=>$num_elements,
                    'total'=>$post['grandtotal'],
                    );
        }


               DB::table('item')->insert($sqlItem);
               DB::table('products')->insert($sqlData);
        			 return redirect('invoicemain');
    }
		#.....end of insert and save function.......


    public function edit($id)
	    {
	        $row = DB::table('products')->where('id',$id)->first();
	        return view('invoice.edit')->with('row',$row);
	    }

    public function printt($id)
        {
            $result= DB::table('products')->where('id',$id)->get();
            return view('invoice.printt')->with('data',$result);
        }

	 public function update(Request $request)
        {
            $post = $request->all();
            $v = \Validator::make($request->all(),
                [
                    'product_name'  => 'required',
                    'product_price' => 'required',
                    'product_qty'   => 'required',
                ]);
            if($v->fails())
            {
                return redirect()->back()->withErrors($v->errors());
            }
            else
            {
                $data = array(
                    'product_name'  => $post['product_name'],
                    'product_price' => $post['product_price'],
                    'product_qty'   => $post['product_qty'],

                    );
                $i = DB::table('products')->where('id', $post['id'])->update($data);
                if($i > 0)
                {
                    \Session::flash('message','Record Have Been Update Success');
                    return redirect('invoiceindex');
                }
            }
        }

	  public function delete($id)
    {
        $i = DB::table('products')->where('id',$id)->delete();
        if($i > 0)
        {
            \Session::flash('message','Record Have Beeen Delete Successfully');
            return redirect('invoiceindex');
        }
    }


}
