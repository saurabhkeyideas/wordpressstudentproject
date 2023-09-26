
<?php
/* Template Name: Add Marks */
get_header();
global $wpdb;

$id = $_GET["id"];
$course_id = $_GET["course_id"];

if (isset($_POST["submit"])) {
    $data = array(
        'student_id' => $id,
        'subject_id' => $_POST['subject_id'],
        'marks' => $_POST['marks'],
    );

    $result = $wpdb->insert('wp_marks', $data);

    if ($result === false) {
        echo "Failed to add marks";
    } else {
        echo "Marks added successfully!";
        wp_redirect(home_url('/table-1')); // Redirecting to the same page to prevent duplicate submissions.
        exit;
    }
}

?>
<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputNumber">Subject: </label>
        <?php
        $sql = $wpdb->get_results("SELECT * FROM wp_subject WHERE course_id = $course_id");
        ?>
        <select name="subject_id" id="exampleInputNumber">
            <?php if ($sql) {
                foreach ($sql as $row) { ?>
                    <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
                <?php }
            } ?>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Marks</label>
        <input type="text" name="marks" class="form-control" id="exampleInputname" aria-describedby="emailHelp"
            placeholder="Enter your marks" required style="width: 20%;">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<style>
    #exampleInputNumber{
        width:20%;
    }


    

  
    <!-- <?php
    /* Template Name: Add Marks   */
     get_header();
   
    global $wpdb;

  

if(isset($_POST["submit"])){
    $data=array(
     'student_id'=>$_GET['id'],
     'subject_id'=>$_POST['subject_id'],
     'marks'=>$_POST['marks'],
    );

    $result=$wpdb->insert('wp_marks',$data);
if($result===false){
    echo  "Failed to add marks";

}
die();
}
$id=$_GET["id"];
$course_id=$_GET["course_id"];
    ?>
    <form action='<?php echo  "?id=".$id?>' method="post" >
    <div class="form-group">
            <label for="exampleInputNumber">Subject: </label>
            <?php
          
            $sql = $wpdb->get_results("SELECT * FROM wp_subject where course_id = $course_id");
           
            ?>
            <select name="subject_id" id="exampleInputNumber">
            <?php if ($sql) {
                foreach($sql as $row) {?>
            <option value=<?php echo $row->id ?>><?php echo $row->name?></option>
            <?php }}?>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Marks</label>
            <input type="text" name="marks" class="form-control" id="exampleInputname" aria-describedby="emailHelp" placeholder="Enter your marks" required style="width: 20%;">
        </div>
       
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->

   

    /* //asfdhgash */