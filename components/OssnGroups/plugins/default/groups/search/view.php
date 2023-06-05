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
if ($params['groups']) {
	echo "<div class='group-search-items'>";
    foreach ($params['groups'] as $group) {
		$owner = ossn_user_by_guid($group->owner_guid);
        if ($params['ref_url']) {
            if ($group->proj_id) $ref_url = 'projects/'.$group->proj_id.$params['ref_url'];
            elseif ($group->comp_id) $ref_url = 'companies/'.$group->comp_id.$params['ref_url'];
            elseif ($group->fest_id) $ref_url = 'festivals/'.$group->fest_id.$params['ref_url'];
            else $ref_url = 'user/'.$group->owner_guid.$params['ref_url'];
        }
        if ($group->proj_id) $group_class = "search_group--proj";
        elseif ($group->comp_id) $group_class = "search_group--comp";
        elseif ($group->fest_id) $group_class = "search_group--fest";
        else $group_class = "search_group--pers";
        ?>
		
        <div class="row justify-content-start <?php echo (($group_class)?$group_class:''); ?>">
        	<div class="col-auto">
	            <div class="grp_logo d-none d-sm-block"></div>
                
            </div>
			<div class="col">
	            <div class="group-search-details">
    	            <a class="group-name" href="<?php if (!$params['user']) { 
                        echo ossn_site_url(); ?>group/<?php 
                        echo $group->guid; 
                        } else { 
                            echo 'https://' . $_SERVER['HTTP_HOST'].'/'.$ref_url.'/g/'.$group->guid; 
                        } ?>/"><?php echo $group->title; ?>
                    </a>
                    <?php if ($group->owner_guid === $params['user']->guid or $params['user']->isAdmin()) { ?> 
                    
                        <a class="edit_group" title="Edit group" id="<?php echo $group->guid; ?>" data-pc-id="<?php 
                            echo (($group->proj_id)?'proj_'.$group->proj_id:(($group->comp_id)?'comp_'.$group->comp_id:(($group->fest_id)?'fest_'.$group->fest_id:''))); ?>"  data-title="edit group" href="#"></a>
                    <?php } ?>
                     
                        <a class="about_group" title="About group" id="<?php echo $group->guid; ?>" data-pc-id="<?php echo (($group->proj_id)?'proj_'.$group->proj_id:(($group->comp_id)?'comp_'.$group->comp_id:(($group->fest_id)?'fest_'.$group->fest_id:''))); ?>" data-title="about comp group" href="#"></a>
                    
                    <p class="group-total-members"><i class="fa fa-users">&nbsp;</i><?php echo $group->getMembers(true); ?></p>
        	        <p class="ossn-group-search-by"><?php echo ossn_print('ossn:group:by');?><a href="<?php if (!$params['user']) { echo $owner->profileURL(); } else { echo 'https://' . $_SERVER['HTTP_HOST'] . '/user/'.$owner->guid; }?>"><?php echo $owner->fullname;?></a></p>
           	 	 </div>
			</div>
            <div class="group_profile" g-id="<?php echo $group->guid; ?>"></div>
        </div>


    <?php
    }
	echo "</div>";
}
?>
