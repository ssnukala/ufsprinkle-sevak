<?php
namespace UserFrosting\Sprinkle\Sevak\Controller\Datatables;

use Carbon\Carbon;
use UserFrosting\Support\Exception\ForbiddenException;
use UserFrosting\Sprinkle\Core\Util\EnvironmentInfo;
use UserFrosting\Sprinkle\Datatables\Controller\DatatablesController;
use UserFrosting\Sprinkle\Core\Facades\Debug;

/**
 * Venue Long Report
 *
 * @package UserFrosting-Sevak
 * @author Srinivas Nukala
 * @link http://srinivasnukala.com
 */
class VenuesLongController extends DatatablesController {

    protected $sprunje_name='venues_sprunje';
    
    public function setupDatatable($properties = []) {
        $dsdrepprop = ['htmlid' => 'venuelong_dt_5',
            'schema' => 'schema://datatable/venues-long.yaml',
            "ajax_url" => "/venues/fulllist"];

        $dsdrepprop['filters'] = [
            '/venues/fulllist' => 'Full List',
            '/venues/newyork' => "New York Venues",
            '/venues/texas' => "Texas Venues",
            '/venues/california' => "California Venues"
            ];
        $newproperties = array_merge($dsdrepprop,$properties);

        parent::setupDatatable($newproperties);
    }
    
}
