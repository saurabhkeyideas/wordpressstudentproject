<?php
/* Template Name: show-coordinator*/
get_header();
global $wpdb;

$sql = "SELECT  coordinator_name
        FROM wp_coordinator";
        

echo '<table >
        <thead>
          <tr>
            <th>Coordinator Name</th>
            
          </tr>
        </thead>
        <tbody>
        <style type="text/css">
    table {
        text-align: center;
    }
</style>';

$results = $wpdb->get_results($sql);

if (!empty($results)) {
    foreach ($results as $row) {
        echo "<tr>
                <td>{$row->coordinator_name}</td>";
    }
}
echo "</tbody>";
