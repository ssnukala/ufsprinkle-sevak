<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2013-2016 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */
namespace UserFrosting\Sprinkle\Sevak\Model;

use Illuminate\Database\Capsule\Manager as Capsule;
use UserFrosting\Sprinkle\Core\Model\UFModel;

/**
 * Venues Class
 *
 * Represents a Event object as stored in the database.
 *
 * @package Sevak
 * @author Srinivas Nukala
 *
 */
class Venue extends UFModel
{
    /**
     * @var string The name of the table for the current model.
     */
    protected $table = "event_venue";

    protected $fillable = [
        "Venue",
        "VenueID",
        "StreetAddress",
        "State",
        "Zip",
        "Country"
    ];

    /**
     * @var bool Enable timestamps for this class.
     */
    public $timestamps = true;

    /**
     * Delete this group from the database, along with any user associations
     *
     * @todo What do we do with users when their group is deleted?  Reassign them?  Or, can a user be "groupless"?
     */
    public function delete()
    {
        // Delete the group
        $result = parent::delete();

        return $result;
    }

}
