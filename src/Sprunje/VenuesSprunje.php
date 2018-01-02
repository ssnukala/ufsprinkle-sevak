<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Sevak\Sprunje;

use Illuminate\Database\Capsule\Manager as Capsule;
use UserFrosting\Sprinkle\Core\Facades\Debug;
use UserFrosting\Sprinkle\Core\Facades\Translator;
use UserFrosting\Sprinkle\Datatables\Sprunje\DatatablesSprunje;

/**
 * SolutionTrackingReportSprunje
 *
 * Implements Sprunje for the DSD Tracking Report API.
 *
 * @author Srinivas Nukala (https://srinivasnukala.com)
 */
class VenuesSprunje extends DatatablesSprunje {

    protected $name = 'sevak_venues';
    protected $listable = [
    ];
    protected $sortable = [
        "venue_name",
        "venue_id",
        "street_address",
        "state",
        "zip",
        "country"
    ];
    protected $filterable = [
        "venue_name",
        "venue_id",
        "street_address",
        "state",
        "zip",
        "country"
    ];
    protected $excludeForAll = [
    ];

    /**
     * {@inheritDoc}
     */
    protected function baseQuery() {
        $query = $this->classMapper->createInstance('sevak_venues');
        return $query;
        // Join user's most recent activity
//        return $query->joinLastActivity()->with('lastActivity');
    }

}
