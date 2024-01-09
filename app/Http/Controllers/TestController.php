<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
            'test' => 'required|string|max:255',
            'testprice' => 'required|numeric|max:255',
            'testsl' => 'required|numeric',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $inputTest = $request->input('test');
        $inputTestPrice = $request->input('testprice');
        $inputTestSl = $request->input('testsl');
    
        // Lọc dữ liệu trước khi lưu vào cơ sở dữ liệu
        $filteredTest = $this->filterSpecialCharacters($inputTest);
        $filteredTestPrice = $this->filterSpecialCharacters($inputTestPrice);
        $filteredTestSl = $this->filterSpecialCharacters($inputTestSl);
    
        // Kiểm tra nếu filterSpecialCharacters trả về false, báo lỗi
        if ($filteredTest === false ) {
            return view('test')->with('errorMessage', 'Tên sản phẩm nhập vào không hợp lệ');
        }
        if ($filteredTestPrice === false ) {
            return view('test')->with('errorMessage', 'Giá sản phẩm nhập vào không hợp lệ');
        }
        if ($filteredTestSl === false ) {
            return view('test')->with('errorMessage', 'Số lượng sản phẩm nhập vào không hợp lệ');
        }
    
        $filteredTest = htmlspecialchars($filteredTest, ENT_QUOTES, 'UTF-8');
    
        $tatest = new Tests;
        $tatest->test = $filteredTest;
        $tatest->gia = $filteredTestPrice;
        $tatest->soluong = $filteredTestSl;

        $tatest->save();
    
        return view('test')->with('successMessage', 'Thêm sản phẩm thành công!');
    }
    

    private function filterSpecialCharacters($input)
    {
        $filteredInput = preg_replace('/[\'".,+!-]{}*=?$&/', '', $input);
    
        // Kiểm tra xem chuỗi sau khi lọc có khác biệt so với chuỗi gốc hay không
        if ($filteredInput !== $input) {
            return false; // Trả về false để báo hiệu rằng chuỗi không hợp lệ
        }
    
        return $filteredInput;
    }
    

    public function deleteTest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'testdelete' => 'required|numeric', // Ví dụ: kiểm tra xem testdelete có phải là số không
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $testToDelete = $request->input('testdelete');
        $test = Tests::find($testToDelete);

        if ($test) {
            $test->delete();
            return view('delete-test')->with('successMessagedelete', 'Xóa thành công!');
        }
    }

}
