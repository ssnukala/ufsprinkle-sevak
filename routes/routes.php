<?php
/**
 * Helper - Sevak
 *
 * @link      https://github.com/ssnukala/ufsprinkle-sevak
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */

$app->group('/venues', function () {
    $this->get('/dashboard','UserFrosting\Sprinkle\Sevak\Controller\VenueController:pageDashboard');
    $this->post('/venuelong','UserFrosting\Sprinkle\Sevak\Controller\VenueController:venueLongData');
    $this->post('/venueshort','UserFrosting\Sprinkle\Sevak\Controller\VenueController:venueShortData');
});