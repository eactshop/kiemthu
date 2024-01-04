<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Bạn có thể đặt middleware và middleware group ở đây nếu cần
    }

    public function index()
    {
        return view('admin');
    }
    public function postAdmin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $admin = Admin::select('username', 'pass')->first();
        if ($username === $admin->username && $password === $admin->pass) {
            return view('home-admin');
        } else {
            return redirect('admin');
        }
    }
    public function getProducts()
    {
        $products = Products::select('id', 'name', 'price', 'img', 'category', 'don_vi', 'kich_thuoc', 'mau_sac','ghichu')->get();
        return view('admin-products', compact('products'));
    }
    public function getNews()
    {
        $news = News::select('id', 'news_title', 'news_date', 'news_img', 'news_content')->get();
        return view('admin-news', compact('news'));
    }

    public function getFormProductAdd(){
        return view('admin-product-add');
    }
    public function postFormProductAdd(Request $request) {
        $request->validate([
            'anhSanPham' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'danhMucSanPham' => 'required',
            'dvSanPham' => 'required',
            'ktSanPham' => 'required',
            'mauSanPham' => 'required',
            'tenSanPham' => 'required',
            'ghichu' => 'required',
            'giaSanPham' => 'required|numeric',
        ]);
    
        if ($request->hasFile('anhSanPham')) {
            $anhSanPham = $request->file('anhSanPham');
            $tenAnh = $anhSanPham->getClientOriginalName();
            $anhSanPham->move(public_path('uploads'), $tenAnh);
            $sanPham = new Products;
            $sanPham->category = $request->input('danhMucSanPham');
            $sanPham->don_vi = $request->input('dvSanPham');
            $sanPham->kich_thuoc = $request->input('ktSanPham');
            $sanPham->mau_sac = $request->input('mauSanPham');
            $sanPham->name = $request->input('tenSanPham');
            $sanPham->img = $tenAnh;
            $sanPham->price = $request->input('giaSanPham');
            $sanPham->ghichu = $request->input('ghichu');
            $sanPham->save();
            return view('admin-product-add')->with('successMessage', 'Thêm sản phẩm thành công!');
        }
        return view('admin-product-add')->with('erro', 'Thêm sản phẩm thất bại!');
    }

    public function getFormNewAdd(){
        return view('admin-new-add');
    }

    public function postFormNewAdd(Request $request){
        $request->validate([
            'anhTinTuc' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tieuDe' => 'required',
            'ngayDang' => 'required',
            'noiDung' => 'required',
        ]);
    
        if ($request->hasFile('anhTinTuc')) {
            $anhTinTuc = $request->file('anhTinTuc');
            $tenAnh = $anhTinTuc->getClientOriginalName();
            $anhTinTuc->move(public_path('uploads'), $tenAnh);
            $tinTuc = new News;
            $tinTuc->news_date = $request->input('ngayDang');
            $tinTuc->news_title = $request->input('tieuDe');
            $tinTuc->news_img = $tenAnh;
            $tinTuc->news_content = $request->input('noiDung');
            $tinTuc->save();
    
            return view('admin-new-add')->with('successMessage', 'Thêm tin tức thành công!');
        }
        return view('admin-new-add')->with('erro', 'Thêm thất bại!');
    }
    
}
