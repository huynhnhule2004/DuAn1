<?php

namespace App\Views\Client\Pages\Profile;

use App\Views\BaseView;



class Profile extends BaseView
{
	public static function render($data = null)
	{
?>
		<div class="row">
			<div class="col-12">
				<!-- Page title -->
				<div class="my-5 text-center">
					<h3 class="">Hồ sơ của tôi</h3>
					<hr>
				</div>
				<!-- Form START -->
				<form class="file-upload">
					<div class="row mb-5 gx-5">
						<!-- Contact detail -->
						<div class="col-xxl-8 mb-5 mb-xxl-0">
							<div class="bg-secondary-soft px-4 py-5 rounded">
								<div class="row g-3">
									<h4 class="mb-4 mt-0">Chi tiết liên lạc</h4>
									<!-- First Name -->
									<div class="col-md-6">
										<label class="form-label">Tên*</label>
										<input type="text" class="form-control" placeholder="" aria-label="First name" value="Ca Moi">
									</div>
									<!-- Last name -->
									<div class="col-md-6">
										<label class="form-label">Họ*</label>
										<input type="text" class="form-control" placeholder="" aria-label="Last name" value="3 Co Gai">
									</div>
									<!-- Phone number -->
									<div class="col-md-6">
										<label class="form-label">Số điện thoại*</label>
										<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="(333) 000 555">
									</div>
									<!-- Mobile number -->
									<div class="col-md-6">
										<label class="form-label">Địa chỉ*</label>
										<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="HCM">
									</div>
									<!-- Email -->
									<div class="col-md-6">
										<label for="inputEmail4" class="form-label">Email *</label>
										<input type="email" class="form-control" id="inputEmail4" value="hoso@gmail.com">
									</div>
									<!-- Skype -->
									<div class="col-md-6">
										<label class="form-label">FB*</label>
										<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="fb.com">
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
						<!-- Upload profile -->
						<div class="col-xxl-4">
							<div class="bg-secondary-soft px-4 py-5 rounded">
								<div class="row g-3">
									<h4 class="mb-4 mt-0 text-center">Tải ảnh hồ sơ của bạn lên</h4>
									<div class="text-center">
										<!-- Image upload -->
										<div class="square position-relative display-2 mb-3">
											<i class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
										</div>
										<!-- Button -->
										<input type="file" id="customFile" name="file" hidden="">
										<label class="btn btn-success-soft btn-block" for="customFile">Tải lên</label>
										<button type="button" class="btn btn-danger-soft">Xoá</button>
										<!-- Content -->
										<p class="text-muted mt-3 mb-0"><span class="me-1">Chú ý:</span>Ảnh size 300px x 300px</p>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- Row END -->

					<!-- Social media detail -->
					<div class="row mb-5 gx-5">


						<!-- change password -->
						<!-- <div class="col-xxl-6">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="my-4">Change Password</h4>
								<!-- Old password -->
						<!-- <div class="col-md-6">
									<label for="exampleInputPassword1" class="form-label">Old password *</label>
									<input type="password" class="form-control" id="exampleInputPassword1">
								</div> -->
						<!-- New password -->
						<!-- <div class="col-md-6">
									<label for="exampleInputPassword2" class="form-label">New password *</label>
									<input type="password" class="form-control" id="exampleInputPassword2">
								</div> -->
						<!-- Confirm password -->
						<!-- <div class="col-md-12">
									<label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
									<input type="password" class="form-control" id="exampleInputPassword3">
								</div> -->
					</div>
			</div>
		</div>
		</div>
		<!-- button -->
		<div class="gap-3 d-md-flex justify-content-center ms-3 text-start">
    <button type="button" class="btn btn-danger btn-lg">Xóa Hồ Sơ</button>
    <button type="button" class="btn btn-primary btn-lg">Cập Nhật</button>
</div>

		</form> <!-- Form END -->
		</div>
		</div>

<?php
	}
}
