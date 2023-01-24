<!DOCTYPE html>
<html>
<head>
  <title>Upload Image</title>
</head>
<body>
  <form action="uploads.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <input type="submit" name="submit" value="Upload">
  </form>
  <hr>

  <?php
  // Include the database configuration file
  include 'configs.php';

  // Get images from the database
  $query = $db->query("SELECT file_name FROM image ORDER BY uploaded_on DESC");

  if($query->num_rows > 0){
      while($row = $query->fetch_assoc()){
          $imageURL = 'uploads/'.$row["file_name"];
  ?>
      <img src="<?= $imageURL; ?>" />
  <?php }} ?>
</body>
</html>