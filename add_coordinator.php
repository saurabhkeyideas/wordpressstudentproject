<?php
/* Template Name: Add coordinator   */
get_header();

   echo '<form action="insert_coordinator.php" method="post" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="exampleInputEmail1">Coordinator Name</label>
            <input type="text" name="coordinator_name" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter coordinator name" required style="width: 20%;">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>'
    ?>
    
