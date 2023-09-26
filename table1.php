<?php
/* Template Name: table1*/
get_header();


if (isset($_GET['delete_student'])) {
    $deleted_student_id = intval($_GET['delete_student']);
    // Delete the student record using a function
    delete_student_by_id($deleted_student_id);
    echo "<p>Student with ID $deleted_student_id has been deleted.</p>";
}



global $wpdb;

$sql = "SELECT s.id, s.course_id, s.firstname, s.mobile, c.course_name, co.coordinator_name
        FROM {$wpdb->prefix}student s
        INNER JOIN {$wpdb->prefix}course c ON s.course_id = c.id
        INNER JOIN {$wpdb->prefix}coordinator co ON c.coordinator_id = co.id";

echo "<table >
        <thead>
          <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Course Name</th>
            <th>Coordinator Name</th>
            <th>Action</th>
          </th>
          </tr>
        </thead>
        <tbody>";

$results = $wpdb->get_results($sql);

if (!empty($results)) {
    foreach ($results as $row) {
        echo "<tr>
                <td>{$row->firstname}</td>
                <td>{$row->mobile}</td>
                <td>{$row->course_name}</td>
                <td>{$row->coordinator_name}</td>
                <td><button type='button' onclick='show({$row->id})'>Update</button></td>
                <td>
        <td>
        <form method='post' action=''>
        <input type='hidden' name='delete_student' value='{$row->id}' />
        <button type='submit' name='delete_student_button' class='btn btn-danger'>Delete</button>
    </form>

    
</td>"; ?>
<td>
  <a href="http://localhost/wordpress1/wordpress/show-marks/?id=<?php echo $row->id?>" class='button'> Show Marks </a>
    </td>
   <td>
  <a href="http://localhost/wordpress1/wordpress/add-marks/?id=<?php echo $row->id ?>&course_id=<?php echo $row->course_id ?>" class='button'>Add Marks</a>
   
</td>

   <?php
              echo "</tr>";
              
    }
} else {
    echo "No data available";
}

echo "</tbody>
      </table>";



get_footer();
?>





<!-- <div id="marks-container" style="display: none;"></div>

<script>
function showMarks(studentId) {
    // Use AJAX to fetch and display marks within the hidden div
    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'POST',
        data: {
            action: 'fetch_student_marks',
            student_id: studentId
        },
        success: function(response) {
            jQuery('#marks-container').html(response).slideDown();
        }
    });
}
</script> -->