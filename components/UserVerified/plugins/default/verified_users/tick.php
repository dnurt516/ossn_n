<?php
if($params['user']){
		if($params['user']->isAdmin() || $params['user']->is_verified_user == true){
?>
<i class="fa fa-check-circle verified-user verified-title" title="<?php echo ossn_print('userverified:verified');?>"></i>
<?php
		}
}