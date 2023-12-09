<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Product;



class  CommentController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function comment() {        
        $this->renderComment('comment');
    }

    public function create() {
        if (isset($_POST['btn-submit'])) {
            $data = [
                'content' => $_POST['content'],
                'id_user' => $_SESSION['user']['id'],
                'id_product' => $_POST['id_product'],
                'date_cmt' => date('Y-m-d',time()),
            ];

            (new Comment)->insert($data);

            header('location: /client/index');
        }

        $product=(new Product())->all();

        $this->renderComment("comment", [
            "product" => $product
        ]);
    }

    public function get(){   
        if ($_GET['idsp'] && $_GET['idsp'] > 0) {
            $idsp = $_GET['idsp'];
            $product = (new Product())->findOne($idsp);
            $comment = (new Comment)->getComments($idsp); 
        }

        $this->renderComment("comment", [
            "product" => $product,
            'comment' => $comment]);
    }
}