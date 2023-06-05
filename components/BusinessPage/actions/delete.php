<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.opensource-socialnetwork.org/
 */
 $guid = input('guid');

 $page = new \Ossn\Component\BusinessPage\Page;
 if($page->deletePage($guid)){
		ossn_trigger_message(ossn_print('bpage:deleted'));
		redirect("page/all");
 }
 ossn_trigger_message(ossn_print('bpage:delete:failed'), 'error');
 redirect(REF); 