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
use UserFrosting\Sprinkle\Sevak\Controller\Datatables\VenuesShortController;
use UserFrosting\Sprinkle\Sevak\Controller\Datatables\VenuesLongController;
use UserFrosting\Sprinkle\Core\Facades\Debug;


class VenueController extends SimpleController {

    /**
     * Renders the admin panel dashboard
     *
     */
    public function pageDashboard($request, $response, $args) {

        $vscontroller = new VenuesShortController($this->ci);
        $vscontroller->setupDatatable();
        $venueshort = $vscontroller->getDatatableArray();
        
        $vlcontroller = new VenuesLongController($this->ci);
        $vlcontroller->setupDatatable();
        $venuelong = $vlcontroller->getDatatableArray();

        return $this->ci->view->render($response, "pages/venue-dashboard.html.twig", [
                    'info' => [
                        'environment' => $this->ci->environment,
                        'path' => [
                            'project' => \UserFrosting\ROOT_DIR
                        ]
                    ],
                    "venueshort" => $venueshort,"venuelong"=>$venuelong,
        ]);
    }
}
