<html>

<head>
    <title>Sign Up here</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <?php

    $host="localhost";
    $user="root";
    $database="test";
    $conn = mysqli_connect($host,$user,"root",$database) or die("coudln't connect");

    $profession = $_GET['prof'];
    $sqlQ = "select name,contact, specialty, area from venderinfo where specialty='$profession'";
    
    $result = mysqli_query($conn,$sqlQ);
?>

    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <section>
                    <h2>Table</h2>
                    <h3>Default</h3>
                    <div class="table-wrapper">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact No.</th>
                                    <th>Specialty</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo "<table>";
                                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $name = $row['name'];
                                        $contact = $row['contact'];
                                        $specialty = $row['specialty'];
                                        $loc = $row['area'];
                                        echo "<tr><td>".$name."</td><td>".$contact."</td><td>".$specialty."</td><td>".$loc."</td></tr>";
                                    }
                                    echo "</table>";
                                ?>
                                
                            </tbody>
                            
                        </table>
                    </div>


            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>