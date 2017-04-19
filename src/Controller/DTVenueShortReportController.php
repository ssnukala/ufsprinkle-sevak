<?php
/**
 * Venue Datatable Short Report controller 
 *
 * @link      https://github.com/ssnukala/ufsprinkle-sevak
 * @copyright Copyright (c) 2013-2016 Srinivas Nukala
 */


namespace UserFrosting\Sprinkle\Sevak\Controller;

use Carbon\Carbon;
use UserFrosting\Support\Exception\ForbiddenException;
use UserFrosting\Sprinkle\Core\Util\EnvironmentInfo;
use UserFrosting\Sprinkle\SnDatatables\Controller\SnDatatablesFFController;
use UserFrosting\Sprinkle\SnUtilities\Controller\SnUtilities as SnUtil;

/**
 * iListDTDBController
 *
 * @package UserFrosting-Datatables
 * @author Srinivas Nukala
 * @link http://srinivasnukala.com
 */
class DTVenueShortReportController extends SnDatatablesFFController {

    public function setupDatatable($properties = []) {
        $properties['source'] = 'VenueShort';
        $properties['source_type'] = 'db';
        $properties['sortable'] = true;
        $properties['show_detail'] = 'Y';
        $properties['ajax_detail'] = 'N';
        $properties['dbtable'] = "event_venues";
        $this->_data_route = 'venues';
        $this->_process_route = 'venues';
//SnUtil::logarr($properties,"Line 27 venue Short Report");
        parent::setupDatatable($properties);
        $this->_datatable['options']["ajax_url"] = "/venues/venueshort";
        $this->_datatable['options']["process_url"] = "/venues";
        $this->_datatable['options']['_dt_rowid'] = " concat('cmrep_',id) ";
//SnUtil::logarr($this->_datatable['options'],"Line 32 the html id is ".$this->_htmlid);        
    }

    public function getColumnDefinitions() {
        $cur_ff_table = parent::getColumnDefinitions();
        return $cur_ff_table;
        // will be used by the child classes to set the formatters for various columns
    }

    public function setFormatters() {
        parent::setFormatters();

//        error_log("Line 90 checking user role");
        $this->_formatters['Venue'] = function( $d, $row ) {
            $var_contactdetails = $this->ci->view->fetch('components/events/venue-contact-info.html.twig', ['row' => $row]);
            return $var_contactdetails;
        };

    }

    public function getDataFromSource($getparam, $par_nondbcols = 'none', $par_where = '', $par_filter = '', $par_order = '') {
        $par_where = $this->_where_criteria;
        $par_order = $this->_order_by;
        error_log("Line 96 the where VenueShort criteria is $par_where, order by is $par_order");
        parent::getDataFromSource($getparam, $par_nondbcols, $par_where, $par_filter, $par_order);

// This will set $this->_data These 3 arrays will be available if we want to change anything before the data gets sent out
//             
//            $this->_data['records'] = $var_retdata['records'];
//            $this->_data['filtered_count'] = $var_retdata['filtered_count'];
//            $this->_data['total_count'] = $var_retdata['total_count'];
    }

}
