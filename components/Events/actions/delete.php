<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright (C) OPENTEKNIK  LLC, COMMERCIAL LICENSE
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$guid = input('guid');
$object = ossn_get_event($guid);
if(!$object) {
		ossn_trigger_message(ossn_print("event:delete:failed"), 'error');
		redirect(REF);
}
if(!$object || ($object->owner_guid != ossn_loggedin_user()->guid && $object->container_type == 'user') && !ossn_isAdminLoggedin()) {
		ossn_trigger_message(ossn_print("event:delete:failed"), 'error');
		redirect(REF);
}
$user = ossn_loggedin_user();
if($object->container_type == 'group') {
		if(function_exists('ossn_get_group_by_guid')) {
				$group = ossn_get_group_by_guid($object->container_guid);
				if($group && ($group->owner_guid !== ossn_loggedin_user()->guid && $object->owner_guid !== ossn_loggedin_user()->guid)) {
						if(!$user->canModerate()) {
								ossn_trigger_message(ossn_print('event:delete:failed'), 'error');
								redirect(REF);
						}
				}
		}
}
if($object->deleteObject()) {
			$list = (array)ossn_get_relationships(array(
						'to' => $object->guid,
						'type' => ossn_events_relationship_default()
			));
			if($list) {
					foreach($list as $item) {
							ossn_delete_relationship_by_id($item->relation_id);
					}
			}
			ossn_trigger_message(ossn_print('event:deleted'));
			if($object->container_type == 'user'){
				redirect("event/list");
			} else {
				redirect("group/{$group->guid}/events");	
			}
}
ossn_trigger_message(ossn_print('event:delete:failed'), 'error');
redirect(REF);