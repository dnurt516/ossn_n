<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OPENTEKNIK  LLC, COMMERCIAL LICENSE
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      http://www.opensource-socialnetwork.org/licence
 */
 if(!isset($params['video']) || (isset($params['video']) && !$params['video'])){
		$params['video'] = new stdClass; 
 }
 if(!isset($params['video']->ffmpeg_compression)){
		$params['video']->ffmpeg_compression = 35; 
 }
 if(!isset($params['video']->ffmpeg_maxtime)){
		$params['video']->ffmpeg_maxtime = 30; 
 }
 $path = ossn_route()->www . 'components/Videos/cron.php';
 $cron = "*/5 * * * * /usr/bin/php {$path} > /dev/null 2>&1";
 if(!isset($params['video']->upgrade) || isset($params['video']->upgrade) && $params['video']->upgrade != 'v5.2'){
	?>
   <p class="alert alert-danger"><?php echo ossn_print('video:com:upgrade:note');?></p>
   <input type="hidden" name="upgrade" value="v5.2" />
<?php	 
 } else {
 ?>
 <div>
 	<label><?php echo ossn_print('video:com:ffmpeg:path');?></label>
    <p><?php echo ossn_print('video:com:ffmpeg:path:note');?></p>
    <input type="text" name="ffmpeg" value="<?php echo $params['video']->ffmpeg_path;?>" />
 </div>
 <div>
 	<label><?php echo ossn_print('video:com:ffmpeg:compression:value');?></label>
    <p><?php echo ossn_print('video:com:ffmpeg:compress:text'); ?></p>
    <input type="number" name="compression" value="<?php echo $params['video']->ffmpeg_compression;?>" />
 </div> 
 <div>
 	<label><?php echo ossn_print('video:com:ffmpeg:time:value');?></label>
    <p><?php echo ossn_print('video:com:ffmpeg:time:text'); ?></p>
    <input type="number" name="time" value="<?php echo $params['video']->ffmpeg_maxtime;?>" />
 </div> 
  <div>
 	<label><?php echo ossn_print('video:com:cronjob');?></label>
    <p><?php echo ossn_print('video:com:cronjob:text'); ?></p>
    <input type="text" value="<?php echo $cron;?>" disabled="disabled" />
 </div> 
 <div>
 	<label><?php echo ossn_print('video:com:ffmpeg:status');?></label>
    <p><?php echo ossn_video_is_ffmpeg_exists();?></p>
 <div>
 <?php } ?>
 <div>
 	<input type="submit" class="btn btn-success btn-sm"/>
 </div>