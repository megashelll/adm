<!DOCTYPE html>
<html class="wp-toolbar" dir="rtl" lang="fa-IR">

	<head>
		<title>مدیر لیزینگ | <?php echo  bloginfo('name') ; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="<?php echo includes_url('/js/jquery/jquery.js'); ?>"></script>
		<link rel="stylesheet" href="<?php echo get_site_url() ?>/accounts/admin/assets/css/style.css">
		<link rel="stylesheet" href="<?php echo get_site_url() ?>/accounts/lib/bootstrap-5.3.3/dist/css/bootstrap.rtl.css">

	</head>
	<body>


<div class="navbar_bshome container-fluid bg-light  shadow-sm mb-3 position-relative">
	<div class="navbar_bshome_inner d-flex flex-wrap position-relative justify-content-between align-items-center">
		

		

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">منوی اصلی</a>
				<button class=" d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
					باز کردن منو
				</button>

				<!-- ساختار منوی آف کنوس -->
				<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
					<div class="offcanvas-header">
						<h5 class="offcanvas-title" id="offcanvasMenuLabel">منوی اصلی</h5>
						<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="بستن"></button>
					</div>
					<div class="offcanvas-body">
						<ul class="navbar-nav">
							<!-- کاربران -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://hamtaloans.com/wp-content/themes/woodmart/mega/inc/pages/account/branch/images/new_user.png" class="nav-icon"> کاربران
								</a>
								<ul class="dropdown-menu" aria-labelledby="usersDropdown">
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=new_leasing_user">تعریف کارمند لیزینگ</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=new_branch_user">ایجاد نمایندگی</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=new_customer_user">ساخت حساب مشتری</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=see_employee">مشاهده همه کارمندان</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=see_branches">مشاهده همه نمایندگی‌ها</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=see_customers">مشاهده همه مشتریان</a></li>
								</ul>
							</li>

							<!-- نمایندگی ها -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="branchesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://hamtaloans.com/wp-content/themes/woodmart/mega/inc/pages/account/branch/images/new_user.png" class="nav-icon"> نمایندگی‌ها
								</a>
								<ul class="dropdown-menu" aria-labelledby="branchesDropdown">
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=branches&amp;list=all">همه نمایندگان</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=branches&amp;search=all">جستجوی نماینده</a></li>
								</ul>
							</li>

							<!-- مصرف کننده -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="consumerDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://hamtaloans.com/wp-content/themes/woodmart/mega/assets/images/menu/invoice.png" class="nav-icon"> مصرف کننده
								</a>
								<ul class="dropdown-menu" aria-labelledby="consumerDropdown">
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=search_invoice">جستجوی فاکتور</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=search_customers">جستجو مشتری</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=approved_invoice">فاکتورهای تایید شده</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=rejected_invoice">فاکتورهای مردود شده</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=delivered_invoice">فاکتورهای تحویل شده</a></li>
								</ul>
							</li>

							<!-- مصرف کننده -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="consumerDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="https://hamtaloans.com/wp-content/themes/woodmart/mega/assets/images/menu/invoice.png" class="nav-icon"> مناطق
								</a>
								<ul class="dropdown-menu" aria-labelledby="consumerDropdown">
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=all_zone">مدیریت مناطق</a></li>
									<li><a class="dropdown-item" href="https://hamtaloans.com/my-account/?admin=add_zone">افزودن منطقه</a></li>
									
								</ul>
							</li>

							<!-- لینک‌های مستقیم -->
							<li class="nav-item">
								<a class="nav-link" href="https://hamtaloans.com/my-account/?admin=new_order">ثبت سفارش برای مشتری</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://hamtaloans.com/my-account/?admin=new_installment_customer">ثبت مشتری اقساطی</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>




		<div class="d-flex">
			<div class="bshome_this_day_date">
				<span>امروز : </span>
				<span><strong> <?php echo ($formatter->format($now)); ?> </strong></span>
			</div>
		

			<div class="position-relative">
				<img src="<?php echo wp_get_attachment_image_url(get_user_meta(get_current_user_id() , 'my_profile_image' , true)); ?>" alt="پروفایل" id="profileToggle" class="rounded-circle me-2" width="40" height="40" style="cursor: pointer; max-width:40px;" >
				<div class="dropdown-menu profile-dropdown shadow position-absolute mt-2" id="profileMenu">

					<div class="menu_profile_branch d-flex flex-wrap">
						<div class="mpb_image"><img src="<?php echo wp_get_attachment_image_url(get_user_meta(get_current_user_id() , 'my_profile_image' , true)); ?>"></div>
						<div class="mb_inner_congtent">
							<div class="mpb_name"><span>نام : </span><?php echo get_user_meta(get_current_user_id(),'first_name' , true) .' ' .get_user_meta(get_current_user_id(),'last_name' , true); ?> </div>
							<div class="mpb_taf"><span>شماره تماس : </span><?php echo get_user_meta(get_current_user_id(),'brach_mobile_number' , true); ?> </div>
							<div class="mpb_code"><span>کد ملی : </span><?php echo get_user_meta(get_current_user_id(),'user_id_number' , true) ; ?> </div>
						</div>
					</div>
					<a class="dropdown-item" href="<?php echo get_site_url() . '/my-account/?sale_accountant=profile';?>">پروفایل من</a>
					<a class="dropdown-item" href="#">تنظیمات</a>
					<a class="dropdown-item" href="<?php echo wp_logout_url( home_url() ); ?>">خروج</a>
				</div>
			</div>
		</div>
		<script>
			// کد جاوا اسکریپت برای تاگل منوی پروفایل
			document.addEventListener('DOMContentLoaded', function() {
				const profileToggle = document.getElementById('profileToggle');
				const profileMenu = document.getElementById('profileMenu');

				profileToggle.addEventListener('click', function() {
					profileMenu.classList.toggle('show');
				});

				// پنهان‌سازی منو در صورت کلیک در خارج از آن
				document.addEventListener('click', function(event) {
					if (!profileMenu.contains(event.target) && !profileToggle.contains(event.target)) {
						profileMenu.classList.remove('show');
					}
				});
			});
		</script>
		<script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function (element) {
                    element.addEventListener('click', function (e) {
                        e.stopPropagation();
                        const submenu = this.nextElementSibling;
                        submenu.classList.toggle('show');
                    });
                });
            });
        </script>
		
	</div>
</div>
	
<style>
	.profile-dropdown {
		min-width: 300px;
		top: 100%;
		left: 0;
		right: unset;
		background: radial-gradient(#005da79c, #005da79c);
		padding: 10px;
		backdrop-filter: blur(3px);
		color: #fff;
		font-size: 12px;
	}

	.mpb_image {
		width: 60px;
		height: 60px;
		background: #fff;
		margin: 0 0 0px 10px;
		border-radius: 10px;
	}

	.menu_profile_branch {
		padding: 0px 00px 10px 0px;
		border-bottom: 1px solid #fff;
		margin: 0 0 10px 0;
		justify-content: space-between;
		align-items: center;
	}

	.mb_inner_congtent {
		flex-grow: 1;
	}

	.profile-dropdown a.dropdown-item {
		color: #fff;
	}
	a.dropdown-item.dropdown-toggle {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	a.dropdown-item.dropdown-toggle:after {
		color: gray;
	}
</style>