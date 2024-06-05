<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function add_category_product()
    {
        $this->AuthLogin();
        $category_product_header = DB::table('tbl_category_product')->where('category_status', '1')->get();
        return view('admin.category_product.add_category_product')->with('category_product_header', $category_product_header);
    }

    public function all_category_product()
    {
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')->get();
        $category_product_header = DB::table('tbl_category_product')->where('category_status', '1')->get();
        $manager_category_product = view('admin.category_product.all_category_product')
            ->with('all_category_product', $all_category_product)
            ->with('category_product_header', $category_product_header);

        return view('admin_layout')->with('admin.category_product.all_category_product', $manager_category_product);
    }

    public function save_category_product(Request $request)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }

    public function unactive_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 0]);
        Session::put('message', 'Không kích hoạt (ẩn) danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function active_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update(['category_status' => 1]);
        Session::put('message', 'Kích hoạt (hiển thị) danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function edit_category_product($category_product_id)
    {
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')->where('category_id', $category_product_id)->get();
        $category_product_header = DB::table('tbl_category_product')->where('category_status', '1')->get();
        $manager_category_product = view('admin.category_product.edit_category_product')
            ->with('edit_category_product', $edit_category_product)
            ->with('category_product_header', $category_product_header);

        return view('admin_layout')->with('admin.category_product.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_product_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        DB::table('tbl_category_product')->where('category_id', $category_product_id)->update($data);
        Session::put('message', 'Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    public function delete_category_product($category_product_id)
    {
        $this->AuthLogin();
        DB::table('tbl_category_product')->where('category_id', $category_product_id)->delete();
        Session::put('message', 'Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    //FE
    public function show_category_product_home($category_product_id)
    {
        $category_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderby('category_id', 'asc')
            ->get();

        $product_by_category_query = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_product.category_id', $category_product_id)
            ->where('product_status', '1');

        $this_category_product = DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->first();

        if (!$this_category_product) {
            return redirect('/')->with('error', 'Category not found');
        }

        $min_price = DB::table('tbl_product')->min('product_price');
        $max_price = DB::table('tbl_product')->max('product_price');
        $min_price_range = $min_price - 100000;
        $max_price_range = $max_price + 100000;

        if (isset($_GET['price_from']) && isset($_GET['price_to'])) {
            $min_price = $_GET['price_from'];
            $max_price = $_GET['price_to'];
            $product_by_category_query->whereBetween('product_price', [$min_price, $max_price]);
        }

        $product_by_category = $product_by_category_query->paginate(10);

        $category_product_header = DB::table('tbl_category_product')->where('category_status', '1')->get();

        return view('pages.sanpham.show_category_product')
            ->with('category', $category_product)
            ->with('product', $product_by_category)
            ->with('min_price_value', $min_price)
            ->with('max_price_value', $max_price)
            ->with('min_price_range', $min_price_range)
            ->with('max_price_range', $max_price_range)
            ->with('this_category_product', $this_category_product)
            ->with('category_product_header', $category_product_header);
    }
}
