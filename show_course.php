<?php
/* Template Name: show-course*/
get_header();
global $wpdb;

$sql = "SELECT  course_name
        FROM wp_course";
        

echo "<table >
        <thead>
          <tr>
            <th>Course Name</th>
            
          </tr>
        </thead>
        <tbody>";

$results = $wpdb->get_results($sql);

if (!empty($results)) {
    foreach ($results as $row) {
        echo "<tr>
                <td>{$row->course_name}</td>";
    }
}
echo "</tbody>";
