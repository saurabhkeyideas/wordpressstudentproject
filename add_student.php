<?php
/* Template Name: Add Student   */
get_header();



   echo '<form action="insert_student.php" class="frm" method="post" onsubmit="return validateForm()">
        <div class="form-group" >
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your name" required  style="width: 20%;">
        </div>
        <div class="form-group" >
            <label for="exampleInputPassword1">Mobile</label>
            <input type="text" name="mobile" class="form-control" id="exampleInputmobile1" placeholder="Enter your mobile number" required  style="width: 20%;">
               </div>
        <div class="form-group" >
            <label for="exampleInputNumber">Course: </label>';
            
           
            $sql = $wpdb->get_results("SELECT * FROM wp_course");
            // $result = mysqli_query($conn, $sql);
            
          echo  '<select name="id" id="exampleInputNumber">';
             if ($sql) {
                foreach ($sql as $row) {
           echo "<option value=$row->id>$row->course_name</option>";
             }
            }
           echo '</select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <style>
    #exampleInputNumber{
        width:20%;
    }
    .form-group{
        align-item:center;
    }
    .frm{
       
        justify-content: center; 
        align-items: center;
        height: 100vh; 
    }
    </style>';

   ?>