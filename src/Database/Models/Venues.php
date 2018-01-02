<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2013-2018 Srinivas Nukala
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\Sprinkle\Sevak\Database\Models;

use Illuminate\Database\Capsule\Manager as Capsule;
use UserFrosting\Sprinkle\Core\Database\Models\Model;

/**
 * Venues Class
 *
 * Represents a Event object as stored in the database.
 *
 * @package Sevak
 * @author Srinivas Nukala
 *
 */
class Venues extends Model
{
    /**
     * @var string The name of the table for the current model.
     */
    protected $table = "sevak_venues";

    protected $fillable = [
        "venue_name",
        "venue_id",
        "street_address",
        "state",
        "zip",
        "country"
    ];

    /**
     * @var bool Enable timestamps for this class.
     */
    public $timestamps = true;

    public function scopeInTexas($query) {
//Debug::debug("Line 48 ", $args);
        return $query->where('state', 'Texas');
    }

    public function scopeInCalifornia($query) {
//Debug::debug("Line 48 ", $args);
        return $query->where('state', 'California');
    }

    public function scopeInNewYork($query) {
//Debug::debug("Line 48 ", $args);
        return $query->where('state', 'New York');
    }

}
