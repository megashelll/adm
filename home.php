<?php require_once('master_functions.php'); ?>
<?php require_once('menu.php'); ?>


<div class="maste" style="width:100%; z-index:1; position:relative ;">
	<div class="mega_users_account container-fluid d-flex flex-wrap justify-content-between  align-items-start ">
		
		<div class="mua_content container">
			<?php 
				if (isset($_GET)){
					if (isset($_GET['admin'])){
						if ($_GET['admin'] == 'new_leasing_user'){
							require_once('pages/my_leasing/new_employee.php');
						}
						elseif($_GET['admin'] == 'new_branch_user'){
							require_once('pages/my_branch/new_branch_user.php');
						}
						elseif($_GET['admin'] == 'see_employee'){
							require_once('pages/my_leasing/see_employee.php');
						}
						elseif($_GET['admin'] == 'plans_Performance'){
							require_once('pages/my_plans/plans_performance.php');
						}
						elseif($_GET['admin'] == 'search_invoice'){
							require_once('pages/my_leasing/search_invoice.php');
						}	
						elseif($_GET['admin'] == 'org_dashboard'){
							require_once('pages/my_organization/dashboard.php');
						}
						elseif($_GET['admin'] == 'new_organization'){
							require_once('pages/my_organization/new_organization.php');
						}
						elseif($_GET['admin'] == 'all_organization'){
							require_once('pages/my_organization/all_organization.php');
						}
						// مشتریان
						elseif($_GET['admin'] == 'search_customers'){
							require_once('pages/my_customers/search_customer.php');
						}



						elseif($_GET['admin'] == 'add_zone'){
							require_once('pages/zone/add_zone.php');
						}elseif($_GET['admin'] == 'all_zone'){
							require_once('pages/zone/all_zone.php');
						}elseif($_GET['admin'] == 'edit_zone'){
							require_once('pages/zone/edit_zone.php');
						}elseif($_GET['admin'] == 'all_plans'){
							require_once('pages/my_plans/all_plans.php');
						}elseif($_GET['admin'] == 'edit_zone_emp'){
							require_once('pages/zone/edit_zone_emp.php');
						}
						
						




						// مدیریت نمایندگی ها 
						elseif($_GET['admin'] == 'branches'){
							if (isset($_GET['list'])){
								if ($_GET['list'] == 'all'){
									require_once('pages/my_branch/list_of_branches.php');
								}if ($_GET['search'] == 'all'){
									require_once('pages/my_branch/list_of_branches.php');
								}
							}
							require_once('pages/my_customers/search_customer.php');
						}

						else{
							require_once('pages/dashboard.php');
						}
					}

				}
			?>
		</div>	
	</div>

	
</div>

<?php require_once('footer.php'); ?>

