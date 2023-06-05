<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$users = $params['users'];
$ossn_user = $params['user'];
if ($users) {
    foreach ($users as $user) {
      ?>
		<div class="row ossn-users-list-item px15 justify-content-between">
            	<div class="col-auto ossn-users-list-item_avatar">
    	        		<img src="<?php echo $user->iconURL()->large; ?>" width="60" height="60"/>
				</div>&nbsp;
                <div class="col align-self-center">
	    	        <div class="uinfo">
                        <?php
							echo ossn_plugin_view('output/url', array(
									'text' => $user->fullname,
									'href' =>  ((!$ossn_user)?$user->profileURL():"https://weplay.io/user/".$user->guid),
									'class' => 'userlink',
							));						
						?>
        	   		</div>
                    <div class="right users-list-controls">
	                    <?php
						if (ossn_isLoggedIn() || $ossn_user) {
							if (!$ossn_user) {
								if (ossn_loggedin_user()->guid !== $user->guid) {
	                    			if (!ossn_user_is_friend(ossn_loggedin_user()->guid, $user->guid)) {
	                        				if (ossn_user()->requestExists(ossn_loggedin_user()->guid, $user->guid)) {
													echo ossn_plugin_view('output/url', array(
														'text' => ossn_print('cancel:request'),
														'href' =>  ossn_site_url("action/friend/remove?cancel=true&user={$user->guid}", true),
														'class' => 'btn btn-warning',
													));
											} else {
													echo ossn_plugin_view('output/url', array(
														'text' => ossn_print('add:friend'),
														'href' =>  ossn_site_url("action/friend/add?user={$user->guid}", true),
														'class' => 'btn btn-primary',
													));		
											}
									} else {
										echo ossn_plugin_view('output/url', array(
														'text' => ossn_print('remove:friend'),
														'href' =>  ossn_site_url("action/friend/remove?user={$user->guid}", true),
														'class' => 'btn btn-danger',
										));	
					
									}
								}
							} else {
								if ($ossn_user->guid !== $user->guid) {
	                    			if (!ossn_user_is_friend($ossn_user->guid, $user->guid)) {
	                        				if (ossn_user()->requestExists($ossn_user->guid, $user->guid)) {
													echo ossn_plugin_view('output/url', array(
														'text' => ossn_print('cancel:request'),
														'href' =>  ossn_site_url("action/friend/remove?cancel=true&user={$user->guid}", true),
														'class' => 'btn btn-warning',
													));
											} else {
													echo ossn_plugin_view('output/url', array(
														'text' => ossn_print('add:friend'),
														'href' =>  ossn_site_url("action/friend/add?user={$user->guid}", true),
														'class' => 'btn btn-primary',
													));		
											}
									} else {
										echo ossn_plugin_view('output/url', array(
														'text' => ossn_print('remove:friend'),
														'href' =>  ossn_site_url("action/friend/remove?user={$user->guid}", true),
														'class' => 'btn btn-danger',
										));	
					
									}
								}							}
						}
						?>		
                   </div>
               </div>         
        </div>
    <?php
    }

}?>
