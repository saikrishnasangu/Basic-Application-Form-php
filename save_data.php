<?php 
/*
extract($_POST);

$f_name = $fname && !empty($fname) ? $fname : 'N/A';
$lname = $lname ?? 'N/A';
$position = $position ?? 'N/A';
$gender = $gender ?? 'N/A';
$email = $email ?? 'N/A';
$contact = $contact ?? 'N/A';
$pan = $pan ?? 'N/A';
$dob = $dob ?? 'N/A';
$hear = $hear ?? [];
$qualification = $qualification ?? '';
$collegeName = $collegeName ?? 'N/A';
$passingYear = $passingYear ?? 'N/A';
$Branch = $Branch ?? 'N/A';
$marks = $marks ?? 'N/A';
$preferredLocation = $preferredLocation ?? 'N/A';
$presentAddress = $presentAddress ?? 'N/A';
$permanentAddress = $permanentAddress ?? $presentAddress;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Saved Application Details</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Saved Application Details are:</h1>
        <div class="card mt-4">
            <div class="card-body">
                <p><strong>Entered First Name: </strong>?php echo $f_name; ?></p>
                <p><strong>Entered Last Name: </strong>?php echo $lname; ?></p>

                <p><strong>Applied Position: </strong>?php echo $position; ?></p>

                <p><strong>Gender: </strong>?php echo $gender; ?></p>
                <p><strong>Entered Email Address: </strong><?php echo $email; ?></p>
                <p><strong>Entered Contact: </strong>?php echo $contact; ?></p>
                <p><strong>Entered PAN No.: </strong>?php echo $pan; ?></p>
                <p><strong>Entered DOB: </strong>?php echo $dob; ?></p>
                
                
                <?php
                $hearList = isset($_POST['hear']) ? implode(", ", $_POST['hear']) : 'N/A';
                echo "<p><strong>Heard about this role in: </strong>" . $hearList . "</p>";


                $qua = isset($_POST["qualification"]) ? $_POST["qualification"] : '';
                if($qua === 'Diploma' || $qua === 'Bachelors' || $qua === 'Masters') {
                echo "<p><strong>Qualification: </strong>" . $qua . "</p>";

                $clg = isset($_POST["collegeName"]) ? $_POST["collegeName"] : 'N/A';
                echo "<p><strong>College Name: </strong>" . $clg . "</p>";

                $year = isset($_POST["passingYear"]) ? $_POST["passingYear"] : 'N/A';
                echo "<p><strong>Passing Year: </strong>" . $year . "</p>";

                $brn = isset($_POST["Branch"]) ? $_POST["Branch"] : 'N/A';
                echo "<p><strong>Branch: </strong>" . $brn . "</p>";

                $cgpa = isset($_POST["marks"]) ? $_POST["marks"] : 'N/A';
                echo "<p><strong>CGPA/Percentage: </strong>" . $cgpa . "%</p>";
                }
                ?>
                
                <p><strong>Preferred Location: </strong>?php echo $preferredLocation; ?></p>
                <p><strong>Present Address: </strong>?php echo $presentAddress; ?></p>
                <p><strong>Permanent Address: </strong>?php echo $permanentAddress; ?></p>
                
                
                if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] == '') {
                    $file_name     = $_FILES["resume"]["name"];
                        echo "<p><strong>Uploaded File Name- </strong>" . $file_name . "</p>";
                }

                
            </div>
        </div>
    </div>
</body>
</html> */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Saved Application Details</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-success">Saved Application Details are:</h1>
        <div class="card mt-4">
            <div class="card-body">
                <?php
                $fnm = isset($_POST['fname']) && !empty($_POST['fname']) ? $_POST['fname'] : 'N/A';
                echo "<p><strong>Entered First Name: </strong>" . $fnm . "</p>";

                $lnm = isset($_POST['lname']) && !empty($_POST['lname']) ? $_POST['lname'] : 'N/A';
                echo "<p><strong>Entered Last Name: </strong>" . $lnm . "</p>";

                $pos = isset($_POST['position']) ? $_POST['position'] : 'N/A';
                echo "<p><strong>Applied Position: </strong>" . $pos . "</p>";

                $gend = isset($_POST['gender']) ? $_POST['gender'] : 'N/A';
                echo "<p><strong>Gender: </strong>" . $gend . "</p>";

                $ema = isset($_POST['email']) && !empty($_POST['fname']) ? $_POST['email'] : 'N/A';
                echo "<p><strong>Entered Email Address: </strong>" . $ema . "</p>";

                $cnt = isset($_POST['contact']) && !empty($_POST['fname']) ? $_POST['contact'] : 'N/A';
                echo "<p><strong>Entered Contact: </strong>" . $cnt . "</p>";

                $pc = isset($_POST['pan']) && !empty($_POST['fname']) ? $_POST['pan'] : 'N/A';
                echo "<p><strong>Entered PAN No.: </strong>" . $pc . "</p>";

                $db = isset($_POST['dob']) && !empty($_POST['fname']) ? $_POST['dob'] : 'N/A';
                echo "<p><strong>Entered DOB: </strong>" . $db . "</p>";

        
                $hearList = isset($_POST['hear']) ? implode(", ", $_POST['hear']) : 'N/A';
                echo "<p><strong>Heard about this role in: </strong>" . $hearList . "</p>";


                $qua = isset($_POST["qualification"]) ? $_POST["qualification"] : '';

                if($qua === 'Diploma' || $qua === 'Bachelors' || $qua === 'Masters') {
                    echo "<p><strong>Qualification: </strong>" . $qua . "</p>";

                    $clg = isset($_POST["collegeName"]) ? $_POST["collegeName"] : 'N/A';
                    echo "<p><strong>College Name: </strong>" . $clg . "</p>";

                    $year = isset($_POST["passingYear"]) ? $_POST["passingYear"] : 'N/A';
                    echo "<p><strong>Passing Year: </strong>" . $year . "</p>";

                    $brn = isset($_POST["Branch"]) ? $_POST["Branch"] : 'N/A';
                    echo "<p><strong>Branch: </strong>" . $brn . "</p>";

                    $cgpa = isset($_POST["marks"]) ? $_POST["marks"] : 'N/A';
                    echo "<p><strong>Percentage: </strong>" . $cgpa . " %</p>";
                }


                $prf = isset($_POST["preferredLocation"]) ? $_POST["preferredLocation"] : 'N/A';
                echo "<p><strong>Preferred Location: </strong>" . $prf . "</p>";

                $prea = isset($_POST["presentAddress"]) && !empty($_POST['fname']) ? $_POST["presentAddress"] : 'N/A';
                echo "<p><strong>Present Address: </strong>" . $prea . "</p>";

                $prma = isset($_POST["permanentAddress"]) && !empty($_POST['fname']) ? $_POST["permanentAddress"] : $prea;
                echo "<p><strong>Permanent Address: </strong>" . $prma . "</p>";


                
                //resume
                if (isset($_FILES["resume"])) {
                    $resume = $_FILES["resume"];
                    $resumeExtension = pathinfo($resume["name"], PATHINFO_EXTENSION);
                    $resumeBaseName = pathinfo($resume["name"], PATHINFO_FILENAME);
                    $resumeNewName = $resumeBaseName . '_' . date('d-m-Y_H-i') . '.' . $resumeExtension;
                    $resumePath = 'uploads/' . $resumeNewName;
                
                    // if (!is_dir('uploads')) {
                    //     mkdir('uploads', 0755, true);
                    // }
                
                    if (move_uploaded_file($resume["tmp_name"], $resumePath)) {
                        echo "<p><strong>Uploaded Resume:</strong> <a href='" . $resumePath . "'>" .$resumeNewName . "</a></p>";
                    } else {
                        echo "<p><strong>Uploaded Resume:</strong> N/A</p>";
                    }    
                }

                
                
                //multi files
                if (isset($_FILES["files"]) && is_array($_FILES["files"]["name"])) {
                    $fileCount = count($_FILES["files"]["name"]);
                    $resumeBaseName = isset($_FILES["resume"]["name"]) && !empty($_FILES["resume"]["name"]) ? 
                    pathinfo($_FILES["resume"]["name"], PATHINFO_FILENAME) : 'NULL';
                    $uploadedAny = false;
                
                    echo "<p><strong>Uploaded Other Files:</strong></p>";
                
                    for ($i = 0; $i < $fileCount; $i++) {
                        if ($_FILES["files"]["error"][$i] === UPLOAD_ERR_OK) {
                            $file = $_FILES["files"];
                            $fileExtension = pathinfo($file["name"][$i], PATHINFO_EXTENSION);
                            $fileNewName = $resumeBaseName . '_' . date('d-m-Y_H-i') . '_Doc' . ($i + 1) . '.' . $fileExtension;
                            $filePath = 'uploads/' . $fileNewName;
                
                            if (move_uploaded_file($file["tmp_name"][$i], $filePath)) {
                                echo "<li><a href='" . $filePath . "'>" .$fileNewName . "</a></li>";
                                $uploadedAny = true;
                            }
                        }
                    }
                
                    if (!$uploadedAny) {
                        echo "<li>N/A</li>";
                    }
                
                    
                }
                
                
                // header('Location:application_form.php');             
                ?>
            </div>
        </div>
    </div>
</body>
</html>
