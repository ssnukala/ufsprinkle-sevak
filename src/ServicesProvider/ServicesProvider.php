<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/ssnukala/ufsprinkle-dsd
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\Sprinkle\Sevak\ServicesProvider;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use UserFrosting\Sprinkle\Account\Authenticate\Authenticator;
use UserFrosting\Sprinkle\Account\Authorize\AuthorizationManager;
use UserFrosting\Sprinkle\Core\Facades\Debug;

/**
 * Registers services for the DSD sprinkle.
 *
 * @author Srinivas Nukala (https://srinivasnukala.com)
 */
class ServicesProvider
{
    /**
     * Register UserFrosting's DSD services.
     *
     * @param Container $container A DI container implementing ArrayAccess and container-interop.
     */
    public function register($container)
    {
        /**
         * Extend the 'classMapper' service to register sprunje classes.
         *
         * Mappings added: 'solution_tracking_report'
         */
        $container->extend('classMapper', function ($classMapper, $c) {
            $classMapper->setClassMapping('venues_sprunje', 'UserFrosting\Sprinkle\Sevak\Sprunje\VenuesSprunje');
            $classMapper->setClassMapping('sevak_venues', 'UserFrosting\Sprinkle\Sevak\Database\Models\Venues');
            return $classMapper;
        });

    }
}
