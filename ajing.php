<?php 
$path = preg_replace('/accounts.*$/','',__DIR__);
include($path.'wp-load.php');
require_once('/home/hamtaloa/domains/hamtaloans.com/private_html/inc/libs/spout-master/src/Spout/Autoloader/autoload.php');
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
$reader = ReaderEntityFactory::createXLSXReader();
$reader->open('new_brand32.xlsx');
$i = 0 ;
$j = 0 ;
foreach ($reader->getSheetIterator() as $sheet) {
	
	foreach ($sheet->getRowIterator() as $row) {
		if ($i != 0){
			$cells = $row->getCells();

			$user_id = $cells[0]->getValue();
			// $branch_leasing_employee_name = $cells[1]->getValue();
			// $branch_leasing_employee_id = $cells[2]->getValue();
			
			// $branch_zone_name = $cells[3]->getValue();
			// $branch_zone_namex = $cells[4]->getValue();
			// $branch_state_name = $cells[5]->getValue();
			// $branch_state_id = $cells[6]->getValue();
			// $branhc_zone_id = $cells[7]->getValue();
			// $branch_zone_manager_id = $cells[8]->getValue();
			// $branch_zone_manager_name = $cells[9]->getValue();
			

			echo '<div>';
				echo '<div>';
					
					$my_leasing_employee_name = get_user_meta($cells[2]->getValue() , 'first_name' , true). ' ' . get_user_meta($cells[2]->getValue() , 'last_name' , true);
				
					$h = ''; 
					for($k=0 ; $k<10 ; $k++){
						$h .='['.$k .'] '. $cells[$k]->getValue() .'<br>';

						// ای دی نماینده
						if ($k == 0){
							$bid = intval($cells[$k]->getValue()) ; 
							$user = get_user_by('ID', intval($bid)); 
							if ($user) {
								$user->remove_cap('edit_custom_post');
								$user->add_cap('branch');
							}
						}

						// ثبت نام کارشناس فروش
						if ($k == 1){
							$lin = $cells[$k]->getValue() ;
							update_user_meta($bid, 'my_leasing_employee_name'	, $lin) ;
						}

						// شناسه کارشناس
						if ($k == 2){
							$lid = intval($cells[$k]->getValue()) ;
							update_user_meta($bid, 'my_leasing_employee_id'		, $lid ) ;
							update_user_meta($bid, 'branch_leasing_employee_id'		, $lid ) ;
							
						}

						// شماره منطقه
						if ($k == 3){
							$zone_number = $cells[$k]->getValue() ;
							update_user_meta($bid, 'my_zone_number'		, $zone_number ) ;
						}

						// استان فعالیت نماینده
						if ($k == 4){
							$province = $cells[$k]->getValue() ;
							update_user_meta($bid, 'my_zone_state'				,$province) ;
						}


						if ($k == 5){
							$province_id = intval($cells[$k]->getValue()) ;
							update_user_meta($bid, 'my_zone_state_id'			, $province_id ) ;
						}

						if ($k == 6){
							$zone_id = $cells[$k]->getValue() ;
							update_user_meta($bid, 'my_zone_id'					, $zone_id ) ;
						}

						if ($k == 8){
							$zone_manager_id = $cells[$k]->getValue() ;
							update_user_meta($bid, 'my_zone_manager_id'			, $zone_manager_id ) ;
						}

						if ($k == 9){
							$zone_manager_name = $cells[$k]->getValue() ;
							update_user_meta($bid, 'my_zone_manager_name'		, $zone_manager_name ) ;
						}
					}
					echo $h . '<br>';
					echo '0 : شناسه نماینده : '		.$bid . '     ||  ' .$i. ' || '. $zone_manager_name .'<hr>';	

				echo '</div>';
			echo '</div>';
			echo  '<hr>';
		}
		
		$i++ ;
	}
	
	
}

$reader->close();