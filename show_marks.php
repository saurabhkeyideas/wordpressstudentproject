



 
 <?php
 /* Template Name: show-marks*/
 get_header();
 
 global $wpdb;
    $id=$_GET["id"];
   


$row = $wpdb->get_row("SELECT s.*, c.course_name
        FROM {$wpdb->prefix}student s
        INNER JOIN {$wpdb->prefix}course c ON s.course_id = c.id
        WHERE s.id = $id");
       
         ?>

<div style="text-align: center;">
<h2> Student Details</h2>
<h4>Name: <?php echo $row->firstname ?></h4>
<h4>Number: <?php echo $row->mobile ?></h4>
<h4>Course Name: <?php echo $row->course_name ?></h4>

</div>

  <?php 
  
  $sql= "SELECT s.*, m.marks
  FROM {$wpdb->prefix}marks m
  INNER JOIN {$wpdb->prefix}subject s ON s.id = m.subject_id
  WHERE  m.student_id=$id";


       
    
?>
 <table style="text-align: center; width:40%; margin:0% 30%;">
<hr style="border: 1px solid black; margin: 10px 0; ">
  <thead>
    <tr>
      
      <th scope="col" style="width: 40%; text-align: center;">Subject</th>
      <th scope="col" style="width: 40%; text-align: center;">Marks</th>
      
  
    </tr>
  </thead><tbody>
<?php
$results = $wpdb->get_results($sql);
if (!empty($results)) {
  foreach ($results as $row) {
?>
   
   
<tr >
    <td style="text-align: center;"> <?php echo $row->name ?></td>
 <td style="text-align: center;"><?php echo $row->marks ?></td>
  </tr>   

      
   <?php
  }
}
   
   ?>
    












 