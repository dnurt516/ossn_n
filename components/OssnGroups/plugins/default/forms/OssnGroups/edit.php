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
$group = $params['group'];
?>

<textarea name="groupname" ><?php echo $group->title; ?></textarea>
<div class="helper"><?php echo ossn_print('group:name'); ?></div>
<br><br>
<textarea name="groupdesc"><?php echo $group->description; ?></textarea>
<div class="helper"><?php echo ossn_print('group:desc'); ?></div>
<br/>

<br><br>
<select name="membership">
    <?php
    if ($group->membership == OSSN_PUBLIC) {
        $open = 'selected';
        $close = '';
    } elseif ($group->membership == OSSN_PRIVATE) {
        $close = 'selected';
        $open = '';
    }
    ?>
    <option value='2' <?php echo $open; ?>> <?php echo ossn_print('public'); ?> </option>
    <option value='1' <?php echo $close; ?>> <?php echo ossn_print('close'); ?> </option>
</select>
<div class="helper"><?php echo ossn_print('privacy'); ?></div>
<br>
<div class="row align-items-center justify-content-between">
    <div class="col-auto order-3">
        <input type="hidden" name="group" value="<?php echo $group->guid; ?>"/>
        <input type="submit" value="<?php echo ossn_print(''); ?>" class="btn save"/>
    </div>
    <div class="col-auto order-1">
        <a class="btn delete-cover" href="<?php echo ossn_site_url("action/group/cover/delete?guid={$group->guid}", true);?>"><i class="fa fa-trash"></i>&nbsp;<?php echo ossn_print('group:delete:cover');?></a>
    </div>
    <div class="col-auto order-2">
        <?php
            echo ossn_plugin_view('output/url', array(
                    'text' => ossn_print('delete'),
                    'href' => ossn_site_url("action/group/delete?guid=$group->guid"),
                    'class' => 'btn delete delete-group ossn-make-sure',
                    'action' => true,
            ));
         ?>
    </div>
</div>