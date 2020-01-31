<?php get_header();?>
<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
//define('DB_PASSWORD', 'Anamaria89#');
//define('DB_NAME', 'wordpress');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if($_SERVER["REQUEST_METHOD"] == "POST"){
  
// Include config file
  $image = $_FILES['image']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
 
 
// Define variables and initialize with empty values
$title = $description = '';
$title_err = $description_err = "";
 
// Processing form data when form is submitted

    // Validate title
    $input_name = trim($_POST["title"]);
    if(empty($input_name)){
        $title_err = "Please enter a title.";
    }  else{
        $title = $input_name;
    }
    
    // Validate description
    $input_name = trim($_POST["description"]);
    if(empty($input_name)){
        $description_err = "Please enter a description.";
    }  else{
        $description = $input_name;
    }
    
    
    // Check input errors before inserting in database
    if(empty($title_err) && empty($description_err)){
        if( in_array($imageFileType,$extensions_arr) ){
 
            // Insert record
            //$query = "insert into recipes(name) values('".$image."')";
           // mysqli_query($link,$query);
            // Upload file
           
        // Prepare an insert statement
        $sql = "INSERT INTO recipes (title, description, image) VALUES (?, ?, ?)";
         
        move_uploaded_file($_FILES['image']['tmp_name'], SITE_ROOT.'/images/'. $image);
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_title, $param_description, $param_image);
            
            // Set parameters
            $param_title= $title;
            $param_description = $description;
            $param_image = $image;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}}
?>

<div class="container">

    
      
       <h2><?php the_title(); ?> </h2>
 <?php if (have_posts()) : while(have_posts()) : the_post();?>
       <?php the_content();?>
<?php endwhile; endif;?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label >Title</label>
    <input type="text" name="title" class="form-control" id="text">
    <span class="help-block"><?php $title_err;?></span>
  </div>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label >Description</label>
    <textarea class="form-control" name="description" rows="3"></textarea>
  </div> <input type="submit" value="Recipe" name="submit">
</form>

</form>
</div>


<?php get_footer();?>