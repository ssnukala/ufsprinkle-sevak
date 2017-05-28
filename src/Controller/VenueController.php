<?php

/**
 * Venue controller 
 *
 * @link      https://github.com/ssnukala/ufsprinkle-sevak
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

namespace UserFrosting\Sprinkle\Sevak\Controller;

use Carbon\Carbon;
use UserFrosting\Sprinkle\Core\Controller\SimpleController;
use UserFrosting\Support\Exception\ForbiddenException;
use UserFrosting\Sprinkle\Sevak\Controller\DTVenueShortReportController;
use UserFrosting\Sprinkle\Sevak\Controller\DTVenueLongReportController;
use UserFrosting\Sprinkle\SnUtilities\Controller\SnUtilities as SnUtil;
use UserFrosting\Sprinkle\Core\Facades\Debug;


class VenueController extends SimpleController {

    /**
     * Renders the admin panel dashboard
     *
     */
    public function pageDashboard($request, $response, $args) {

        $lproperties = ['htmlid' => 'cmrep_dt_4', 'dtjsvar' => 'cmrepDT3', 'role' => 'admin'];
        $reportcontroller = new DTVenueShortReportController($this->ci);
        $reportcontroller->setupDatatable($lproperties);
//        $thisdtController->setDatatableOption('ajax_url', '/listdata/active');
//        $thisdtController->setWhereCriteria($var_filter);
        $reportcontroller->createDatatableHTMLJS();
        $venueshort = $reportcontroller->getDatatableArray();
        
        $gproperties = ['htmlid' => 'grprep_dt_5', 'dtjsvar' => 'grprepDT3', 'role' => 'admin'];
 
        $groupreportcontroller = new DTVenueLongReportController($this->ci);
        $groupreportcontroller->setupDatatable($gproperties);
        $groupreportcontroller->createDatatableHTMLJS();
        $venuelong = $groupreportcontroller->getDatatableArray();
Debug::debug("Line 43 ", $gproperties);
        
//        SnUtil::logarr($cmreport,"Line 100");
        return $this->ci->view->render($response, "components/events/events-dashboard.html.twig", [
                    'info' => [
                        'environment' => $this->ci->environment,
                        'path' => [
                            'project' => \UserFrosting\ROOT_DIR
                        ]
                    ],
                    "venueshort" => $venueshort,"venuelong"=>$venuelong,
        ]);
    }

    public function venueShortData($request, $response, $args) {
        
        $reportcontroller = new DTVenueShortReportController($this->ci);
        $reportcontroller->setProtected(false);
        $var_dtoptions = $reportcontroller->getDatatablePost($request);
SnUtil::logarr($var_dtoptions, "Line 144 sending the following to populate datatable");
//error_log("Line 144 sending the following to populate datatable");
        $var_dtoptions['htmlid'] = $var_dtoptions['id'];
        $reportcontroller->setupDatatable($var_dtoptions);

//        SnUtil::logarr($var_dtoptions, "Line 133 sending the following to populate datatable");
//        $thisdtController->setWhereCriteria($var_where);
//                    $thisdtController->setDatatableOption('ajax_url', '/listdata/new');
//                    error_log("Line 402 sending the following to populate datatable ({$var_nondbcols}, {$var_where}, {$var_filter})");
        $var_retjson = $reportcontroller->populateDatatable($request, $response, $args);
//        echo $var_retjson;
    }
    public function venueLongData($request, $response, $args) {
        
        $reportcontroller = new DTVenueLongReportController($this->ci);
        $reportcontroller->setProtected(false);
        $var_dtoptions = $reportcontroller->getDatatablePost($request);
        $var_dtoptions['htmlid'] = $var_dtoptions['id'];
        $reportcontroller->setupDatatable($var_dtoptions);

SnUtil::logarr($var_dtoptions, "Line 133 sending the following to populate datatable");
//        $thisdtController->setWhereCriteria($var_where);
//                    $thisdtController->setDatatableOption('ajax_url', '/listdata/new');
//                    error_log("Line 402 sending the following to populate datatable ({$var_nondbcols}, {$var_where}, {$var_filter})");
        $var_retjson = $reportcontroller->populateDatatable($request, $response, $args);
//        echo $var_retjson;
    }

}
