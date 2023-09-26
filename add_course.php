<?php
/* Template Name: Add course   */
get_header();

   echo '<form action="insert_course.php" method="post" onsubmit="return validateForm()" >
        <div class="form-group">
            <label for="exampleInputEmail1">Course</label>
            <input type="text" name="course_name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter course name" required style="width: 20%;">
        </div>

        <div class="form-group">
            <label for="exampleInputNumber">Coordinator: </label>';
            
            
            $sql =$wpdb->get_results("SELECT * FROM wp_coordinator");
            // $result = mysqli_query($conn, $sql);
           
           echo '<select name="coordinator_id" id="exampleInputNumber">';
            if ($sql) {
                foreach($sql as $row) {
           echo "<option value=$row->id>$row->coordinator_name</option>";
             }
        }
           echo '</select>
        </div>
    
        <button type="submit" class="btn btn-primary" id="smt" >Submit</button>
    </form>
    <style>
    #exampleInputNumber{
        width:20%;
    }
    #smt{
        margin-left: 10px;
    }
    
    </style>';
    
?>
