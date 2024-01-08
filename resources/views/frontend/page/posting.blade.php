


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Opportunities Circle Nepal</title>

<!-- Fav Icon -->
<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<!-- Stylesheets -->
<link href="css/font-awesome-all.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/nice-select.css" rel="stylesheet">
<link href="css/color.css" rel="stylesheet">
<link href="css/posting.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- login-section -->
        <section class="login-section bg-color-2">        
                <div class="inner-container">
                    <div class="inner-box">
                        <h2>Admin Posting Panel</h2>
                        <div class="adminline">
                        </div>
                            <form action="{{url('/')}}/posting" method="post" enctype="multipart/form-data" class="login-form">
                                @csrf
                                <div class="form">
                                    <div class="form-group">
                                        <label>Name of Company</label>
                                        <input type="text" name="nameofcompany">
                                    </div>
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" name="position">
                                    </div>
                                    <div class="form-group">
                                        <label>Category Of vacancy</label>
                                        <select class="Category " name="categoryofvacancy" id="categoryofvacancy">
                                            <option selected disabled>Category of vacancy</option>
                                            <option value="Intership">Intership</option>
                                            <option value="Int.Opportunity">Int.Opportunity</option>
                                            <option value="Account/Finanace">Account/Finanace</option>
                                            <option value="IT/Tech Jobs">IT/Tech Jobs</option>
                                            <option value="Banking">Banking</option>
                                            <option value="NGO/NGO">NGO/NGO</option>
                                            <option value="Education">Education</option>
                                            <option value="Freshers Jobs">Freshers Jobs</option>
                                            <option value="Front Desk">Front Desk</option>
                                            <option value="Hospitality">Hospitality</option>
                                            <option value="Health Care">Health Care</option>
                                        </select>
                                    </div>
                                    
                                </div>

                                <div class="form">
                                    <div class="form-group">
                                        <label>Number of vacancy</label>
                                        <input type="number" name="numberofvacancy">
                                    </div>
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input type="email" name="emails">
                                    </div>
                                    <div class="form-group">
                                        <label>Jobs level</label>
                                        <select class="jobslevel" name="jobslevel" id="jobslevel">
                                            <option selected disabled>Jobs Level</option>
                                            <option value="Fresher">Fresher</option>
                                            <option value="Mid Level">Mid Level</option>
                                            <option value="Export Level">Export Level</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form">
                                    <div class="form-group">
                                        <label>Publish Date</label>
                                        <input type="date" name="publishdate">
                                    </div>
                                    <div class="form-group">
                                        <label>Deadline</label>
                                        <input type="date" name="dateline" >
                                    </div>
                                    <div class="form-group">
                                        <label>Working Place</label>
                                        <input type="text" name="workingplace" >
                                    </div>
                                </div>

                                <div class="form">
                                        <div class="form-group">
                                            <label>Education Required</label>
                                            <input type="text" name="educationrequirement" >
                                        </div>
                                        <div class="form-group">
                                            <label>Experience Requirement</label>
                                            <input type="text" name="experiencerequirment" >
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="text" name="salary" >
                                        </div>
                                </div>

                                <div class="form">
                                    <div class="form-group">
                                        <label>Upload Comapny Logo</label>
                                        <input type="file" class="upload_hide" name="uploadcompanylogo" id="" >
                                    </div>


                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phonenumber" >
                                    </div>

                                    <div class="form-group">
                                        <label>Jobs Types</label>
                                        <select class="jobstypes" name="jobstypes" id="jobstypes">
                                            <option selected disabled>Jobs Types</option>
                                            <option value="Full Time">Full time</option>
                                            <option value="Part Time">Part Tme</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form">
                                    <div class="form-group">
                                        <label>Descriptions</label>
                                        <textarea class="resizen"spellcheck="false" placeholder="Descriptions of Jobs" name="descriptions" id=""></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Required</label>
                                        <textarea spellcheck="false" placeholder="Requirement of Jobs" name="requirement" id=""></textarea>
                                    </div>
                                </div>
                                
                           
                            <div class="other-content centred">
                            <div class="text"><span>or</span></div>
                                <button type="submit" onclick="" class="postingsubmit">Submit</button>
                            <div class="othre-text">
                                <p>Do you make the mistake ? 
                                    <button type="reset" class="postingreset">Reset</button>
                                </p>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-section end -->
    






    <!-- main-js -->
    <script>
            const textarea = document.querySelector("textarea");
      textarea.addEventListener("keyup", e =>{
        textarea.style.height = "200px";
        let scHeight = e.target.scrollHeight;
        textarea.style.height = `${scHeight}px`;
           });  
           </script>  

</body><!-- End of .page_wrapper -->
</html>
