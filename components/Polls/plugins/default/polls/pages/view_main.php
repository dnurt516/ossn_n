<?php
$poll = $params['poll'];
if ($params['ossn_user']) {
	$ossn_user = $params['ossn_user'];
}
if($ossn_user) {
		$voted = $params['poll']->hasVoted();
		if($poll->container_type == 'user') {
				if(!$voted) {
						echo ossn_view_form('polls/answer', array(
								'action' => 'https://weplay.io/polls/add',
								'params' => $params,
								'id' => 'ossn-polls-form-questions-' . $params['poll']->guid,
								'data-guid' => $params['poll']->guid,
								'class' => 'ossn-polls-form-questions'
						));
				} else {
						$params['voted'] = $voted;
						echo ossn_plugin_view('polls/pages/result', $params);
				}
		} else {
				if(!$voted && $poll->container_type == 'group' && function_exists('ossn_get_group_by_guid')) {
						$group = ossn_get_group_by_guid($poll->container_guid);
						if($group->isMember('', $ossn_user->guid)) {
								echo ossn_view_form('polls/answer', array(
										'action' => 'https://weplay.io/polls/add',
										'params' => $params,
										'id' => 'ossn-polls-form-questions-' . $params['poll']->guid,
										'data-guid' => $params['poll']->guid,
										'class' => 'ossn-polls-form-questions'
								));
						} else {
								echo ossn_plugin_view('polls/pages/result', $params);
						}
				} else {
					echo ossn_plugin_view('polls/pages/result', $params);
				}
		}
} else {
		echo ossn_plugin_view('polls/pages/result', $params);
}