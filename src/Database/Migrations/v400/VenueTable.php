<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/ssnukala/ufsprinkle-sevak
 * @copyright Copyright (c) 2013-2018 Sriniva Nukala
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Sevak\Database\Migrations\v400;

use UserFrosting\System\Bakery\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
use UserFrosting\Sprinkle\Sevak\Database\Models\Venues;

/**
 * Venues table migration
 * For Userfrosting Version 4.0.x
 *
 * See https://laravel.com/docs/5.4/migrations#tables
 * @extends Migration
 * @author Srinivas Nukala (http://srinivasnukala.com)
 */
class VenueTable extends Migration {

    /**
     * {@inheritDoc}
     */
    public function up() {

        if (!$this->schema->hasTable('sevak_venues')) {
            $this->schema->create('sevak_venues', function(Blueprint $table) {
                $table->increments('id');
                $table->string('venue_name', 500)->nullable();
                $table->integer('venue_id')->unsigned()->nullable();
                $table->string('street_address', 255)->nullable();
                $table->string('state', 50)->nullable();
                $table->string('zip', 10)->nullable();
                $table->string('country', 255)->nullable();
                $table->timestamps();
                $table->softDeletes();
                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
            $venues = [
                "20175" => new Venues(["venue_name" => ":08 Seconds", "venue_id" => "20175", "street_address" => "201 West University Avenue", "state" => "Florida", "zip" => "32601", "country" => "United States of America"]),
                "17448" => new Venues(["venue_name" => "1 Oak Nightclub At The Mirage", "venue_id" => "17448", "street_address" => "3400 Las Vegas Boulevard South", "state" => "Nevada", "zip" => "89109", "country" => "United States of America"]),
                "5387" => new Venues(["venue_name" => "10 High Club", "venue_id" => "5387", "street_address" => "816 N Highland Avenue Northeast ", "state" => "Georgia", "zip" => "30306", "country" => "United States of America"]),
                "21676" => new Venues(["venue_name" => "1015 Folsom Nightclub", "venue_id" => "21676", "street_address" => "1015 Folsom Street", "state" => "California", "zip" => "94103", "country" => "United States of America"]),
                "3066" => new Venues(["venue_name" => "1018 Augusta Club", "venue_id" => "3066", "street_address" => "1018 Azalea Drive", "state" => "Georgia", "zip" => "30904", "country" => "United States of America"]),
                "6161" => new Venues(["venue_name" => "103 Ultra Lounge", "venue_id" => "6161", "street_address" => "103 Park St", "state" => "Maine", "zip" => "04473", "country" => "United States of America"]),
                "8233" => new Venues(["venue_name" => "10th And New Hampshire", "venue_id" => "8233", "street_address" => "129 East 10th Street", "state" => "Kansas", "zip" => "66044", "country" => "United States of America"]),
                "24005" => new Venues(["venue_name" => "11th Frame Live ", "venue_id" => "24005", "street_address" => "8661 US-72", "state" => "Alabama", "zip" => "35758", "country" => "United States of America"]),
                "17782" => new Venues(["venue_name" => "120 Tavern and Music Hall", "venue_id" => "17782", "street_address" => "1440 Roswell Road", "state" => "Georgia", "zip" => "30062", "country" => "United States of America"]),
                "17492" => new Venues(["venue_name" => "123 Pleasant Street", "venue_id" => "17492", "street_address" => "123 Pleasant Street", "state" => "West Virginia", "zip" => "26505", "country" => "United States of America"]),
                "17322" => new Venues(["venue_name" => "12Stone Church Lawrenceville", "venue_id" => "17322", "street_address" => "1322 Buford Dr", "state" => "Georgia", "zip" => "30042", "country" => "United States of America"]),
                "12754" => new Venues(["venue_name" => "12th & Porter", "venue_id" => "12754", "street_address" => "114 12th Ave N", "state" => "Tennessee", "zip" => "37203", "country" => "United States of America"]),
                "19851" => new Venues(["venue_name" => "12th Avenue North", "venue_id" => "19851", "street_address" => "12th Avenue North", "state" => "Tennessee", "zip" => "37203", "country" => "United States of America"]),
                "16976" => new Venues(["venue_name" => "12th Street Block Party Pavilion", "venue_id" => "16976", "street_address" => "114 12th Avenue North", "state" => "Tennessee", "zip" => "37203", "country" => "United States of America"]),
                "7846" => new Venues(["venue_name" => "13th And Ocean Drive", "venue_id" => "7846", "street_address" => " 1 Ocean Drive", "state" => "Florida", "zip" => "33139", "country" => "United States of America"]),
                "20100" => new Venues(["venue_name" => "13th Street & N. Street - Lincoln", "venue_id" => "20100", "street_address" => "13th Street & N. Street", "state" => "Nebraska", "zip" => "68508", "country" => "United States of America"]),
                "18737" => new Venues(["venue_name" => "13th Street Repertory Company Theatre", "venue_id" => "18737", "street_address" => "50 West 13th Street", "state" => "New York", "zip" => "10011", "country" => "United States of America"]),
                "6022" => new Venues(["venue_name" => "142 Throckmorton Theatre", "venue_id" => "6022", "street_address" => "142 Throckmorton", "state" => "California", "zip" => "94941", "country" => "United States of America"]),
                "16919" => new Venues(["venue_name" => "149th St & Exterior St", "venue_id" => "16919", "street_address" => "149th St & Exterior St", "state" => "New York", "zip" => "10451", "country" => "United States of America"]),
                "935" => new Venues(["venue_name" => "14th Street Playhouse", "venue_id" => "935", "street_address" => "173 14th Street", "state" => "Georgia", "zip" => "30309", "country" => "United States of America"]),
                "2973" => new Venues(["venue_name" => "14th Street Theatre", "venue_id" => "2973", "street_address" => "2037 East 14th Street", "state" => "Ohio", "zip" => "44115", "country" => "United States of America"]),
                "10602" => new Venues(["venue_name" => "15 East Restaurant", "venue_id" => "10602", "street_address" => "15 E 15th Street", "state" => "New York", "zip" => "10018", "country" => "United States of America"]),
                "13104" => new Venues(["venue_name" => "16th ST and Constitution Ave NW", "venue_id" => "13104", "street_address" => "Cherry Blossom Parade", "state" => "District Of Columbia", "zip" => "20024", "country" => "United States of America"]),
                "18604" => new Venues(["venue_name" => "1772 Social Club", "venue_id" => "18604", "street_address" => "1772 Market Street", "state" => "California", "zip" => "94116", "country" => "United States of America"]),
                "21568" => new Venues(["venue_name" => "17th Street Park", "venue_id" => "21568", "street_address" => "17th Street & Atlantic Avenue", "state" => "Virginia", "zip" => "23451", "country" => "United States of America"]),
                "19770" => new Venues(["venue_name" => "1884 Lounge", "venue_id" => "19770", "street_address" => "1555 Madison Ave", "state" => "Tennessee", "zip" => "38104", "country" => "United States of America"]),
                "14695" => new Venues(["venue_name" => "18th St Pier Bar and Grill", "venue_id" => "14695", "street_address" => "101 18th Street", "state" => "Texas", "zip" => "77538", "country" => "United States of America"]),
                "6012" => new Venues(["venue_name" => "19 Broadway", "venue_id" => "6012", "street_address" => "17 Broadway Blvd", "state" => "California", "zip" => "94930", "country" => "United States of America"]),
                "20183" => new Venues(["venue_name" => "1904 Music Hall", "venue_id" => "20183", "street_address" => "19 Ocean St", "state" => "Florida", "zip" => "32202", "country" => "United States of America"]),
                "20012" => new Venues(["venue_name" => "191 Toole", "venue_id" => "20012", "street_address" => "191 E. Toole Ave ", "state" => "Arizona", "zip" => "85701", "country" => "United States of America"]),
                "11350" => new Venues(["venue_name" => "1982 Bar", "venue_id" => "11350", "street_address" => "919 W. University Avenue ", "state" => "Florida", "zip" => "32601", "country" => "United States of America"]),
                "13067" => new Venues(["venue_name" => "1st Ave Live!", "venue_id" => "13067", "street_address" => "3701 1st Ave Se", "state" => "Iowa", "zip" => "52402", "country" => "United States of America"]),
                "22724" => new Venues(["venue_name" => "1st Ward at Chop Shop", "venue_id" => "22724", "street_address" => "2033 W. North Ave", "state" => "Illinois", "zip" => "60647", "country" => "United States of America"]),
                "4308" => new Venues(["venue_name" => "1stBank Center", "venue_id" => "4308", "street_address" => "11450 Broomfield Lane", "state" => "Colorado", "zip" => "80021", "country" => "United States of America"]),
                "23929" => new Venues(["venue_name" => "20 Monroe Live", "venue_id" => "23929", "street_address" => "11 Ottawa Avenue NW", "state" => "Michigan", "zip" => "49503", "country" => "United States of America"]),
                "3148" => new Venues(["venue_name" => "2006 Mlb All Star Hotel Rooms", "venue_id" => "3148", "street_address" => "1320 Centre Avenue", "state" => "Pennsylvania", "zip" => "15219", "country" => "United States of America"]),
                "837" => new Venues(["venue_name" => "20th Century Theatre", "venue_id" => "837", "street_address" => "3021 Madison Road", "state" => "Ohio", "zip" => "45209", "country" => "United States of America"]),
                "20147" => new Venues(["venue_name" => "210 Kapones", "venue_id" => "20147", "street_address" => "1223 E. Houston St.", "state" => "Texas", "zip" => "78205", "country" => "United States of America"]),
                "19720" => new Venues(["venue_name" => "2300 Arena", "venue_id" => "19720", "street_address" => "2300 South Swanson Street", "state" => "Pennsylvania", "zip" => "19148", "country" => "United States of America"]),
                "23125" => new Venues(["venue_name" => "2300 S. Hamilton Road - Parking Lot", "venue_id" => "23125", "street_address" => "2300 S. Hamilton Rd", "state" => "Ohio", "zip" => "43232", "country" => "United States of America"]),
                "5257" => new Venues(["venue_name" => "2345 E Colorado Blvd", "venue_id" => "5257", "street_address" => "2345 E Colorado Blvd", "state" => "California", "zip" => "91184", "country" => "United States of America"]),
                "15054" => new Venues(["venue_name" => "240 W Colorado Blvd", "venue_id" => "15054", "street_address" => "Tournament Of Roses Parade Route", "state" => "California", "zip" => "91184", "country" => "United States of America"]),
                "13240" => new Venues(["venue_name" => "2640 Space", "venue_id" => "13240", "street_address" => "2640 St Paul St", "state" => "Maryland", "zip" => "21218", "country" => "United States of America"]),
                "23993" => new Venues(["venue_name" => "2720 Cherokee Performing Arts Center", "venue_id" => "23993", "street_address" => "2720 Cherokee Street", "state" => "Missouri", "zip" => "63118", "country" => "United States of America"]),
                "19339" => new Venues(["venue_name" => "299 Meserole", "venue_id" => "19339", "street_address" => "299 Meserole st.", "state" => "New York", "zip" => "11206", "country" => "United States of America"]),
                "14681" => new Venues(["venue_name" => "2nd Story Blues", "venue_id" => "14681", "street_address" => "102 West 4th Street", "state" => "Pennsylvania", "zip" => "18015", "country" => "United States of America"]),
                "19807" => new Venues(["venue_name" => "2nd Street Theater", "venue_id" => "19807", "street_address" => "220 NE Lafayette Ave.", "state" => "Oregon", "zip" => "97701", "country" => "United States of America"]),
                "18048" => new Venues(["venue_name" => "3 Legged Dog Art & Technology Center", "venue_id" => "18048", "street_address" => "80 Greenwich Street", "state" => "New York", "zip" => "10006", "country" => "United States of America"]),
                "3438" => new Venues(["venue_name" => "3 Rivers Music Festival", "venue_id" => "3438", "street_address" => "1511 Taylor Street", "state" => "South Carolina", "zip" => "29201", "country" => "United States of America"]),
                "24082" => new Venues(["venue_name" => "3 Sheeps Brewing Company", "venue_id" => "24082", "street_address" => "1837 North Ave.", "state" => "Wisconsin", "zip" => "53083", "country" => "United States of America"]),
                "4505" => new Venues(["venue_name" => "3 Trails Expo Center", "venue_id" => "4505", "street_address" => "8844 Hillcrest Road", "state" => "Missouri", "zip" => "64138", "country" => "United States of America"]),
                "4544" => new Venues(["venue_name" => "3 Trails Performing Arts Center", "venue_id" => "4544", "street_address" => "5600 E Bannister Rd", "state" => "Missouri", "zip" => "64192", "country" => "United States of America"]),
                "20391" => new Venues(["venue_name" => "301 Live", "venue_id" => "20391", "street_address" => "301 S. Ochoa Street", "state" => "Texas", "zip" => "79903", "country" => "United States of America"]),
                "4973" => new Venues(["venue_name" => "3121 - Rio Hotel", "venue_id" => "4973", "street_address" => "3700 West Flamingo", "state" => "Nevada", "zip" => "89103", "country" => "United States of America"]),
                "22219" => new Venues(["venue_name" => "31st Street Studios", "venue_id" => "22219", "street_address" => "77 31st St", "state" => "Pennsylvania", "zip" => "15201", "country" => "United States of America"]),
                "5065" => new Venues(["venue_name" => "328 Performance Hall", "venue_id" => "5065", "street_address" => "328 4th Ave S", "state" => "Tennessee", "zip" => "37201", "country" => "United States of America"]),
                "15852" => new Venues(["venue_name" => "330 Ritch", "venue_id" => "15852", "street_address" => "330 Ritch Street Suite 200", "state" => "California", "zip" => "94107", "country" => "United States of America"]),
                "23483" => new Venues(["venue_name" => "331 Club", "venue_id" => "23483", "street_address" => "331 13th Avenue NE ", "state" => "Minnesota", "zip" => "55413", "country" => "United States of America"]),
                "18667" => new Venues(["venue_name" => "333 Live", "venue_id" => "18667", "street_address" => "333 S. Boylston St", "state" => "California", "zip" => "90017", "country" => "United States of America"]),
                "8338" => new Venues(["venue_name" => "33rd Street Armory", "venue_id" => "8338", "street_address" => "3205 Lancaster Avenue", "state" => "Pennsylvania", "zip" => "19104", "country" => "United States of America"]),
                "15484" => new Venues(["venue_name" => "360 Entertainment Theater", "venue_id" => "15484", "street_address" => "650 W. Chicago Ave", "state" => "Illinois", "zip" => "60642", "country" => "United States of America"]),
                "16248" => new Venues(["venue_name" => "360 Entertainment Theatre At Boston City Plaza", "venue_id" => "16248", "street_address" => "One City Plaza", "state" => "Massachusetts", "zip" => "02201", "country" => "United States of America"]),
                "15550" => new Venues(["venue_name" => "360 Entertainment Theatre at Pemberton Place", "venue_id" => "15550", "street_address" => "121 Baker St NW", "state" => "Georgia", "zip" => "30313", "country" => "United States of America"]),
                "2333" => new Venues(["venue_name" => "37 Arts Theatre - Theatre A", "venue_id" => "2333", "street_address" => "450 West 37th Street", "state" => "New York", "zip" => "10018", "country" => "United States of America"]),
                "9402" => new Venues(["venue_name" => "37 Arts Theatre - Theatre B", "venue_id" => "9402", "street_address" => "450 West 37th Street", "state" => "New York", "zip" => "10018", "country" => "United States of America"]),
                "18244" => new Venues(["venue_name" => "37 Main -A Rock Cafe", "venue_id" => "18244", "street_address" => "37 Main Street", "state" => "Georgia", "zip" => "30518", "country" => "United States of America"]),
                "22029" => new Venues(["venue_name" => "39N at The Playground", "venue_id" => "22029", "street_address" => "One Atlantic Ocean", "state" => "New Jersey", "zip" => "08401", "country" => "United States of America"]),
                "3761" => new Venues(["venue_name" => "3rd & Lindsley", "venue_id" => "3761", "street_address" => "816 3rd Avenue South", "state" => "Tennessee", "zip" => "37210", "country" => "United States of America"]),
                "19514" => new Venues(["venue_name" => "3rd Floor at The B.O.B.", "venue_id" => "19514", "street_address" => "20 Monroe Avenue NW", "state" => "Michigan", "zip" => "49503", "country" => "United States of America"]),
                "19266" => new Venues(["venue_name" => "3rd St. Stage - Fremont Street Experience", "venue_id" => "19266", "street_address" => "425 Fremont St.", "state" => "Nevada", "zip" => "89101", "country" => "United States of America"]),
                "22602" => new Venues(["venue_name" => "3S Artspace", "venue_id" => "22602", "street_address" => "319 Vaughan St", "state" => "New Hampshire", "zip" => "03801", "country" => "United States of America"]),
                "10029" => new Venues(["venue_name" => "4 Bears Casino And Lodge", "venue_id" => "10029", "street_address" => "202 Frontage Road", "state" => "North Dakota", "zip" => "58763", "country" => "United States of America"]),
                "3886" => new Venues(["venue_name" => "40 Watt Club", "venue_id" => "3886", "street_address" => "285 W. Washington St.", "state" => "Georgia", "zip" => "30601", "country" => "United States of America"]),
                "3622" => new Venues(["venue_name" => "40/40 Club", "venue_id" => "3622", "street_address" => "6 West 25th Street", "state" => "New York", "zip" => "10010", "country" => "United States of America"]),
                "3177" => new Venues(["venue_name" => "400 Bar", "venue_id" => "3177", "street_address" => "400 Cedar Ave S", "state" => "Minnesota", "zip" => "55454", "country" => "United States of America"]),
                "23751" => new Venues(["venue_name" => "40th Street Theatre", "venue_id" => "23751", "street_address" => "4006  1/2  Hamilton St.", "state" => "Nebraska", "zip" => "68131", "country" => "United States of America"]),
                "15684" => new Venues(["venue_name" => "42nd Street Sports Lounge", "venue_id" => "15684", "street_address" => "6041 State Route 30", "state" => "Pennsylvania", "zip" => "15601", "country" => "United States of America"]),
                "5338" => new Venues(["venue_name" => "430 West Colorado", "venue_id" => "5338", "street_address" => "430 W Colorado Blvd", "state" => "California", "zip" => "91184", "country" => "United States of America"]),
                "1521" => new Venues(["venue_name" => "45 Bleecker", "venue_id" => "1521", "street_address" => "45 Bleecker", "state" => "New York", "zip" => "10003", "country" => "United States of America"]),
                "23200" => new Venues(["venue_name" => "45 East", "venue_id" => "23200", "street_address" => "315 SE 3rd Ave", "state" => "Oregon", "zip" => "97214", "country" => "United States of America"]),
                "3380" => new Venues(["venue_name" => "45th Street Theatre", "venue_id" => "3380", "street_address" => "354 West 45th Street  1st Fl.", "state" => "New York", "zip" => "10036", "country" => "United States of America"]),
                "2749" => new Venues(["venue_name" => "47th Street Theatre", "venue_id" => "2749", "street_address" => "304 West 47th Street", "state" => "New York", "zip" => "10036", "country" => "United States of America"]),
                "19728" => new Venues(["venue_name" => "48 Lounge", "venue_id" => "19728", "street_address" => "1221 Avenue of the Americas", "state" => "New York", "zip" => "10020", "country" => "United States of America"]),
                "16791" => new Venues(["venue_name" => "49 Degrees North Mountain Resort", "venue_id" => "16791", "street_address" => "3311 Flowery Trail Road", "state" => "Washington", "zip" => "99109", "country" => "United States of America"]),
                "12486" => new Venues(["venue_name" => "49 Grove", "venue_id" => "12486", "street_address" => "49 Grove St", "state" => "New York", "zip" => "10014", "country" => "United States of America"]),
                "23460" => new Venues(["venue_name" => "49th State Brewery", "venue_id" => "23460", "street_address" => "Mile 248.4 George Parks Highway", "state" => "Alaska", "zip" => "99743", "country" => "United States of America"]),
                "15717" => new Venues(["venue_name" => "4th & Waller", "venue_id" => "15717", "street_address" => "1103 East 4th Street", "state" => "Texas", "zip" => "78702", "country" => "United States of America"]),
                "21783" => new Venues(["venue_name" => "4th Street Live", "venue_id" => "21783", "street_address" => "400 S. 4th Street", "state" => "Kentucky", "zip" => "40202", "country" => "United States of America"]),
                "23865" => new Venues(["venue_name" => "5 Boro Burger", "venue_id" => "23865", "street_address" => "976 6th Avenue", "state" => "New York", "zip" => "10018", "country" => "United States of America"]),
                "18205" => new Venues(["venue_name" => "5 Points Pub", "venue_id" => "18205", "street_address" => "2020 Devine Street", "state" => "South Carolina", "zip" => "29205", "country" => "United States of America"]),
                "1659" => new Venues(["venue_name" => "500 Festival Parade", "venue_id" => "1659", "street_address" => "120 Monument Circle", "state" => "Indiana", "zip" => "46204", "country" => "United States of America"]),
                "16719" => new Venues(["venue_name" => "52nd & Parkside Avenue", "venue_id" => "16719", "street_address" => "4800 Parkside Avenue", "state" => "Pennsylvania", "zip" => "19131", "country" => "United States of America"]),
                "18459" => new Venues(["venue_name" => "54 Below", "venue_id" => "18459", "street_address" => "254 W 54th Street", "state" => "New York", "zip" => "10019", "country" => "United States of America"]),
                "16641" => new Venues(["venue_name" => "560 Music Center", "venue_id" => "16641", "street_address" => "One Brookings Drive", "state" => "Missouri", "zip" => "63130", "country" => "United States of America"]),
                "2696" => new Venues(["venue_name" => "59e59 Theaters - Theater A", "venue_id" => "2696", "street_address" => "59 East 59th St.", "state" => "New York", "zip" => "10022", "country" => "United States of America"]),
                "13435" => new Venues(["venue_name" => "59E59 Theaters - Theater B", "venue_id" => "13435", "street_address" => "59 East 59th Street", "state" => "New York", "zip" => "10022", "country" => "United States of America"]),
                "13436" => new Venues(["venue_name" => "59E59 Theaters - Theater C", "venue_id" => "13436", "street_address" => "59 East 59th Street", "state" => "New York", "zip" => "10022", "country" => "United States of America"]),
                "19423" => new Venues(["venue_name" => "5th Avenue Side Stage at House Of Blues - San Diego", "venue_id" => "19423", "street_address" => "1055 5th Ave", "state" => "California", "zip" => "92101", "country" => "United States of America"]),
                "1031" => new Venues(["venue_name" => "5th Avenue Theatre", "venue_id" => "1031", "street_address" => "1308 5th Ave", "state" => "Washington", "zip" => "98101", "country" => "United States of America"]),
                "23033" => new Venues(["venue_name" => "5th Quarter Lounge", "venue_id" => "23033", "street_address" => "306 Prospect St", "state" => "Indiana", "zip" => "46225", "country" => "United States of America"])
            ];
            foreach ($venues as $id => $venue) {
                $venue->save();
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function down() {
        $this->schema->drop('sevak_venues');
    }

}
