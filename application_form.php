<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IDS z</title>
    <link href="bs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- for toastify -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- for warning icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    
    <style>
        body {
            padding-top: 100px;
            font-family: 'Roboto', sans-serif;
        }
        .toast-warning {
            display: flex;
            align-items: center;
        }
        .toast-warning .toast-icon {
            margin-right: 10px;
            font-size: 20px;
        }
        .fixed-top {
            position: fixed;
            width: 100%;
            z-index: 1030;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
        }
        .form-header {
            margin-bottom: 0;
        }
        
        #copyAddress {
            margin: 4px 0 0;
            line-height: normal;
            width: 11px;
            height: 11px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <div id="err" class="container position-fixed text-center text-danger "></div>
        <form class="card p-3 text-center"  id="frmname" name="frmname" method="post" enctype="multipart/form-data">
            <div class="container fixed-top text-center text-white ">
                <div class="header-container bg-success ">
                    <h1 class="form-header text-light">Basic Job Application Form</h1>
                    <button type="button"  onclick="validateForm()"   class="btn btn-primary form-control-sm">Submit Application</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" id="fname" class="form-control" placeholder="Enter first name" name="fname" maxlength="25" autocomplete="off">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input type="text" id="lname" class="form-control" placeholder="Enter last name" name="lname" maxlength="25" autocomplete="off">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="pos" class="form-label">Applied Position:</label>
                    <select class="form-control" id="pos" name="position">
                        <option value="" disabled selected>Select an option</option>
                        <option name="position" value="Intern">Intern</option>
                        <option name="position" value="Software Engineer">Software Engineer</option>
                        <option name="position" value="Data Analyst">Data Analyst</option>
                    </select> 
                </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <label for="gender" class="form-label">Gender:</label>
                            <div id="gender" name="gender">                           
                                <label style="margin-right: 25px;"><input type="radio" class="form-check-input" name="gender" value="Male"> Male </label>
                                <label style="margin-right: 25px;"><input type="radio" class="form-check-input" name="gender" value="Female"> Female </label>
                                <label style="margin-right: 25px;"><input type="radio" class="form-check-input" name="gender" value="Other"> Other </label>
                            </div>
                    </div>

            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="email" class="form-label">Email address:</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email" oninput="validateEmailInput()" maxlength="50" autocomplete="off">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="contact" class="form-label">Phone Number:</label>
                    <input type="text" name="contact"  id="contact" class="form-control" onkeypress="validateNumberInput(event)" maxlength="10" autocomplete="off">
                    <div class="invalid-feedback">Please enter a valid phone number starting with 6-9 and 10 digits.</div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="pan" class="form-label">Enter PAN Number:</label>
                    <input type="text" name="pan"  id="pan" class="form-control" pattern="[A-Z]{5}\d{4}[A-Z]{1}" title="Enter a valid PAN number in format Eg: ABCD1234Z" maxlength="10" autocomplete="off">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label class="form-label">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                    <div id="dobErrorMessage" style="color: red;"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">                    
                        <label for="hear" class="form-label">How did you hear about this role:</label>
                        <div id="hear">
                            <label style="margin-right: 25px;"><input type="checkbox" class="form-check-input" name ="hear[]" value="Social Media"> Social Media</label>
                            <label style="margin-right: 25px;"><input type="checkbox" class="form-check-input" name ="hear[]" value="LinkedIn"> LinkedIn</label>
                            <label style="margin-right: 25px;"><input type="checkbox" class="form-check-input" name ="hear[]" value="Careers"> Careers</label>
                        </div>
                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="hqa" class="form-label">Highest Qualification Degree:</label>
                    <select class="form-control" id="hqa" name="qualification">
                        <option value="" selected>Select an option</option>
                        <option value="Diploma" >Diploma</option>
                        <option value="Bachelors" >Bachelors</option>
                        <option value="Masters" >Masters</option>
                    </select>
                </div>
            </div>
            <div id="collegeFields" style="display: none;"><hr>
                <div class="row mt-3" >
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <label for="collegeName" class="form-label">College Name:</label>
                        <input type="text" class="form-control" id="collegeName" name="collegeName" autocomplete="off">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <label for="passingYear" class="form-label">Year of Passing:</label>
                        <input type="text" class="form-control" id="passingYear" name="passingYear" autocomplete="off">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <label for="Branch" class="form-label">Branch:</label>
                        <input type="text" class="form-control" id="Branch" name="Branch" autocomplete="off">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <label for="marks" class="form-label">CGPA/Percentage:</label>
                        <input type="text" class="form-control" id="marks" name="marks" autocomplete="off">
                    </div>
                </div><hr>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <label><input type="checkbox" id="tick">&nbsp Are you willing to work anywhere in <strong>Pan India?</strong></label>
                </div>
                <div class="col">
                    <label for="preferredLocation">Preferred Location:</label>
                    <input type="text" id="preferredLocation" name="preferredLocation" disabled autocomplete="off">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="presentAddress" class="form-label">Present Address:</label>
                    <input class="form-control" id="presentAddress" name="presentAddress" placeholder="Enter your present address" autocomplete="off" onkeyup="copyPreAddress()">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <label for="permanentAddress" class="form-label">Permanent Address:</label>
                    <input class="form-control" id="permanentAddress" name="permanentAddress" placeholder="Enter your permanent address" autocomplete="off">

                    <input type="checkbox" id="copyAddress" name="copyAddress" onchange="copyPreAddress()">
                    <small class="form-text text-muted"><label for="copyAddress">Same as Present Address</label></small>
                        
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="resume" class="form-label">Attach Resume:</label>
                    <input type="file" id="resume" class="form-control form-control-file" name="resume" accept=".HTML, .pdf, .doc, .docx, .jpg, .jpeg">
                    <small class="form-text text-muted">Accepted formats: JPG, JPEG, PDF, DOC, DOCX</small>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="files" class="form-label">Attach Other Files:</label>
                    <input type="file" id="files" class="form-control form-control-file" name="files[]" accept=".jpg, .pdf, .doc, .docx, .jpeg" multiple>
                    <small class="form-text text-muted">Accepted formats: JPG, JPEG, PDF, DOC, DOCX.<strong> You can select multiple files.</strong></small>
                </div>
            </div>
        </form>
    </div>
    
                <!-- //********************JAVA SCRIPT**********************// -->
    <script>

        //Location
        document.getElementById('tick').addEventListener('change', function() {
            var preferredLocationInput = document.getElementById('preferredLocation');
            if (this.checked) {
                preferredLocationInput.disabled = false;
            } else {
                preferredLocationInput.disabled = true;
                preferredLocationInput.value = '';
            }
        });
        
        //DOB VALIDATION
        document.getElementById('dob').addEventListener('change', function(event) {
        var dobInput = this.value;
        var dob = new Date(dobInput);
        var today = new Date();

        var diff = today - dob;

        var age = Math.floor(diff/(1000 * 60 * 60 * 24 * 365.25));

        if (age < 18) {
            document.getElementById('dobErrorMessage').innerHTML = 'You must be at least 18 years old to apply.';
            event.preventDefault();
        } else {
            document.getElementById('dobErrorMessage').innerHTML = '';
        }
        });


        
        //EDUCATION VALIDATION BLOCKING
        document.getElementById('hqa').addEventListener('change', function() {
            var selectValue = this.value;
            var collegeFields = document.getElementById('collegeFields');

            if (selectValue != "") {
                collegeFields.style.display = 'block';
            } else {
                collegeFields.style.display = 'none';
            }
        });

        //ADDRESS VALIDATION
        function copyPreAddress() {
            var presentAddress = document.getElementById('presentAddress').value;
            var permanentAddress = document.getElementById('permanentAddress');
            var checkbox = document.getElementById('copyAddress');

            if (checkbox.checked) {
                permanentAddress.value = presentAddress;
                permanentAddress.disabled = true;
            } else {
                permanentAddress.value = '';
                permanentAddress.disabled = false;
            }
        }

        
        //EMAIL VALIDATION
        function validateEmailInput() {
            const input = document.getElementById('email');
            const email = input.value.trim();
            const emailRegex = /^[a-zA-Z0-9_.+-]+@gmail\.com$/;

            if (!emailRegex.test(email)) {
                document.getElementById('email').innerHTML = "*Enter a valid email ending with @gmail.com";
                return false;
            } else {
                document.getElementById('email').innerHTML = "";
                return true;
            }
        }

        //CONTACT VALIDATION
        function validateNumberInput(event) {
            var input = document.getElementById('contact'); 
            if (isNaN(event.key) || event.key === ' ' || (input.value.length === 0 && !['6', '7', '8', '9'].includes(event.key)) || input.value.length >= 10)
            event.preventDefault();
        }
        
        //TOASTIFY ALERTS
        function showToast(message, duration = 1000, backgroundColor = '#ffcc00') {
        Toastify({
            text: `<i class="fas fa-exclamation-triangle toast-icon"></i>${message}`,
            duration: duration,
            gravity: "top",
            position: "center", 
            backgroundColor: backgroundColor,
            stopOnFocus: true, // it prevents dismissing of toast on hover
            className: "toast-warning",
            style: {
                fontFamily: 'Roboto, sans-serif',
                fontWeight: 'light',
                color: 'black'
            },
            escapeMarkup: false // it allows HTML tags in text
        }).showToast();
    }
    
    //*****FORM-VALIDATION*****
    function validateForm() {
    
        var form = document.frmname;

       /* //first name
        // if (form.fname.value.trim() === "") {
        //     showToast("Please enter first name");
        //     form.fname.focus();
        //     return false;
        // }

        // last name
        if (form.lname.value.trim() === "") {
            showToast("Please enter last name");
            form.lname.focus();
            return false;
        }

        // gender
        var gen = form.gender;
        var genderSelected = document.querySelector('input[name="gender"]:checked') !== null;
        if (!genderSelected) {
            showToast("Please select your gender");
            return false;
        }

        // email
        var email = form.email;
        if (email.value.trim() === "") {
            showToast("Please enter email");
            email.focus();
            return false;
        }
        if (!validateEmailInput()) {
            showToast("Please enter a valid Gmail address");
            email.focus();
            return false;
        }

        // phone number
        var phone = form.contact;
        if (phone.value.trim() === "") {
            showToast("Please enter phone number");
            phone.focus();
            return false;
        }

        // PAN number
        var pan = form.pan;
        if (pan.value.trim() === "") {
            showToast("Please enter PAN number");
            pan.focus();
            return false;
        }

        // DOB
        var dob = form.dob;
        if (dob.value.trim() === "") {
            showToast("Please enter DOB");
            dob.focus();
            return false;
        }
        
        // multiple selection
        var hwk = form.hear;
        var hwkChecked = document.querySelector('input[name="hear[]"]:checked') !== null;
        if (!hwkChecked) {
            showToast("Please select at least one option");
                return false;
        }


        // education details -- need to validate every 
        var high = form.hqa;
        if (high.value === 'Diploma' || high.value === 'Bachelors' || high.value === 'Masters') {
            var cname = form.collegeName;
            if (cname.value.trim() === "") {
                showToast("Please enter College Name");
                cname.focus();
                return false;
            }

            var yop = form.passingYear;
            if (yop.value.trim() === "") {
                showToast("Please enter passing year");
                yop.focus();
                return false;
            }

            var brnch = form.Branch;
            if (brnch.value.trim() === "") {
                showToast("Please enter branch");
                brnch.focus();
                return false;
            }

            var mks = form.marks;
            if (mks.value.trim() === "") {
                showToast("Please enter CGPA/Percentage");
                mks.focus();
                return false;
            }
        }

        // Validate preferred location if applicable
        var loc = form.preferredLocation;
        if (form.tick.checked && loc.value.trim() === "") {
            showToast("Please enter preferred Location");
            loc.focus();
            return false;
        }

        // Validate addresses
        var presentAdd = form.presentAddress;
        if (presentAdd.value.trim() === "") {
            showToast("Please fill the present address");
            presentAdd.focus();
            return false;
        }

        var permanentAdd = form.permanentAddress;
        if (permanentAdd.value.trim() === "") {
            showToast("Please fill the permanent address");
            permanentAdd.focus();
            return false;
        }

        //Validate file uploads
        // var resume = form.resume;
        // if (!resume.value) {
        //     showToast("Please upload your resume");
        //     resume.focus();
        //     return false;
        // }

        // var fls = form.files;
        // if (!fls.value) {
        //     showToast("Please upload other files");
        //     fls.focus();
        //     return false;
        // }
            */

        

        var frm=document.frmname;
        frm.action="save_data.php";
        frm.method="post";
        frm.submit();

        return true;
    } 

    </script>
</body>
</html>