<?php 
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $department = $_POST['department'];
        $document = $_POST['document'];
        $date = $_POST['date'];
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($image_tmp,"images/$image");

        $con = mysqli_connect("localhost","root","","kpi system");

        $query = "insert into aviaform (name,department,document,date,image) values ('$name','$department','$document','$date', '$image)";

        $result = mysqli_query($con, $query);

        if($result==1)
        {       

        echo "Inserted successfully";
        
        }
        else {       

        echo "Insertion Failed";

             }
    }
?>