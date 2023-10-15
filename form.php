<html>
    <head>
        <style>
            hello{
            display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 280px;
			background-color: #5f9ea0;
			color: white;
			font-size: 40px;
			font-weight: bold;
            }
            header {
    background-color: #ADD8E6;
    color: #fff;
    padding: 10px;
    text-align: center;
    }
    
    header h1 {
    font-size: 60px;
    margin: 0;
    font-weight: bold;
    text-transform: uppercase;
    }
    
    nav {
    display: flex;
    justify-content: center;
    margin-bottom: 3px;
    margin-left: 510px;
    margin-right: 510px;
    background-color: #f5f5f5;
    padding: 15px 0;
    }
    
    nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    }
    
    nav li {
    display: inline-block;
    margin: 0 30px;
    }
    
    nav a {
    color: #666;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
    }
    
    nav a:hover {
    color: #8c43ff;
    }

ul {
  list-style-type: none;
  padding: 0;
}
        </style>
    </head>
    <body>
    <header>
    <nav>
      <ul>
        <li><a href="index.html"> Home </a></li>
        <li><a href="view.php"> View Task </a></li>
        <li><a href="aboutus.html"> About Us </a></li>
      </ul>
    </nav>
  </header>
    
    </body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $heading = $_POST["heading"];
    $eltype = $_POST["eltype"];
    $timef = $_POST["timef"];
    $datef = date('d/m/y', strtotime($_POST['datef']));
    $timet = $_POST["timet"];
    $datet = date('d/m/y', strtotime($_POST['datet']));
    $description = $_POST["Description"];

    $data = "$heading \n $eltype \n  $timef \n $datef \n $timet \n $datet \n $description\n";

    // Open the file for appending
    $file = fopen("form.txt", "a");

    // Write the data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);
    
    echo "<hello>" . 'Task added successfully!';
    echo "</br>";
    echo "Event Name : $heading";
    echo "</br>";
    echo "Event type : $eltype";
    echo "</br>";
    echo "Time From : $timef ";
    echo "$datef ";
    echo "to $timet ";
    echo "$datet ";
    echo "</br>";
    echo "Description : $description";
}
?>
</html>