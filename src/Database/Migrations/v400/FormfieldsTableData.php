<?php

/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2013-2016 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/licenses/UserFrosting.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Sevak\Database\Migrations\v400;

use UserFrosting\System\Bakery\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
use UserFrosting\Sprinkle\AutoForms\Database\Models\Formfields;

/**
 * Formfields table migration
 * Version 4.0.0
 *
 * See https://laravel.com/docs/5.4/migrations#tables
 * @extends Migration
 * @author Alex Weissman (https://alexanderweissman.com)
 */
class FormfieldsTableData extends Migration {

    /**
     * {@inheritDoc}
     */
    public function up() {
        if (!$this->schema->hasTable('sevak_formfields')) {
            $this->schema->create('sevak_formfields', function(Blueprint $table) {
                $table->increments('id');
                $table->string('form_prefix', 10);
                $table->string('source', 100);
                $table->integer('seq')->default('0');
                $table->string('db_field', 200);
                $table->char('visible', 1)->default('Y');
                $table->char('orderable', 1)->default('N');
                $table->char('searchable', 1)->default('N');
                $table->decimal('column_group', 5, 2)->default('0.00');
                $table->char('showin_table', 1)->default('N');
                $table->decimal('edit_group', 5, 2)->default('0.00');
                $table->char('showin_editform', 1)->default('Y');
                $table->string('label', 200)->nullable();
                $table->string('type', 200);
                $table->integer('size1')->nullable();
                $table->integer('size2')->nullable();
                $table->string('lookup_category', 200)->nullable();
                $table->char('value_type', 1)->nullable();
                $table->char('primary_key', 1)->default('N');
                $table->string('message', 255)->nullable();
                $table->string('validation_json', 1000)->nullable();
                $table->string('default', 255)->nullable();
                $table->char('search_function', 50)->nullable();
                $table->char('status', 1)->default('A');
                $table->string('updated_by', 20)->nullable();
                $table->string('created_by', 20)->nullable();
                $table->timestamps();

                $table->engine = 'InnoDB';
                $table->collation = 'utf8_unicode_ci';
                $table->charset = 'utf8';
            });
        }

        $venue_fields = [
            "250" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "1", "db_field" => "Venue", "value_type" => "", "edit_group" => "1.10", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venue", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y", "search_function" => "LIKE", "status" => "A"]),
            "258" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "2", "db_field" => "id", "value_type" => "", "edit_group" => "1.20", "visible" => "N", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "ID", "message" => "", "validation_json" => "", "size1" => "", "size2" => "", "default" => "", "searchable" => "Y",  "search_function" => "=", "status" => "A"]),
            "251" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "2", "db_field" => "VenueID", "value_type" => "", "edit_group" => "1.20", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venueid", "message" => "", "validation_json" => "", "size1" => "", "size2" => "", "default" => "", "searchable" => "Y",  "search_function" => "=", "status" => "A"]),
            "252" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "3", "db_field" => "StreetAddress", "value_type" => "", "edit_group" => "2.30", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Streetaddress", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y",  "search_function" => "LIKE", "status" => "A"]),
            "253" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "4", "db_field" => "State", "value_type" => "", "edit_group" => "2.40", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "State", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y",  "search_function" => "LIKE", "status" => "A"]),
            "254" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "5", "db_field" => "Zip", "value_type" => "", "edit_group" => "2.50", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Zip", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y", "search_function" => "LIKE", "status" => "A"]),
            "255" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueLong", "seq" => "6", "db_field" => "Country", "value_type" => "", "edit_group" => "3.60", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Country", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y", "search_function" => "LIKE", "status" => "A"]),
            "257" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "1", "db_field" => "id", "value_type" => "", "edit_group" => "1.20", "visible" => "N", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "ID", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y", "search_function" => "LIKE", "status" => "A"]),
            "243" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "1", "db_field" => "Venue", "value_type" => "", "edit_group" => "1.20", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venue", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y","search_function" => "LIKE", "status" => "A"]),
            "244" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "2", "db_field" => "VenueID", "value_type" => "", "edit_group" => "1.10", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Venueid", "message" => "", "validation_json" => "", "size1" => "", "size2" => "", "default" => "", "searchable" => "Y", "search_function" => "=", "status" => "A"]),
            "245" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "3", "db_field" => "StreetAddress", "value_type" => "", "edit_group" => "2.30", "visible" => "N", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Streetaddress", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y",  "search_function" => "LIKE", "status" => "A"]),
            "246" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "4", "db_field" => "State", "value_type" => "", "edit_group" => "2.40", "visible" => "N", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "State", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y", "search_function" => "LIKE", "status" => "A"]),
            "247" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "5", "db_field" => "Zip", "value_type" => "", "edit_group" => "2.50", "visible" => "N", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Zip", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y",  "search_function" => "LIKE", "status" => "A"]),
            "248" => new Formfields(["form_prefix" => "lorp_", "source" => "VenueShort", "seq" => "6", "db_field" => "Country", "value_type" => "", "edit_group" => "3.60", "visible" => "Y", "orderable" => "Y", "type" => "text", "lookup_category" => "", "showin_editform" => "Y", "primary_key" => "", "label" => "Country", "message" => "", "validation_json" => "", "size1" => "255", "size2" => "25", "default" => "", "searchable" => "Y", "search_function" => "LIKE", "status" => "A"])
        ];
        foreach ($venue_fields as $id => $venue_field) {
            $venue_field->save();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function down() {
        $this->schema->drop('sevak_formfields');
}

}
