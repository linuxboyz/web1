<?php
/* * *******************************************************************************
 * This file is part of KReporter. KReporter is an enhancement developed
 * by Christian Knoll. All rights are (c) 2012 by Christian Knoll
 *
 * This Version of the KReporter is licensed software and may only be used in
 * alignment with the License Agreement received with this Software.
 * This Software is copyrighted and may not be further distributed without
 * witten consent of Christian Knoll
 *
 * You can contact us at info@kreporter.org
 * ****************************************************************************** */
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['KReports']['DetailView'] = array(
    'templateMeta' => array('form' => array('buttons' => array(),
            'hidden' => '<input type="hidden" name="to_pdf" id="to_pdf" value=""><input type="hidden" name="dynamicoptions" id="dynamicoptions" value="{$dynamicoptions}"><input type="hidden" name="groupby" id="groupby" value=""><input type="hidden" name="dynamicols" id="dynamicols" value="">',
            'footerTpl' => 'modules/KReports/tpls/DetailViewFooter.tpl'),
        'widths' => array()
    ),
    'panels' => array()
);
