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
$object = $params['object'];
?>


<span type="text" name="comment" id="comment-box-p<?php echo $object; ?>" class="comment-box"
       placeholder="<?php echo ossn_print(''); ?>" contenteditable="true"></span>
<div class="dva_position">
    <?php echo ossn_fetch_extend_views('comments/attachment/buttons'); ?>
    <span class="comment-box dva"></span>
    <div class="ossn-comment-attach-photo" onclick="Ossn.Clk('#ossn-comment-image-file-p<?php echo $object; ?>');"><i class="fa fa-camera"></i></div>
</div>
<a href="javascript:void(0);" class="btn btn-post btn-sm comment-post-btn d-sm-block d-md-none" data-type='p' data-guid='<?php echo $object; ?>'><?php echo ossn_print('');?></a>      

<input type="hidden" name="post" value="<?php echo $object; ?>"/>
<input type="hidden" name="comment-attachment"/>
 
      
