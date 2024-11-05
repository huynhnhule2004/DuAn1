<?php

namespace App\Views\Client\Layouts;

use App\Views\BaseView;

class Footer extends BaseView
{
    public static function render($data = null)
    {
        ?>
        <footer id="footer" class="my-5">
            <div class="container py-5 my-5">
                <div class="row">

                    <div class="col-md-3">
                        <div class="footer-menu">
                            <img src="/public/assets/client/images/logo.png" alt="logo">
                            <p class="blog-paragraph fs-6 mt-3">Đăng ký nhận bản tin của chúng tôi để cập nhật thông tin về những ưu đãi lớn.</p>
                            <div class="social-links">
                                <ul class="d-flex list-unstyled gap-2">
                                    <li class="social">
                                        <a href="#">
                                            <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="social">
                                        <a href="#">
                                            <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="social">
                                        <a href="#">
                                            <iconify-icon class="social-icon" icon="ri:pinterest-fill"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="social">
                                        <a href="#">
                                            <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="social">
                                        <a href="#">
                                            <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-menu">
                            <h3>Liên kết nhanh</h3>
                            <ul class="menu-list list-unstyled">
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Trang chủ</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Giới thiệu</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Sản phẩm</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Bài viết</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="nav-link">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-menu">
                            <h3>Chính sách hổ trợ</h5>
                                <ul class="menu-list list-unstyled">
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">FAQs</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">Phương thức thanh toán</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">Chính sách đổi trả</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">Thanh toán</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="nav-link">Thông tin giao hàng</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <h3>Bản tin</h3>
                            <p class="blog-paragraph fs-6">Đăng ký nhận bản tin của chúng tôi để nhận thông tin cập nhật về các ưu đãi lớn. 
                            </p>
                            <div class="search-bar border rounded-pill border-dark-subtle px-2">
                                <form class="text-center d-flex align-items-center" action="" method="">
                                    <input type="text" class="form-control border-0 bg-transparent"
                                        placeholder="Nhập Email của bạn..." />
                                    <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <div id="footer-bottom">
            <div class="container">
                <hr class="m-0">
                <div class="row mt-3">
                    <div class=" copyright">
                        <p class="secondary-font text-center">© Bản quyền thuộc về 2023 Waggy</p>
                    </div>
                   
                </div>
            </div>
        </div>


        <script src="public/assets/client/js/jquery-1.11.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
        <script src="public/assets/client/js/plugins.js"></script>
        <script src="public/assets/client/js/script.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

        </body>

        </html>


        <?php

        // unset($_SESSION['success']);
        // unset($_SESSION['error']);
    }
}

?>