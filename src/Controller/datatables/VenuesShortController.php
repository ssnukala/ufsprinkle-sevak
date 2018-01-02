<?php
namespace UserFrosting\Sprinkle\Sevak\Controller\Datatables;

use Carbon\Carbon;
use UserFrosting\Support\Exception\ForbiddenException;
use UserFrosting\Sprinkle\Core\Util\EnvironmentInfo;
use UserFrosting\Sprinkle\Datatables\Controller\DatatablesController;
use UserFrosting\Sprinkle\Core\Facades\Debug;

/**
 * Venue Short Report
 *
 * @package UserFrosting-Sevak
 * @author Srinivas Nukala
 * @link http://srinivasnukala.com
 */

class VenuesShortController extends DatatablesController {

    protected $sprunje_name='venues_sprunje';
    
    public function setupDatatable($properties = []) {
        $dsdrepprop = ['htmlid' => 'venueshort_dt_5',
            'schema' => 'schema://datatable/venues-short.yaml',
            "ajax_url" => "/venues/fulllist"];

        $dsdrepprop['filters'] = [
            '/venues/fulllist' => 'Full List',
            '/venues/newyork' => "New York Venues",
            '/venues/texas' => "Texas Venues",
            '/venues/california' => "California Venues"
            ];
        $dsdrepprop['formatters'] = [
            "tables/formatters/venue-contact-info.html.twig"
        ];
        $newproperties = array_merge($dsdrepprop,$properties);

        parent::setupDatatable($newproperties);
    }
    
    public function venuesFulllist($request, $response, $args) {
//Debug::debug("Line 48 ", $args);
        $this->setSprunje($request, $response, $args);
        return $this->sprunje->toResponse($response);
    }

    public function venuesTexas($request, $response, $args) {
        $this->setSprunje($request, $response, $args);
        $this->sprunje->extendQuery(function ($query) {
            return $query->inTexas();
        });
        return $this->sprunje->toResponse($response);
    }
    
    public function venuesCalifornia($request, $response, $args) {
        $this->setSprunje($request, $response, $args);
        $this->sprunje->extendQuery(function ($query) {
            return $query->inCalifornia();
        });
        return $this->sprunje->toResponse($response);
    }
    
    public function venuesNewYork($request, $response, $args) {
        $this->setSprunje($request, $response, $args);
        $this->sprunje->extendQuery(function ($query) {
            return $query->inNewYork();
        });
        return $this->sprunje->toResponse($response);
    }
    
}
