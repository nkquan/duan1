<?php 

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Product;

class ProductsController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $products = (new Product())->all();
        $categories = (new Category())->all();

        // Mảng này có cấu trúc, key là id danh mục, value là tên danh mục
        // Tạo ra mảng này để hiển thị tên danh mục sản phẩm ở danh sách
        // $arrayCategoryIdName = [];
        // foreach($categories as $category) {
        //     $arrayCategoryIdName[$category['id']] = $category['name'];
        // }
        if(isset($_POST['btn-submit'])&&($_POST['btn-submit'])){
            $categoryID= $_POST['iddm'];
            // $productCate = (new Product())->getAllByCategoryID($categoryID);
        }else{
            $categoryID = 0;
        }
        $productCate = (new Product())->getAllByCategoryID($categoryID);
        $this->render("products", 
            [
                "products" => $products,    
                "categories" => $categories,
                "productCate" => $productCate 
                // "arrayCategoryIdName" => $arrayCategoryIdName
            ]
        );
    }


}