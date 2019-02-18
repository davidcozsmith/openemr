<?php
/**
 * soap form
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2019 Brady Miller <brady.g.miller@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */


require_once("../../globals.php");
require_once("$srcdir/api.inc");

if (!verifyCsrfToken($_POST["csrf_token_form"])) {
    csrfNotVerified();
}

require("C_FormSOAP.class.php");
$c = new C_FormSOAP();
echo $c->default_action_process($_POST);
@formJump();
