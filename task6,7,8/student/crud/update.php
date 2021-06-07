<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$head = $content = $tags = "";
$head_err = $content_err = $tags_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["st_id"]) && !empty($_POST["st_id"])){
    // Get hidden input value
    $id = $_POST["st_id"];
    
    // Validate head
    $input_head = trim($_POST["head"]);
    if(empty($input_head)){
        $head_err = "Please enter a head.";
    } elseif(!filter_var($input_head, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $head_err = "Please enter a valid head.";
    } else{
        $head = $input_head;
    }
    
    // Validate content content
    $input_content = trim($_POST["content"]);
    if(empty($input_content)){
        $content_err = "Please enter an content.";     
    } else{
        $content = $input_content;
    }
    // Validate tags
    $input_tags = trim($_POST["tags"]);
    if(empty($input_tags)){
        $tags_err = "Please enter the tags amount.";     
    } else{
        $tags = $input_tags;
    }
    
    // Check input errors before inserting in database
    if(empty($head_err) && empty($content_err) && empty($tags_err)){
        // Prepare an update statement
        $sql = "UPDATE blog SET head=?, content=?, tags=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_head, $param_content, $param_tags, $param_id);
            
            // Set parameters
            $param_head = $head;
            $param_content = $content;
            $param_tags = $tags;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM std_tbl WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $head = $row["head"];
                    $content = $row["content"];
                    $tags = $row["tags"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	    <link rel="icon" type="image/png" href="https://www.htmlhints.com/image/fav-icon.png">
    <meta name="msvalidate.01" content="B7807734CA7AACC0779B341BBB766A4E" />
    <meta name="p:domain_verify" content="78ad0b4e41a4f27490d91585cb10df4a"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145078782-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-145078782-1');
    </script>

        <style>
                    .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    .hh_button {
    display: inline-block;
    text-decoration: none;
    background: linear-gradient(to right,#ff8a00,#da1b60);
    border: none;
    color: white;
    padding: 10px 25px;
    font-size: 1rem;
    border-radius: 3px;
    cursor: pointer;
    font-family: 'Roboto', sans-serif;
    position: relative;
    margin-top: 30px;
    margin: 0px;
    position: absolute;
    right: 20px;
    top: 1.5%;
    }
    header {
    color: white;
    padding: 20px;
    margin-bottom: 20px;
    }
    header a,  header a:hover {
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
            <header>
        <strong><i class="fas fa-chevron-left"></i> <a href="https://www.htmlhints.com/"></a> <i class="fas fa-chevron-right"></i></strong>
        <a href="https://www.htmlhints.com/article/24/user-registration-system-using-php-and-mysql-database" class="hh_button">Go Back To Tutorial</a>
      </header>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($head_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="head" class="form-control" value="<?php echo $head; ?>">
                            <span class="help-block"><?php echo $head_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($content_err)) ? 'has-error' : ''; ?>">
                            <label>Gender</label>
                            <textarea name="content" class="form-control"><?php echo $content; ?></textarea>
                            <span class="help-block"><?php echo $content_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($tags_err)) ? 'has-error' : ''; ?>">
                            <label>tags</label>
                            <input type="text" name="tags" class="form-control" value="<?php echo $tags; ?>">
                            <span class="help-block"><?php echo $tags_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <ins class="adsbygoogle my-3"
style="display:block"
data-ad-format="fluid"
data-ad-layout-key="-fb+5w+4e-db+86"
data-ad-client="ca-pub-1506739985879215"
data-ad-slot="5016195832"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>