<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2013-2016 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Account\Model\Migrations\v400;

use UserFrosting\System\Bakery\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
use UserFrosting\Sprinkle\Sevak\Model\Venue;

/**
 * Groups table migration
 * "Group" now replaces the notion of "primary group" in earlier versions of UF.  A user can belong to exactly one group.
 * Version 4.0.0
 *
 * See https://laravel.com/docs/5.4/migrations#tables
 * @extends Migration
 * @author Alex Weissman (https://alexanderweissman.com)
 */
class VenueTable extends Migration {

    /**
     * {@inheritDoc}
     */
    public function up() {

        if (!$this->schema->hasTable('event_venue')) {
            $this->schema->create('event_venue', function(Blueprint $table) {
                $table->increments('id');
                $table->string('Venue', 255)->nullable();
                $table->integer('VenueID')->unsigned()->nullable();
                $table->string('StreetAddress', 255)->nullable();
                $table->string('State', 255)->nullable();
                $table->string('Zip', 255)->nullable();
                $table->string('Country', 255)->nullable();
                $table->string('updated_by', 20)->nullable();
                $table->timestamp('updated_at');
                $table->string('created_by', 20)->nullable();
                $table->timestamp('created_at');
                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
            $venues = [
                "20175" => new Venue(["Venue" => ":08 Seconds", "VenueID" => "20175", "StreetAddress" => "201 West University Avenue", "State" => "Florida", "Zip" => "32601", "Country" => "United States of America"]),
                "17448" => new Venue(["Venue" => "1 Oak Nightclub At The Mirage", "VenueID" => "17448", "StreetAddress" => "3400 Las Vegas Boulevard South", "State" => "Nevada", "Zip" => "89109", "Country" => "United States of America"]),
                "5387" => new Venue(["Venue" => "10 High Club", "VenueID" => "5387", "StreetAddress" => "816 N Highland Avenue Northeast ", "State" => "Georgia", "Zip" => "30306", "Country" => "United States of America"]),
                "21676" => new Venue(["Venue" => "1015 Folsom Nightclub", "VenueID" => "21676", "StreetAddress" => "1015 Folsom Street", "State" => "California", "Zip" => "94103", "Country" => "United States of America"]),
                "3066" => new Venue(["Venue" => "1018 Augusta Club", "VenueID" => "3066", "StreetAddress" => "1018 Azalea Drive", "State" => "Georgia", "Zip" => "30904", "Country" => "United States of America"]),
                "6161" => new Venue(["Venue" => "103 Ultra Lounge", "VenueID" => "6161", "StreetAddress" => "103 Park St", "State" => "Maine", "Zip" => "04473", "Country" => "United States of America"]),
                "8233" => new Venue(["Venue" => "10th And New Hampshire", "VenueID" => "8233", "StreetAddress" => "129 East 10th Street", "State" => "Kansas", "Zip" => "66044", "Country" => "United States of America"]),
                "24005" => new Venue(["Venue" => "11th Frame Live ", "VenueID" => "24005", "StreetAddress" => "8661 US-72", "State" => "Alabama", "Zip" => "35758", "Country" => "United States of America"]),
                "17782" => new Venue(["Venue" => "120 Tavern and Music Hall", "VenueID" => "17782", "StreetAddress" => "1440 Roswell Road", "State" => "Georgia", "Zip" => "30062", "Country" => "United States of America"]),
                "17492" => new Venue(["Venue" => "123 Pleasant Street", "VenueID" => "17492", "StreetAddress" => "123 Pleasant Street", "State" => "West Virginia", "Zip" => "26505", "Country" => "United States of America"]),
                "17322" => new Venue(["Venue" => "12Stone Church Lawrenceville", "VenueID" => "17322", "StreetAddress" => "1322 Buford Dr", "State" => "Georgia", "Zip" => "30042", "Country" => "United States of America"]),
                "12754" => new Venue(["Venue" => "12th & Porter", "VenueID" => "12754", "StreetAddress" => "114 12th Ave N", "State" => "Tennessee", "Zip" => "37203", "Country" => "United States of America"]),
                "19851" => new Venue(["Venue" => "12th Avenue North", "VenueID" => "19851", "StreetAddress" => "12th Avenue North", "State" => "Tennessee", "Zip" => "37203", "Country" => "United States of America"]),
                "16976" => new Venue(["Venue" => "12th Street Block Party Pavilion", "VenueID" => "16976", "StreetAddress" => "114 12th Avenue North", "State" => "Tennessee", "Zip" => "37203", "Country" => "United States of America"]),
                "7846" => new Venue(["Venue" => "13th And Ocean Drive", "VenueID" => "7846", "StreetAddress" => " 1 Ocean Drive", "State" => "Florida", "Zip" => "33139", "Country" => "United States of America"]),
                "20100" => new Venue(["Venue" => "13th Street & N. Street - Lincoln", "VenueID" => "20100", "StreetAddress" => "13th Street & N. Street", "State" => "Nebraska", "Zip" => "68508", "Country" => "United States of America"]),
                "18737" => new Venue(["Venue" => "13th Street Repertory Company Theatre", "VenueID" => "18737", "StreetAddress" => "50 West 13th Street", "State" => "New York", "Zip" => "10011", "Country" => "United States of America"]),
                "6022" => new Venue(["Venue" => "142 Throckmorton Theatre", "VenueID" => "6022", "StreetAddress" => "142 Throckmorton", "State" => "California", "Zip" => "94941", "Country" => "United States of America"]),
                "16919" => new Venue(["Venue" => "149th St & Exterior St", "VenueID" => "16919", "StreetAddress" => "149th St & Exterior St", "State" => "New York", "Zip" => "10451", "Country" => "United States of America"]),
                "935" => new Venue(["Venue" => "14th Street Playhouse", "VenueID" => "935", "StreetAddress" => "173 14th Street", "State" => "Georgia", "Zip" => "30309", "Country" => "United States of America"]),
                "2973" => new Venue(["Venue" => "14th Street Theatre", "VenueID" => "2973", "StreetAddress" => "2037 East 14th Street", "State" => "Ohio", "Zip" => "44115", "Country" => "United States of America"]),
                "10602" => new Venue(["Venue" => "15 East Restaurant", "VenueID" => "10602", "StreetAddress" => "15 E 15th Street", "State" => "New York", "Zip" => "10018", "Country" => "United States of America"]),
                "13104" => new Venue(["Venue" => "16th ST and Constitution Ave NW", "VenueID" => "13104", "StreetAddress" => "Cherry Blossom Parade", "State" => "District Of Columbia", "Zip" => "20024", "Country" => "United States of America"]),
                "18604" => new Venue(["Venue" => "1772 Social Club", "VenueID" => "18604", "StreetAddress" => "1772 Market Street", "State" => "California", "Zip" => "94116", "Country" => "United States of America"]),
                "21568" => new Venue(["Venue" => "17th Street Park", "VenueID" => "21568", "StreetAddress" => "17th Street & Atlantic Avenue", "State" => "Virginia", "Zip" => "23451", "Country" => "United States of America"]),
                "19770" => new Venue(["Venue" => "1884 Lounge", "VenueID" => "19770", "StreetAddress" => "1555 Madison Ave", "State" => "Tennessee", "Zip" => "38104", "Country" => "United States of America"]),
                "14695" => new Venue(["Venue" => "18th St Pier Bar and Grill", "VenueID" => "14695", "StreetAddress" => "101 18th Street", "State" => "Texas", "Zip" => "77538", "Country" => "United States of America"]),
                "6012" => new Venue(["Venue" => "19 Broadway", "VenueID" => "6012", "StreetAddress" => "17 Broadway Blvd", "State" => "California", "Zip" => "94930", "Country" => "United States of America"]),
                "20183" => new Venue(["Venue" => "1904 Music Hall", "VenueID" => "20183", "StreetAddress" => "19 Ocean St", "State" => "Florida", "Zip" => "32202", "Country" => "United States of America"]),
                "20012" => new Venue(["Venue" => "191 Toole", "VenueID" => "20012", "StreetAddress" => "191 E. Toole Ave ", "State" => "Arizona", "Zip" => "85701", "Country" => "United States of America"]),
                "11350" => new Venue(["Venue" => "1982 Bar", "VenueID" => "11350", "StreetAddress" => "919 W. University Avenue ", "State" => "Florida", "Zip" => "32601", "Country" => "United States of America"]),
                "13067" => new Venue(["Venue" => "1st Ave Live!", "VenueID" => "13067", "StreetAddress" => "3701 1st Ave Se", "State" => "Iowa", "Zip" => "52402", "Country" => "United States of America"]),
                "22724" => new Venue(["Venue" => "1st Ward at Chop Shop", "VenueID" => "22724", "StreetAddress" => "2033 W. North Ave", "State" => "Illinois", "Zip" => "60647", "Country" => "United States of America"]),
                "4308" => new Venue(["Venue" => "1stBank Center", "VenueID" => "4308", "StreetAddress" => "11450 Broomfield Lane", "State" => "Colorado", "Zip" => "80021", "Country" => "United States of America"]),
                "23929" => new Venue(["Venue" => "20 Monroe Live", "VenueID" => "23929", "StreetAddress" => "11 Ottawa Avenue NW", "State" => "Michigan", "Zip" => "49503", "Country" => "United States of America"]),
                "3148" => new Venue(["Venue" => "2006 Mlb All Star Hotel Rooms", "VenueID" => "3148", "StreetAddress" => "1320 Centre Avenue", "State" => "Pennsylvania", "Zip" => "15219", "Country" => "United States of America"]),
                "837" => new Venue(["Venue" => "20th Century Theatre", "VenueID" => "837", "StreetAddress" => "3021 Madison Road", "State" => "Ohio", "Zip" => "45209", "Country" => "United States of America"]),
                "20147" => new Venue(["Venue" => "210 Kapones", "VenueID" => "20147", "StreetAddress" => "1223 E. Houston St.", "State" => "Texas", "Zip" => "78205", "Country" => "United States of America"]),
                "19720" => new Venue(["Venue" => "2300 Arena", "VenueID" => "19720", "StreetAddress" => "2300 South Swanson Street", "State" => "Pennsylvania", "Zip" => "19148", "Country" => "United States of America"]),
                "23125" => new Venue(["Venue" => "2300 S. Hamilton Road - Parking Lot", "VenueID" => "23125", "StreetAddress" => "2300 S. Hamilton Rd", "State" => "Ohio", "Zip" => "43232", "Country" => "United States of America"]),
                "5257" => new Venue(["Venue" => "2345 E Colorado Blvd", "VenueID" => "5257", "StreetAddress" => "2345 E Colorado Blvd", "State" => "California", "Zip" => "91184", "Country" => "United States of America"]),
                "15054" => new Venue(["Venue" => "240 W Colorado Blvd", "VenueID" => "15054", "StreetAddress" => "Tournament Of Roses Parade Route", "State" => "California", "Zip" => "91184", "Country" => "United States of America"]),
                "13240" => new Venue(["Venue" => "2640 Space", "VenueID" => "13240", "StreetAddress" => "2640 St Paul St", "State" => "Maryland", "Zip" => "21218", "Country" => "United States of America"]),
                "23993" => new Venue(["Venue" => "2720 Cherokee Performing Arts Center", "VenueID" => "23993", "StreetAddress" => "2720 Cherokee Street", "State" => "Missouri", "Zip" => "63118", "Country" => "United States of America"]),
                "19339" => new Venue(["Venue" => "299 Meserole", "VenueID" => "19339", "StreetAddress" => "299 Meserole st.", "State" => "New York", "Zip" => "11206", "Country" => "United States of America"]),
                "14681" => new Venue(["Venue" => "2nd Story Blues", "VenueID" => "14681", "StreetAddress" => "102 West 4th Street", "State" => "Pennsylvania", "Zip" => "18015", "Country" => "United States of America"]),
                "19807" => new Venue(["Venue" => "2nd Street Theater", "VenueID" => "19807", "StreetAddress" => "220 NE Lafayette Ave.", "State" => "Oregon", "Zip" => "97701", "Country" => "United States of America"]),
                "18048" => new Venue(["Venue" => "3 Legged Dog Art & Technology Center", "VenueID" => "18048", "StreetAddress" => "80 Greenwich Street", "State" => "New York", "Zip" => "10006", "Country" => "United States of America"]),
                "3438" => new Venue(["Venue" => "3 Rivers Music Festival", "VenueID" => "3438", "StreetAddress" => "1511 Taylor Street", "State" => "South Carolina", "Zip" => "29201", "Country" => "United States of America"]),
                "24082" => new Venue(["Venue" => "3 Sheeps Brewing Company", "VenueID" => "24082", "StreetAddress" => "1837 North Ave.", "State" => "Wisconsin", "Zip" => "53083", "Country" => "United States of America"]),
                "4505" => new Venue(["Venue" => "3 Trails Expo Center", "VenueID" => "4505", "StreetAddress" => "8844 Hillcrest Road", "State" => "Missouri", "Zip" => "64138", "Country" => "United States of America"]),
                "4544" => new Venue(["Venue" => "3 Trails Performing Arts Center", "VenueID" => "4544", "StreetAddress" => "5600 E Bannister Rd", "State" => "Missouri", "Zip" => "64192", "Country" => "United States of America"]),
                "20391" => new Venue(["Venue" => "301 Live", "VenueID" => "20391", "StreetAddress" => "301 S. Ochoa Street", "State" => "Texas", "Zip" => "79903", "Country" => "United States of America"]),
                "4973" => new Venue(["Venue" => "3121 - Rio Hotel", "VenueID" => "4973", "StreetAddress" => "3700 West Flamingo", "State" => "Nevada", "Zip" => "89103", "Country" => "United States of America"]),
                "22219" => new Venue(["Venue" => "31st Street Studios", "VenueID" => "22219", "StreetAddress" => "77 31st St", "State" => "Pennsylvania", "Zip" => "15201", "Country" => "United States of America"]),
                "5065" => new Venue(["Venue" => "328 Performance Hall", "VenueID" => "5065", "StreetAddress" => "328 4th Ave S", "State" => "Tennessee", "Zip" => "37201", "Country" => "United States of America"]),
                "15852" => new Venue(["Venue" => "330 Ritch", "VenueID" => "15852", "StreetAddress" => "330 Ritch Street Suite 200", "State" => "California", "Zip" => "94107", "Country" => "United States of America"]),
                "23483" => new Venue(["Venue" => "331 Club", "VenueID" => "23483", "StreetAddress" => "331 13th Avenue NE ", "State" => "Minnesota", "Zip" => "55413", "Country" => "United States of America"]),
                "18667" => new Venue(["Venue" => "333 Live", "VenueID" => "18667", "StreetAddress" => "333 S. Boylston St", "State" => "California", "Zip" => "90017", "Country" => "United States of America"]),
                "8338" => new Venue(["Venue" => "33rd Street Armory", "VenueID" => "8338", "StreetAddress" => "3205 Lancaster Avenue", "State" => "Pennsylvania", "Zip" => "19104", "Country" => "United States of America"]),
                "15484" => new Venue(["Venue" => "360 Entertainment Theater", "VenueID" => "15484", "StreetAddress" => "650 W. Chicago Ave", "State" => "Illinois", "Zip" => "60642", "Country" => "United States of America"]),
                "16248" => new Venue(["Venue" => "360 Entertainment Theatre At Boston City Plaza", "VenueID" => "16248", "StreetAddress" => "One City Plaza", "State" => "Massachusetts", "Zip" => "02201", "Country" => "United States of America"]),
                "15550" => new Venue(["Venue" => "360 Entertainment Theatre at Pemberton Place", "VenueID" => "15550", "StreetAddress" => "121 Baker St NW", "State" => "Georgia", "Zip" => "30313", "Country" => "United States of America"]),
                "2333" => new Venue(["Venue" => "37 Arts Theatre - Theatre A", "VenueID" => "2333", "StreetAddress" => "450 West 37th Street", "State" => "New York", "Zip" => "10018", "Country" => "United States of America"]),
                "9402" => new Venue(["Venue" => "37 Arts Theatre - Theatre B", "VenueID" => "9402", "StreetAddress" => "450 West 37th Street", "State" => "New York", "Zip" => "10018", "Country" => "United States of America"]),
                "18244" => new Venue(["Venue" => "37 Main -A Rock Cafe", "VenueID" => "18244", "StreetAddress" => "37 Main Street", "State" => "Georgia", "Zip" => "30518", "Country" => "United States of America"]),
                "22029" => new Venue(["Venue" => "39N at The Playground", "VenueID" => "22029", "StreetAddress" => "One Atlantic Ocean", "State" => "New Jersey", "Zip" => "08401", "Country" => "United States of America"]),
                "3761" => new Venue(["Venue" => "3rd & Lindsley", "VenueID" => "3761", "StreetAddress" => "816 3rd Avenue South", "State" => "Tennessee", "Zip" => "37210", "Country" => "United States of America"]),
                "19514" => new Venue(["Venue" => "3rd Floor at The B.O.B.", "VenueID" => "19514", "StreetAddress" => "20 Monroe Avenue NW", "State" => "Michigan", "Zip" => "49503", "Country" => "United States of America"]),
                "19266" => new Venue(["Venue" => "3rd St. Stage - Fremont Street Experience", "VenueID" => "19266", "StreetAddress" => "425 Fremont St.", "State" => "Nevada", "Zip" => "89101", "Country" => "United States of America"]),
                "22602" => new Venue(["Venue" => "3S Artspace", "VenueID" => "22602", "StreetAddress" => "319 Vaughan St", "State" => "New Hampshire", "Zip" => "03801", "Country" => "United States of America"]),
                "10029" => new Venue(["Venue" => "4 Bears Casino And Lodge", "VenueID" => "10029", "StreetAddress" => "202 Frontage Road", "State" => "North Dakota", "Zip" => "58763", "Country" => "United States of America"]),
                "3886" => new Venue(["Venue" => "40 Watt Club", "VenueID" => "3886", "StreetAddress" => "285 W. Washington St.", "State" => "Georgia", "Zip" => "30601", "Country" => "United States of America"]),
                "3622" => new Venue(["Venue" => "40/40 Club", "VenueID" => "3622", "StreetAddress" => "6 West 25th Street", "State" => "New York", "Zip" => "10010", "Country" => "United States of America"]),
                "3177" => new Venue(["Venue" => "400 Bar", "VenueID" => "3177", "StreetAddress" => "400 Cedar Ave S", "State" => "Minnesota", "Zip" => "55454", "Country" => "United States of America"]),
                "23751" => new Venue(["Venue" => "40th Street Theatre", "VenueID" => "23751", "StreetAddress" => "4006  1/2  Hamilton St.", "State" => "Nebraska", "Zip" => "68131", "Country" => "United States of America"]),
                "15684" => new Venue(["Venue" => "42nd Street Sports Lounge", "VenueID" => "15684", "StreetAddress" => "6041 State Route 30", "State" => "Pennsylvania", "Zip" => "15601", "Country" => "United States of America"]),
                "5338" => new Venue(["Venue" => "430 West Colorado", "VenueID" => "5338", "StreetAddress" => "430 W Colorado Blvd", "State" => "California", "Zip" => "91184", "Country" => "United States of America"]),
                "1521" => new Venue(["Venue" => "45 Bleecker", "VenueID" => "1521", "StreetAddress" => "45 Bleecker", "State" => "New York", "Zip" => "10003", "Country" => "United States of America"]),
                "23200" => new Venue(["Venue" => "45 East", "VenueID" => "23200", "StreetAddress" => "315 SE 3rd Ave", "State" => "Oregon", "Zip" => "97214", "Country" => "United States of America"]),
                "3380" => new Venue(["Venue" => "45th Street Theatre", "VenueID" => "3380", "StreetAddress" => "354 West 45th Street  1st Fl.", "State" => "New York", "Zip" => "10036", "Country" => "United States of America"]),
                "2749" => new Venue(["Venue" => "47th Street Theatre", "VenueID" => "2749", "StreetAddress" => "304 West 47th Street", "State" => "New York", "Zip" => "10036", "Country" => "United States of America"]),
                "19728" => new Venue(["Venue" => "48 Lounge", "VenueID" => "19728", "StreetAddress" => "1221 Avenue of the Americas", "State" => "New York", "Zip" => "10020", "Country" => "United States of America"]),
                "16791" => new Venue(["Venue" => "49 Degrees North Mountain Resort", "VenueID" => "16791", "StreetAddress" => "3311 Flowery Trail Road", "State" => "Washington", "Zip" => "99109", "Country" => "United States of America"]),
                "12486" => new Venue(["Venue" => "49 Grove", "VenueID" => "12486", "StreetAddress" => "49 Grove St", "State" => "New York", "Zip" => "10014", "Country" => "United States of America"]),
                "23460" => new Venue(["Venue" => "49th State Brewery", "VenueID" => "23460", "StreetAddress" => "Mile 248.4 George Parks Highway", "State" => "Alaska", "Zip" => "99743", "Country" => "United States of America"]),
                "15717" => new Venue(["Venue" => "4th & Waller", "VenueID" => "15717", "StreetAddress" => "1103 East 4th Street", "State" => "Texas", "Zip" => "78702", "Country" => "United States of America"]),
                "21783" => new Venue(["Venue" => "4th Street Live", "VenueID" => "21783", "StreetAddress" => "400 S. 4th Street", "State" => "Kentucky", "Zip" => "40202", "Country" => "United States of America"]),
                "23865" => new Venue(["Venue" => "5 Boro Burger", "VenueID" => "23865", "StreetAddress" => "976 6th Avenue", "State" => "New York", "Zip" => "10018", "Country" => "United States of America"]),
                "18205" => new Venue(["Venue" => "5 Points Pub", "VenueID" => "18205", "StreetAddress" => "2020 Devine Street", "State" => "South Carolina", "Zip" => "29205", "Country" => "United States of America"]),
                "1659" => new Venue(["Venue" => "500 Festival Parade", "VenueID" => "1659", "StreetAddress" => "120 Monument Circle", "State" => "Indiana", "Zip" => "46204", "Country" => "United States of America"]),
                "16719" => new Venue(["Venue" => "52nd & Parkside Avenue", "VenueID" => "16719", "StreetAddress" => "4800 Parkside Avenue", "State" => "Pennsylvania", "Zip" => "19131", "Country" => "United States of America"]),
                "18459" => new Venue(["Venue" => "54 Below", "VenueID" => "18459", "StreetAddress" => "254 W 54th Street", "State" => "New York", "Zip" => "10019", "Country" => "United States of America"]),
                "16641" => new Venue(["Venue" => "560 Music Center", "VenueID" => "16641", "StreetAddress" => "One Brookings Drive", "State" => "Missouri", "Zip" => "63130", "Country" => "United States of America"]),
                "2696" => new Venue(["Venue" => "59e59 Theaters - Theater A", "VenueID" => "2696", "StreetAddress" => "59 East 59th St.", "State" => "New York", "Zip" => "10022", "Country" => "United States of America"]),
                "13435" => new Venue(["Venue" => "59E59 Theaters - Theater B", "VenueID" => "13435", "StreetAddress" => "59 East 59th Street", "State" => "New York", "Zip" => "10022", "Country" => "United States of America"]),
                "13436" => new Venue(["Venue" => "59E59 Theaters - Theater C", "VenueID" => "13436", "StreetAddress" => "59 East 59th Street", "State" => "New York", "Zip" => "10022", "Country" => "United States of America"]),
                "19423" => new Venue(["Venue" => "5th Avenue Side Stage at House Of Blues - San Diego", "VenueID" => "19423", "StreetAddress" => "1055 5th Ave", "State" => "California", "Zip" => "92101", "Country" => "United States of America"]),
                "1031" => new Venue(["Venue" => "5th Avenue Theatre", "VenueID" => "1031", "StreetAddress" => "1308 5th Ave", "State" => "Washington", "Zip" => "98101", "Country" => "United States of America"]),
                "23033" => new Venue(["Venue" => "5th Quarter Lounge", "VenueID" => "23033", "StreetAddress" => "306 Prospect St", "State" => "Indiana", "Zip" => "46225", "Country" => "United States of America"])
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
        $this->schema->drop('event_venue');
    }

}
