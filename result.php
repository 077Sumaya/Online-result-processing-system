<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Your Result</title></head>
<body>
<center>
    <div class="txt">Online Student Result Processing System</div>
    <div class="content">
        <div class="content3">
            <div class="max">Input Panel</div>


            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student";
            $Id = $_POST["ID"];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT `Id`,`name`,`CSE 2201`,`CSE 2203`,`CSE 2205`,`CSE 2207`,`MATH  2247`,`Cradit`,`CGPA` FROM cgpa WHERE Id = $Id";
            $cgpa = $conn->query($sql);

            if ($cgpa->num_rows > 0) {
                while ($row = $cgpa->fetch_assoc()) {

                    echo '<div class="list"> FULL NAME: ' . $row["name"]. '</div>
        <div class="list">ID: ' . $row["Id"]. '</div>
        <div class="list">CSE 2201: ' .$row["CSE 2201"]. '</div>
         <div class="list">CSE 2203: ' . $row["CSE 2203"]. '</div>
         <div class="list">CSE 2205: ' . $row["CSE 2205"]. '</div>
         <div class="list">CSE 2207: ' . $row["CSE 2207"]. '</div>
         <div class="list">MATH  2247 : ' . $row["MATH  2247"]. '</div>
         <div class="list">Cradit: ' .$row["Cradit"]. '</div>
         <div class="list">CGPA: ' . $row["CGPA"]. '</div>' ;
                }
            }
            else
            {
                echo "Not found any data";
            }


            $conn->close();
            ?>
        </div>
    </div>
</center>
</body>