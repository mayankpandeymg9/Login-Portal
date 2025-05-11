<?php
include('formsub.php');
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Print form data
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";


    if (isset($_POST["student_name"]) && isset($_POST["roll_number"]) && isset($_POST["year"])) {
        // Process high school marks form data
        $student_name = $_POST["student_name"];
        $roll_number = $_POST["roll_number"];
        $year = $_POST["year"];
        $physics = $_POST["physics"];
        $maths = $_POST["maths"];
        $comp_sci = $_POST["comp_sci"];
        $english = $_POST["english"];
        $chemistry = $_POST["chemistry"];
        $stream = $_POST["stream"];
        $query=mysqli_query($conn,"INSERT INTO form(student_name,roll_number,year,physics,maths,comp_sci,english,chemistry,stream) VALUES('$student_name','$roll_number','$year','$physics','$maths','$comp_sci','$english','$chemistry','$stream')");
        // if ($query) {
        //     echo "Form Submitted ";
        // } else {
        //     echo "Submit the form";
        // }
        //$query->close();
    } else {
        echo "Invalid form submission!";
    }
} 
// else {
//     echo "No form submitted!";
// }

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('bga1.jpg');
            margin: 10px;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        #submit {
            margin-top: 20px;
        }

        select {
            margin-bottom: 20px;
        }
        .agree-option {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 16px;
        }

        .agree-option input[type="checkbox"] {
            margin-right: 10px;
        }

        .agree-option label {
            user-select: none;
        }

        .agree-option label:hover {
            text-decoration: underline;
        }
        a {
            color: #007bff; /* Text color */
            text-decoration: none; /* Remove underline */
            padding: 5px 10px; /* Padding */
            background-color: #f0f0f0; /* Background color */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
        }

        a:hover {
            background-color: #007bff; /* Background color on hover */
            color: #fff; /* Text color on hover */
        }
    </style>



<body>
    <form method="POST">
        <label for="student_name">Student Name:</label>
        <input type="text" id="student_name" name="student_name" required/>

        <label for="roll_number">Roll Number:</label>
        <input type="text" id="roll_number" name="roll_number" required/>

        <label for="year">Year:</label>
        <input type="text" id="year" name="year" required/>

        <label for="">Subjects:</label>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="flex: 1 1 50%; margin-right: 10px;">
                <label for="physics">Physics:</label>
                <input type="text" id="physics" name="physics" required/>
            </div>
            <div style="flex: 1 1 50%;">
                <label for="maths">Maths:</label>
                <input type="text" id="maths" name="maths" required/>
            </div>
            <div style="flex: 1 1 50%; margin-right: 10px;">
                <label for="comp_sci">Computer Science:</label>
                <input type="text" id="comp_sci" name="comp_sci" required/>
            </div>
            <div style="flex: 1 1 50%;">
                <label for="english">English:</label>
                <input type="text" id="english" name="english" required/>
            </div>
            <div style="flex: 1 1 100%;">
                <label for="chemistry">Chemistry:</label>
                <input type="text" id="chemistry" name="chemistry" required/>
            </div>
        </div>

        <label for="">Select Stream</label>
        <select name="stream">
            <option value="">----</option>
            <option value="cse">CSE</option>
            <option value="ece">ECE</option>
            <option value="eee">EEE</option>
        </select>
        <div class="agree-option">
            <input type="checkbox" id="agree-checkbox" required>
            <label for="agree-checkbox">I agree that my details are correct and if there is a wrong detail entered then I am responsible for the same and are filled only once.</label>
        </div>

        <button id="submit">Submit</button>
    </form>
    <a href="homepage.php">Homepage</a>
</body>
</html>
