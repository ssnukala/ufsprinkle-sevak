<?php
/**
 * Helper - Sevak
 *
 * @link      https://github.com/ssnukala/ufsprinkle-sevak
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

$app->group('/venues', function () {
    $this->get('','UserFrosting\Sprinkle\Sevak\Controller\VenueController:pageDashboard');
    $this->post('/fulllist','UserFrosting\Sprinkle\Sevak\Controller\Datatables\VenuesShortController:venuesFulllist');
    $this->post('/texas','UserFrosting\Sprinkle\Sevak\Controller\Datatables\VenuesShortController:venuesTexas');
    $this->post('/newyork','UserFrosting\Sprinkle\Sevak\Controller\Datatables\VenuesShortController:venuesNewYork');
    $this->post('/california','UserFrosting\Sprinkle\Sevak\Controller\Datatables\VenuesShortController:venuesCalifornia');
});