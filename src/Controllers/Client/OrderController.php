<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Product;

class OrderController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function showOrder() {

        $this->render('order');
    }
}