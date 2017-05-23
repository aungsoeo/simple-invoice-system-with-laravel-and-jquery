<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;

use DB;
class ProductController extends Controller{
	public function index ()
	{
	$result = DB::table('products')->get();
	// $result = DB::table('products')->paginate(5);
	return view('products.index')->with('data', $result);

	}
    public function main()
        {
            $result1 = DB::table('products')->get();
    
        return view('products.main')->with('data', $result1);
        }
    
	public function form()
	{
		return view('products.form');
	}
    public function search(Request $request){
        $post = $request->all();

        $users = DB::table('products')
             ->where('id', 'LIKE', $post)
             ->orwhere('invoice_name', 'LIKE', $post)
             ->get();
        return view('products.main')->with('data', $users);
         }
	public function form1(){
		return view('products.form1');
	}
   
	public function save1(Request $request)
	{
		$post = $request->all();
		var_dump((array)$post);

		return view('products.form1')->with($post);

	}
	public function save(Request $request)
    {
        $post = $request->all();
        $v = \Validator::make($request->all(),
            [   'invoice_name'  => 'required',
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
                'invoice_name'   => $post['invoice_name'],
                'product_name'  => $post['product_name'],
                'product_price' => $post['product_price'],
                'product_qty'   => $post['product_qty'],
                
                );
            $i = DB::table('products')->insert($data);
            if($i > 0)
            {
                \Session::flash('message','Record Have Beeen Save Success');
                return redirect('productindex');
            }
        }
    }
    public function edit($id)
	    {
	        $row = DB::table('products')->where('id',$id)->first();
	        return view('products.edit')->with('row',$row);
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
                    return redirect('productindex');
                }
            }
        }
    public function delete($id)
    {
        $i = DB::table('products')->where('id',$id)->delete();
        if($i > 0)
        {
            \Session::flash('message','Record Have Beeen Delete Successfully');
            return redirect('productindex');
        }
    }

    public function store()
    {
        $input = Input::all();

        foreach ($input['rows'] as $row) {
            $items = new Multiple([
                'user_id' => Auth::id(),
                'store' => $row['store'],
                'link' => $row['link'],
            ]);
            $items->saveMany();
        }
    }      

}
