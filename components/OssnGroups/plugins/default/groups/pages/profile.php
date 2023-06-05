<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$cover = $params['group']->haveCover();
$iscover = '';
$ismember = false;
if ($cover) {
    $iscover = 'ossn-group-cover-header';
    $coverp = $params['group']->coverParameters($params['group']->guid);
    if(isset($coverp[0]) && strlen($coverp[0])){
		$cover_top = "top:{$coverp[0]}px;";
	}
	else {
		$cover_top = 'top:0px;';
	}
	if(isset($coverp[1]) && strlen($coverp[1])){
	    $cover_left = "left:{$coverp[1]}px;";
	}
	else {
		$cover_left = 'left:0px;';
	}
	if(!isset($coverp[0])){
		$coverp[0] = '';
	}
	if(!isset($coverp[1])){
		$coverp[1] = '';
	}	
}
//group members total count becomes 0 when group cover is set #156 $dev.githubertus 
$members = $params['group']->getMembers();
$requests = $params['group']->getMembersRequests();
?>
<div class="ossn-group-profile">
	<div class="ossn-group-top-row">
		<div class="row">
			<div class="col-md-12">
				<div class="profile-header <?php echo $iscover; ?>">
					<form id="group-upload-cover" style="display:none;" method="post" enctype="multipart/form-data">
						<input type="file" name="coverphoto" class="coverfile"
							onchange="Ossn.Clk('#group-upload-cover .upload');"/>
						<input type="hidden" value="<?php echo $params['group']->guid; ?>" name="group"/>
						<input type="submit" class="upload"/>
					</form>
					<div class="ossn-group-cover" id="container">
						<?php if ($params['user']->guid === $params['group']->owner_guid || $params['user']->isAdmin()) { ?>
						<div class="ossn-group-cover-button">
							<a href="javascript:void(0);" onclick="repositionGroupCOVER(<?php echo $params['group']->guid; ?>);" class="button-grey group-c-position" style="display:none !important;">Save Position</a>
							<a href="javascript:void(0);" id="reposition-group-cover"
								class='button-grey'><?php echo ossn_print('reposition:cover'); ?></a>
							<a href="javascript:void(0);" id="add-cover-group"
								class='button-grey'><?php echo ossn_print('change:cover'); ?></a>
						</div>                  
						<?php } ?>
						<img id="draggable" src="<?php echo $params['group']->coverURL(); ?>"
							style='<?php echo $cover_top; ?><?php echo $cover_left; ?>' data-top='<?php echo $coverp[0]; ?>' data-left='<?php echo $coverp[1]; ?>'/>
					</div>
					<div class="header-bottom row">
						<div class='group-header-sep'>
                     		   <div class="group-name">
									<a ><?php echo $params['group']->title; ?></a>
                                    
                                    <p class="group-total-members"><i class="fa-solid fa-users"></i><?php echo $params['group']->getMembers(true);?></p>
								</div>
								<div class="groups-buttons">
							
							<?php if($params['user'] && $params['group']->owner_guid !== $params['user']->guid) {
									if($params['group']->isMember(NULL, $params['user']->guid)) {
								   		 $ismember = 1;
								    	?>
										<a href="<?php echo ossn_site_url("action/group/member/cancel?group={$params['group']->guid}", true); ?>" class='button-grey'>
											<?php echo ossn_print('leave:group'); ?>
                                        </a>
								<?php } else if (!$params['group']->requestExists($params['user']->guid, false)) { ?>
										<a href="<?php echo ossn_site_url("action/group/join?group={$params['group']->guid}", true); ?>" class='button-grey'>
											<?php echo ossn_print('join:group'); ?>
                                        </a>
								<?php } ?>
                                
								<?php if(!$ismember && $params['group']->requestExists($params['user']->guid, false)) { ?>
										<a href="<?php echo ossn_site_url("action/group/member/cancel?group={$params['group']->guid}", true); ?>" class='button-grey'>
										<?php echo ossn_print('cancel:membership'); ?></a>
								<?php } ?>
                                
							<?php } // if($params['user'] && $params['group']->owner_guid !== $params['user']->guid) {?>
                            
							<?php if($params['user'] && ($params['group']->owner_guid == $params['user']->guid || ossn_isAdminLoggedin())) {
										$ismember = 1;
							?>
									<!-- <a href="<?php echo ossn_group_url($params['group']->guid); ?>edit" class='button-grey'>
										<?php echo ossn_print('settings'); ?>
                                 	</a> -->
									<!-- <a href="javascript:void(0);" onclick="Ossn.repositionGroupCOVER(<?php echo $params['group']->guid; ?>);" class='button-grey group-c-position'>
											<?php echo ossn_print('save:position'); ?>
									</a> -->
								<!-- <?php if (!$cover) {?>
									<a href="javascript:void(0);" id="add-cover-group" class='button-grey'>
											<?php echo ossn_print('change:cover'); ?>
									</a>
								<?php } ?> -->
							<?php } ?>
								</div>   
                         </div>  <!-- ./div -->                   
						<!-- <div id='group-header-menu' class="group-header-menu visible-lg">
						<?php echo ossn_plugin_view('menus/groupheader', array('menu_width' => 60)); ?>
						</div> -->
						<div id='group-header-menu' class="group-header-menu visible-md">
							<?php echo ossn_plugin_view('menus/groupheader', array('menu_width' => 40)); ?>
						</div>
						<div id='group-header-menu' class="group-header-menu visible-sm">
							<?php echo ossn_plugin_view('menus/groupheader', array('menu_width' => 25)); ?>
						</div>
						<div id='group-header-menu' class="group-header-menu visible-xs">
							<?php echo ossn_plugin_view('menus/groupheader', array('menu_width' => 1)); ?>
						</div>
					</div> <!-- .header-bottom/ -->            
				</div> <!-- ./ossn-group-top-row -->
			</div> <!-- ./col-md-11 -->
		</div>	<!-- ./row -->
	</div> <!-- ./ossn-group-top-row -->
    <div class="ossn-group-bottom-row mb30">
     	<?php
		if (isset($params['subpage']) && !empty($params['subpage']) && ossn_is_group_subapge($params['subpage'])) {
            if (ossn_is_hook('group', 'subpage')) {
				echo "<div class='row'>";
                echo ossn_call_hook('group', 'subpage', $params);
				echo "</div>";
            }
        }  else { 
		?>   
    	<div class="row">
    		<div class="col-md-7">
				 
        	</div> <!-- ./col-md-7 -->
             <div class="col-md-12">
             	<div class="page-sidebar ">
        		<?php 
				echo ossn_view_widget(array(
						'title' => ossn_print('about:group'),
						'contents' => nl2br($params['group']->description),
						'class' => 'widget-description',
				));					
				if($params['user'] && ($params['group']->owner_guid == $params['user']->guid || ossn_isAdminLoggedin() || $params['group']->isModerator($params['user']->guid) )) {
					// $member_requests = ossn_plugin_view('output/url', array(
					// 		'text' => ossn_print('view:all'),
					// 		'href' => ossn_group_url($params['group']->guid).'requests'
					// ));
					$requests_count = $params['group']->countRequests();
					if($requests_count === false){
						$requests_count = 0;
					}
						
					$requests_content = '';
					if (empty($requests)) {
					    $requests_content = '<div class="ossn-group-no-requests">' . ossn_print('no:requests') . '</div>';
					} else {
					    foreach ($requests as $user) {
						      $requests_content .= '<div class="ossn-group-members">
								<div class="row align-items-center">
					            	<div class="col-auto col-xs-12">
					    	        		<img src="'.$user->iconURL()->small.'" class="img-responsive"/>
									</div>&nbsp;
					                <div class="col-auto col-xs-12 align-self-start">
						    	        <div class="uinfo">
					                        '.ossn_plugin_view('output/url', array(
														'text' => $user->fullname,
														'href' =>  $user->profileURL(),
														'class' => 'userlink',
												)).'		
					        	   		</div>
                                    </div>	
					               <div class="col col-xs-12 align-self-center">
                                        <div class="right request-controls">
												'.ossn_plugin_view('output/url', array(
														'text' => ossn_print('approve'),
														'href' =>  ossn_site_url("action/group/member/approve?group={$params['group']->guid}&user={$user->guid}", true),
														'class' => 'btn btn-primary',
												)).
												ossn_plugin_view('output/url', array(
														'text' => ossn_print('decline'),
														'href' =>  ossn_site_url("action/group/member/decline?group={$params['group']->guid}&user={$user->guid}", true),
														'class' => 'btn btn-danger',
												)).'
												
					                   </div>
					                </div>
					            </div>
					        </div>';
					    }
					}		
					echo ossn_view_widget(array(
							'title' => ossn_print('member:requests', array($requests_count)),
							'contents' => $requests_content,
							'class' => 'group-requests-widget',
					));		
				}
				$count = $params['group']->getMembers(true);
				$limit = 1;
				/*if($members) {
					foreach($members as $member) {
						if($limit <= 10) {
							$img =  '<img src="'.$member->iconURL()->small.'" title="'.$member->fullname.'"/>';
							$profile_url = ossn_plugin_view('output/url', array(
											'text' => $img,
											'href' => $member->profileURL()
										 ));
							$members_html[] = $profile_url;
							$limit++;
						}
					}
					echo '<div class="group-widget-members">';
					echo ossn_view_widget(array(
								'title' => ossn_print('group:members', array($count)),
								'contents' => implode('', $members_html)
					));
					echo '</div>';
				}	*/
				if ($members) {
					$members_content = '';
				    foreach ($members as $user) {
				      
					    $members_content .= '<div class="ossn-group-members">
							<div class="row align-items-center">
				            		<div class="col-auto col-xs-12">
				    	        		<img src="'.$user->iconURL()->large.'" class="img-responsive"/>
									</div>&nbsp;
				                   <div class="col col-xs-12">
				    	    	        <div class="uinfo">
					    						'.ossn_plugin_view('output/url', array(
					    								'text' => $user->fullname,
					    								'href' =>  $user->profileURL(),
					    								'class' => 'userlink',
					    						)).'
				             	   		</div>
				                    	 <div class="right request-controls">';
									if($params['user']){
										if (($params['user']->guid == $params['group']->owner_guid) && $user->guid !== $params['group']->owner_guid && $params['group']->isMember($params['group']->guid, $user->guid)) {
					    								$members_content .= ossn_plugin_view('output/url', array(
					    									'text' => ossn_print('group:memb:remove'),
					    									'href' =>  ossn_site_url("action/group/member/decline?group={$params['group']->guid}&user={$user->guid}", true),
						    								'class' => 'btn btn-danger btn-responsive ossn-make-sure'
						    							));
														//don't let moderators to make themselve owner
														if($params['user']->guid == $params['group']->owner_guid){
											        		$members_content .=  ossn_plugin_view('output/url', array(
										    					'data-new-owner' => $user->fullname,
										    					'data-is-admin' => $params['user']->isAdmin(),
											    				'text' => ossn_print('group:memb:make:owner'),
											    				'href' =>  ossn_site_url("action/group/change_owner?group={$params['group']->guid}&user={$user->guid}", true),
											    				'class' => 'btn btn-warning btn-responsive ossn-group-change-owner'
											    			));
														}
						    						}
									}
				        $members_content .=    '</div>
				            		</div>           
				       			</div>
				          </div>';
				    }
					// echo ossn_view_pagination($count);
					echo ossn_view_widget(array(
								'title' => ossn_print('group:members', array($count)),
								'contents' => $members_content,
					));
				}
					if(ossn_is_hook('group', 'widgets')){ 
								$params['group'] = $params['group']; 
								$modules = ossn_call_hook('group', 'widgets', $params);
								if ($modules) {
									echo implode( '', $modules);
								}
					}			
           	  ?>
             </div> <!-- ./page-sidebar -->
            </div> <!-- ./col-md-4 -->
    	</div> <!-- ./row -->
        <?php 
			} //subpage  end else
		?>
    </div> <!-- ./ossn-group-bottom-row -->
    
</div>
