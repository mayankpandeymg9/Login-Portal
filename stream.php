<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allotted Stream</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('bga1.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px; /* Added margin-bottom to create space between form and result */
        }

        input[type="text"] {
            padding: 10px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff; /* Changed color */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Changed color */
        }

        .result {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .result p {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .result span {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="rollno">Roll Number:</label>
        <input type="text" name="rollno" id="rollno">
        <input type="submit" value="Fetch Data">
    </form>
    <div class="result">
        <?php
            $servername = "localhost";
            $username = "root"; 
            $password = "";
            $dbname = "formsub";


            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }
            $rollno= isset($_POST['rollno']) ? $_POST['rollno']:'';
            $sql = "SELECT * FROM form WHERE roll_number=$rollno";
            $result = $conn->query($sql);


            if ($result!==false && $result->num_rows>0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p><span>NAME:</span> " . $row["student_name"] . "</p>";
                    echo "<p><span>ROLL NUMBER:</span> " . $row["roll_number"] . "</p>";
                    echo "<p><span>Alloted Branch:</span> " . $row["stream"] . "</p>";
                }
            } else {
                echo "<p>No results found</p>";
            }
            $conn->close();
        ?>
    </div>
</body>
</html>
