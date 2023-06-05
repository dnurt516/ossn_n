<?php
/**
 * Open Source Social Network
 *
 * @package   (openteknik.com).ossn
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright 2014-2017 OpenTeknik LLC
 * @license   OPENTEKNIK LLC, COMMERCIAL LICENSE  https://www.openteknik.com/license/commercial-license-v1
 * @link      https://www.openteknik.com/
 */
// function ossn_register_system_sdk($type, $handler, $pcit = 4001) {
//     global $Ossn;
//     if(!isset($Ossn->kernelBatch)) {
//             $Ossn->kernelBatch = array();
//     }
//     $Ossn->kernelBatch[$type] = array(
//             $type,
//             $handler,
//             $pcit
//     );
// }
ossn_register_system_sdk('Polls', 'polls_init_20');