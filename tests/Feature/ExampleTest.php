<?php

namespace Tests\Feature;

use App\Models\Tests;
use Tests\TestCase;

class TestControllerTest extends TestCase
{
    public function testPostMethod()
    {
        // Test case
        $dataname = ['tuananh', 'tuananh1', 'aaaa'];
        $dataprice = ['10', '10', '245'];
        $datasl = ['10', '10', '123'];

        // Sử dụng vòng lặp để gửi từng test case đến route của TestController
        foreach (array_map(null, $dataname, $dataprice, $datasl) as [$name, $price, $quantity]) {
            $response = $this->post('/test', ['test' => $name, 'testprice' => $price, 'testsl' => $quantity]);

            // Kiểm tra xem request có được xử lý thành công không
            $response->assertStatus(200);

            // Kiểm tra xem dữ liệu đã được thêm vào cơ sở dữ liệu chưa
            $this->assertDatabaseHas('test', ['test' => $name, 'gia' => $price, 'soluong' => $quantity]);

            // Kiểm tra xem view có chứa thông báo thành công không
            $response->assertViewHas('successMessage', 'Thêm sản phẩm thành công!');
        }
    }

    public function testDeleteMethod()
    {
        // Tạo một bản ghi để xóa
        $test = Tests::create(['test' => 'taaaaaa', 'gia' => '456', 'soluong' => '345']);

        // Gửi DELETE request tới route của TestController để xóa bản ghi với ID của bản ghi vừa tạo
        $response = $this->delete('/delete-test', ['testdelete' => $test->id]);

        // Kiểm tra xem đã được chuyển hướng về trang 'delete-test' sau khi xóa thành công
        $response->assertStatus(200);

        // Kiểm tra xem view có chứa thông báo thành công không
        $response->assertViewHas('successMessagedelete', 'Xóa thành công!');

        // Kiểm tra xem bản ghi đã bị xóa khỏi cơ sở dữ liệu chưa
        $this->assertDatabaseMissing('test', ['id' => $test->id]);
    }

}
