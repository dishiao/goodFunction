<?php
    
    $toQuotation = function($param) {
        return "'".$param."'";
    };
    $where = array_map($toQuotation,$where);
?>
