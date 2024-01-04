<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function indexdelete()
    {
        return view('delete-test');
    }
    public function post(Request $request)
    {
        $tatest = new Tests;
        $tatest->test = $request->input('test');
        $tatest->save();
        return view('test')->with('successMessage', 'Thêm thành công!');
    }

    public function deleteTest(Request $request)
    {
        $testToDelete = $request->input('testdelete');

        // Kiểm tra xem test cần xóa có tồn tại trong cơ sở dữ liệu không
        $id = Tests::where('id', $testToDelete)->first();

        if ($id) {
            $id->delete();
            return view('delete-test')->with('successMessagedelete', 'Xóa thành công!');
        }
    }

}
