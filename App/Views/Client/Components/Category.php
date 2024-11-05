<?php

namespace App\Views\Client\Components;

use App\Views\BaseView;

class Category extends BaseView
{
    public static function render($data = null)
    {
?>

        <div class="widget-product-categories pt-5">
            <h4 class="widget-title">Danh mục</h4>
            <ul class="product-categories sidebar-list list-unstyled">
                <li class="cat-item">
                    <a href="/collections/categories">Tất cả</a>
                </li>
                <li class="cat-item">
                    <a href="#" class="nav-link">Dành Cho Chó</a>
                </li>
                <li class="cat-item">
                    <a href="#" class="nav-link">Dành Cho Mèo</a>
                </li>
                <li class="cat-item">
                    <a href="#" class="nav-link">Thức Ăn</a>
                </li>
                <li class="cat-item">
                    <a href="#" class="nav-link">Đồ chơi</a>
                </li>
            </ul>
        </div>
        <h4 class="page-title d-none d-lg-block pt-4">
            Lọc giá
        </h4>
        <div class="mb-3">
            <select name="price" id="price" class="form-select">
                <option value="">Tất cả</option>
                <option value="0-100000">Dưới 100,000đ</option>
                <option value="100000-500000">100,000đ - 500,000đ</option>
                <option value="500000-1000000">500,000đ - 1,000,000đ</option>
                <option value="1000000">Trên 1,000,000đ</option>
            </select>
        </div>

<?php
    }
}
