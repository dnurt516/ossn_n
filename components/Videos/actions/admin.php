<?php
/**
 * Open Source Social Network
 *
 * @package   Premium Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   OPENTEKNIK LLC, COMMERCIAL LICENSE v1.0 https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.openteknik.com
 */
$component = new OssnComponents();

$path    = input('ffmpeg');
$upgrade = input('upgrade');

$compression = intval(input('compression', '', 35));
$time        = intval(input('time', '', 30));

if($compression && $compression < 1  || $compression && $compression > 50) {
		$compression = 1;
}
if($time && $time < 10) {
		$time = 10;
}
if(empty($path) && !isset($upgrade)) {
		ossn_trigger_message(ossn_print('video:ffmpeg:input:empty'), 'error');
		redirect(REF);
}
$vars = array(
		'ffmpeg_path'        => $path,
		'ffmpeg_compression' => $compression,
		'ffmpeg_maxtime'     => $time,
);
if(isset($upgrade)) {
		if($upgrade == 'v5.2') {
				$vars['upgrade'] = $upgrade;
				set_time_limit(0);
				$videos = new OssnObject();
				$all    = $videos->searchObject(array(
						'type'           => 'user',
						'subtype'        => 'video',
						'page_limit'     => false,
						'entities_pairs' => false,
				));
				if($all) {
						foreach($all as $video) {
								if(!isset($video->container_type)) {
										$video->data->container_type = 'user';
										$video->data->container_guid = $video->owner_guid;
										$video->save();
								}
						}
				}
		}
}
if($component->setSettings('Videos', $vars)) {
		ossn_trigger_message(ossn_print('video:ffmpeg:path:saved'));
		redirect(REF);
} else {
		ossn_trigger_message(ossn_print('video:ffmpeg:path:save:error'), 'error');
		redirect(REF);
}