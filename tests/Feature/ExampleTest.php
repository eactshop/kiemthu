<?php

namespace Tests\Feature;

use App\Models\Tests;
use Tests\TestCase;

class TestControllerTest extends TestCase
{
    public function testPostMethod()
    {
        // Tạo dữ liệu giả định cho request
        $data = ['test' => 'Test data 1'];

        // Gửi một POST request tới route của TestController
        $response = $this->post('/test', $data);

        // Kiểm tra xem request có được xử lý thành công không
        $response->assertStatus(200);

        // Kiểm tra xem dữ liệu đã được thêm vào cơ sở dữ liệu chưa
        $this->assertDatabaseHas('test', [
            'test' => 'Test data 1',
        ]);
        // Kiểm tra xem view có chứa thông báo thành công không
        $response->assertViewHas('successMessage', 'Thêm thành công!');
    }

    public function testDeleteMethod()
    {
        // Tạo một bản ghi để xóa
        $test = Tests::create(['test' => 'Test data to delete']);

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
