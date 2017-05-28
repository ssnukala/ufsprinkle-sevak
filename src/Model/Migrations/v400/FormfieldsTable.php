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
use UserFrosting\Sprinkle\SnDbForms\Model\Formfields;

/**
 * Formfields table migration
 * Version 4.0.0
 *
 * See https://laravel.com/docs/5.4/migrations#tables
 * @extends Migration
 * @author Alex Weissman (https://alexanderweissman.com)
 */
class FormfieldsTable extends Migration {

    /**
     * {@inheritDoc}
     */
    public function up() {
        if (!$this->schema->hasTable('sevak_formfields')) {
            $this->schema->create('sevak_formfields', function(Blueprint $table) {
                $table->increments('id');
                $table->string('form_prefix', 10);
                $table->string('table_name', 100);
                $table->integer('seq')->default('0');
                $table->string('db_name', 200);
                $table->char('value_type', 1)->nullable();
                $table->decimal('edit_group', 5, 2)->default('0.00');
                $table->char('hidden', 1)->default('N');
                $table->char('orderable', 1)->default('N');
                $table->string('type', 200);
                $table->string('lookup_cat', 200)->nullable();
                $table->char('showin_editform', 1)->default('Y');
                $table->char('primary_key', 1)->default('N');
                $table->string('label', 200)->nullable();
                $table->string('message', 255)->nullable();
                $table->string('validation_json', 1000)->nullable();
                $table->integer('size1')->nullable();
                $table->integer('size2')->nullable();
                $table->string('default', 255)->nullable();
                $table->char('empty_check', 1)->default('N');
                $table->char('searchable', 1)->default('N');
                $table->decimal('search_group', 5, 2)->default('0.00');
                $table->char('showin_searchresult', 1)->default('N');
                $table->decimal('result_group', 5, 2)->nullable();
                $table->char('search_function', 50)->nullable();
                $table->char('showin_shortform', 1)->default('N');
                $table->char('status', 1)->default('A');
                $table->string('updated_by', 20)->nullable();
                $table->timestamp('updated_at');
                $table->string('created_by', 20)->nullable();
                $table->timestamp('created_at');

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });

            $venue_fields = [
                "250" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "1", "db_name" => "Venue", "value_type" => "", "edit_group" => "1.10", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venue", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "1.10", "showin_searchresult" => "N", "result_group" => "1.10", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "258" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "2", "db_name" => "id", "value_type" => "", "edit_group" => "1.20", "hidden" => "Y", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "ID", "message" => "", "validation_json" => "", "size1" => "", "size2" => "", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "1.20", "showin_searchresult" => "N", "result_group" => "1.20", "search_function" => "=", "showin_shortform" => "Y", "status" => "A"]),
                "251" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "2", "db_name" => "VenueID", "value_type" => "", "edit_group" => "1.20", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venueid", "message" => "", "validation_json" => "", "size1" => "", "size2" => "", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "1.20", "showin_searchresult" => "N", "result_group" => "1.20", "search_function" => "=", "showin_shortform" => "Y", "status" => "A"]),
                "252" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "3", "db_name" => "StreetAddress", "value_type" => "", "edit_group" => "2.30", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Streetaddress", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "2.30", "showin_searchresult" => "N", "result_group" => "2.30", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "253" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "4", "db_name" => "State", "value_type" => "", "edit_group" => "2.40", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "State", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "2.40", "showin_searchresult" => "N", "result_group" => "2.40", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "254" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "5", "db_name" => "Zip", "value_type" => "", "edit_group" => "2.50", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Zip", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "2.50", "showin_searchresult" => "N", "result_group" => "2.50", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "255" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueLong", "seq" => "6", "db_name" => "Country", "value_type" => "", "edit_group" => "3.60", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Country", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "3.60", "showin_searchresult" => "N", "result_group" => "3.60", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "257" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "1", "db_name" => "id", "value_type" => "", "edit_group" => "1.20", "hidden" => "Y", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "ID", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "1.20", "showin_searchresult" => "N", "result_group" => "1.20", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "243" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "1", "db_name" => "Venue", "value_type" => "", "edit_group" => "1.20", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venue", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "1.20", "showin_searchresult" => "N", "result_group" => "1.20", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "244" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "2", "db_name" => "VenueID", "value_type" => "", "edit_group" => "1.10", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venueid", "message" => "", "validation_json" => "", "size1" => "", "size2" => "", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "1.10", "showin_searchresult" => "N", "result_group" => "1.10", "search_function" => "=", "showin_shortform" => "Y", "status" => "A"]),
                "245" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "3", "db_name" => "StreetAddress", "value_type" => "", "edit_group" => "2.30", "hidden" => "Y", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Streetaddress", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "2.30", "showin_searchresult" => "N", "result_group" => "2.30", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "246" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "4", "db_name" => "State", "value_type" => "", "edit_group" => "2.40", "hidden" => "Y", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "State", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "2.40", "showin_searchresult" => "N", "result_group" => "2.40", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "247" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "5", "db_name" => "Zip", "value_type" => "", "edit_group" => "2.50", "hidden" => "Y", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Zip", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "2.50", "showin_searchresult" => "N", "result_group" => "2.50", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"]),
                "248" => new Formfields(["form_prefix" => "lorp_", "table_name" => "VenueShort", "seq" => "6", "db_name" => "Country", "value_type" => "", "edit_group" => "3.60", "hidden" => "N", "orderable" => "Y", "type" => "text", "lookup_cat" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Country", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "empty_check" => "N", "searchable" => "Y", "search_group" => "3.60", "showin_searchresult" => "N", "result_group" => "3.60", "search_function" => "LIKE", "showin_shortform" => "Y", "status" => "A"])
            ];
            foreach ($venue_fields as $id => $venue_field) {
                $venue_field->save();
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function down() {
        $this->schema->drop('sevak_formfields');
    }

}
