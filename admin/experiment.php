<!DOCTYPE html>
<hmtl lang ="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Experiment</title>

</head>
<body>
    <!-- <p>Hello</p>
    <p> Hi</p> -->

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead style="background-color: #ffcc00">
                            <tr>
                            <th>Tag</th>
                            <th>Household Head</th>
                            <th>Samahan</th>
                            <th>Barangay</th>
                            <th>Monthly Income</th>
                            </tr>
                        </thead>

                        <tbody>

                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "cudho";

                            $connection = new mysqli($servername,$username,$password,$database);

                            if ($connection->connect_error){
                                die("Connection failed ". $connection->connect_error);
                            }

                            $sql = "SELECT * FROM tbl_verif";
                            $result = $connection->query($sql);
                            
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>". $row["id"] ."</td>
                                    <td>". $row["household_head"] ."</td>
                                    <td>". $row["samahan"] ."</td>
                                    <td>". $row["barangay"] ."</td>
                                    <td>". $row["monthly_income"] ."</td>
                                </tr>";
                            }
                        ?>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


                            

</body>

</html>
