<?php
$poll = $params['poll'];
$entity = $params['entity'];
?>
<div class="ossn-wall-item" id="activity-item-<?php echo $params['post']->guid; ?>">
	<div class="row">
		<div class="meta">
			<img class="user-img" style="width: 50px; height: 50px;" src="<?php echo $params['user']->iconURL()->small; ?>" />
			<div class="post-menu">
				<div class="dropdown">
                 <?php
           			if (ossn_is_hook('wall', 'post:menu') && (ossn_isLoggedIn() || $params['user'])) {
                		$menu['post'] = $params['post'];
               			echo ossn_call_hook('wall', 'post:menu', $menu);
            			}
            		?>   
				</div>
			</div>
			<div class="user">
           <?php if ($params['user']->guid == $params['post']->owner_guid) { ?>
                <?php
				echo ossn_plugin_view('output/user/url', array(
						'user' => $params['user'],		
						'section' => 'wall',
				));
				?>                
                <div class="ossn-wall-item-type"><?php echo ossn_print('polls:wall:created');?></div>
            <?php
            } 
			?>
			</div>
			<div class="post-meta">
				<span class="time-created"><?php echo ossn_user_friendly_time($params['post']->time_created); ?></span>
			</div>
		</div>

       <div class="post-contents">
			<div class="ossn-poll-item-main-<?php echo $poll->guid;?>">
				<?php echo ossn_plugin_view('polls/pages/view_main', array(
						'poll' => $poll,	
						'ossn_user' => $params['user']													   
				));
				?>
			</div>
			<script>Ossn.poll(<?php echo $poll->guid;?>);</script>
    	</div>
	<?php
		$vars['entity'] = $entity;
		$vars['full_view'] = false;
		echo ossn_plugin_view('entity/comment/like/share/view', $vars);
	?>    
	</div>
</div>