<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <form enctype="multipart/form-data" action="index.php" method="POST">
      <div class="upload-section">
        <p class="upload-message">Upload your photo</p>
        <input type="file" name="uploaded_file"></input><br />
        <input type="submit" value="Upload"></input>
        <?php
        if (!empty($_FILES['uploaded_file'])) {
            $path = "/var/www/html/uploads/";
            $file_name = $_FILES['uploaded_file']['name'];

            // Define allowed image extensions
            $allowed_extensions = array('png', 'jpg', 'jpeg', 'gif');

            // Check if any allowed extension is present in the filename
            $has_allowed_extension = false;
            foreach ($allowed_extensions as $extension) {
                if (stripos($file_name, '.' . $extension) !== false) {
                    $has_allowed_extension = true;
                    break;
                }
            }

            if ($has_allowed_extension) {
                $path = $path . $file_name;

                if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                    echo "<p class='upload-success'>The file " . basename($file_name) . " has been uploaded successfully.</p>";
                } else {
                    echo "<p class='error'>There was an error uploading the file, please try again!</p>";
                }
            } else {
                echo "<p class='error'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
            }
        }
        ?>
      </div>
    </form>
  </div>
</body>
</html>
