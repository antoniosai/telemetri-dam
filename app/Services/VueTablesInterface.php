<?php
/**
 *  VueTables server-side component interface
 */

namespace App\Services;

interface VueTablesInterface {

    public function get($table, array $fields);

}