<?php

/**
 * Venue controller 
 *
 * @link      https://github.com/ssnukala/ufsprinkle-sevak
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

namespace UserFrosting\Sprinkle\Sevak\Controller;

use Carbon\Carbon;
use UserFrosting\Sprinkle\Admin\Controller\AdminController;
use UserFrosting\Support\Exception\ForbiddenException;
use UserFrosting\Sprinkle\Core\Model\Version;
use UserFrosting\Sprinkle\Core\Util\EnvironmentInfo;
use UserFrosting\Sprinkle\Sevak\Controller\DTVenueShortReportController;
use UserFrosting\Sprinkle\Sevak\Controller\DTVenueLongReportController;
use UserFrosting\Sprinkle\SnUtilities\Controller\SnUtilities as SnUtil;


class VenueController extends AdminController {

    /**
     * Renders the admin panel dashboard
     *
     */
    public function pageDashboard($request, $response, $args) {
        /** @var Config $config */
        $config = $this->ci->config;

        /** @var Config $config */
        $cache = $this->ci->cache;

        // Load some system info from cache. If not present in cache, we cache them
        $ufVersion = $cache->rememberForever('uf_version', function () {
            return Version::where('sprinkle', 'core')->first()->version;
        });

        $sprinkles = $cache->rememberForever('uf_sprinklesVersion', function() {
            $sprinkles = array();
            foreach ($this->ci->sprinkleManager->getSprinkles() as $sprinkle) {

                // Get sprinkle db version number
                if ($sprinkleVersion = Version::where('sprinkle', $sprinkle)->first()) {
                    $version = $sprinkleVersion->version;
                } else {
                    $version = null;
                }

                $sprinkles[] = [
                    'name' => $sprinkle,
                    'version' => $version
                ];
            }
            return $sprinkles;
        });


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
        
//        SnUtil::logarr($cmreport,"Line 100");
        return $this->ci->view->render($response, "components/events/events-dashboard.html.twig", [
                    'info' => [
                        'version' => [
                            'UF' => $ufVersion,
                            'php' => phpversion(),
                            'database' => EnvironmentInfo::database()
                        ],
                        'database' => [
                            'name' => $config['db.default.database']
                        ],
                        'environment' => $this->ci->environment,
                        'path' => [
                            'project' => \UserFrosting\ROOT_DIR
                        ]
                    ],
                    "venueshort" => $venueshort,"venuelong"=>$venuelong,
                    'sprinkles' => $sprinkles
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
