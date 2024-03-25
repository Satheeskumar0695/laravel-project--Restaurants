<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/employee.css')}}">

    <!---- Iconscout CSS  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>
        <form action="{{url('addemployee')}}" method="POST" enctype="multipart/form-data"  onclick="submit">
            @csrf
            <div id="Form1" class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <!-- First Name -->
                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="firstname" placeholder="Enter your name">
                        </div>


                    <!--Last Name -->
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text"  name="lastname" placeholder="Enter your name" >
                        </div>

                    <!--DOB-->
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date"   name="dob"placeholder="Enter birth date" >
                        </div>

                    <!--Age -->
                        <div class="input-field">
                            <label>Age</label>
                            <input type="number"  name="age" placeholder="Enter age" >
                        </div>

                    <!--Email Id -->
                        <div class="input-field">
                            <label>Email</label>
                            <input type="text"   name="email_id" placeholder="Enter your email">
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="password"   name="password"placeholder="Enter your password">
                        </div>

                    <!--Mobile Number-->
                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="text"  name="mobilenumber" placeholder="Enter mobile number" >
                        </div>

                    <!--Gender-->
                        <div class="input-field">
                            <label>Gender</label>
                            <select   name="gender"required >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                </div>

                                         <!-------------Enrollment--------------->
                <div class="details enroll">
                    <span class="title">Address Details</span>


                    <!--Nationality-->
                    <div class="fields">
                        <div class="input-field">
                            <label>Nationality</label>
                            <select   name="nationality"required>
                                <option disabled selected>Select</option>
                                <option>INDIAN</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Door No</label>
                            <input type="text"   name="doorno"placeholder="Enter the door no" >
                        </div>
                    <!--Street Name-->
                        <div class="input-field">
                            <label>Street Name</label>
                            <input type="text"   name="streetname"placeholder="Enter street name">
                        </div>
                        <div class="input-field">
                            <label>Locality</label>
                            <input type="text"  name="locality" placeholder="Enter the locality" >
                        </div>
                        <div class="input-field">
                            <label>city</label>
                            <input type="text"  name="city" placeholder="Enter the city" >
                        </div>

                    <!--Country-->
                        <div class="input-field">
                            <label>Country</label>
                            <select  name="country">
                                <option disabled selected>Select</option>
                                <option>india</option>
                              </select>
                              </div>

                    <!--State-->
                              <div class="input-field">
                                <label>State</label>
                                <select  name="state" >
                                    <option disabled selected>Select</option>
                                    <option>Tamil Nadu</option>
                                    <option>Kerala</option>
                                    <option>Pondicheery</option>
                                </select>
                                </div>

                    <!--District-->
                                <div class="input-field">
                                    <label>District</label>
                                    <select  name="district" >
                                        <option disabled selected>Select</option>
                                        <option>Salem</option>
                                        <option>Erode</option>
                                        <option>Coimbatore</option>
                                    </select>
                                    </div>

                    <!--Pincode-->
                    <div class="input-field">
                        <label>Pincode</label>
                        <input type="number"  name="pincode"placeholder="Enter pincode">
                    </div>

                </div>
                @if ('employee')
                <div id="invalid" class="employee">
                        {{Session('employee')}}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('invalid').style.display = 'none';
                    }, 5000);
                </script>
                @endif

                    <!--next button-->
                    <button type="button" class=" btn nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

            <div id="Form2" class=" form second">

                    <div class="details Enrollment">
                    <span class="title">Enrollment</span>
                   <div class="fields">
                        <div class="input-field">
                            <label>Qualifaction</label>
                            <select   name="qualification" required>
                                <option disabled selected>Select qualifaction</option>
                                <option>10th</option>
                                <option>12th</option>
                                <option>Diploma</option>
                                <option>Any Degree</option>
                            </select>
                        </div>

                    <!--Experiance-->
                         <div class="input-field">
                            <label>Experiance</label>
                            <select  name="experience">
                                <option disabled selected>Select Experiance</option>
                                <option>Fresher</option>
                                <option>1-2 Years</option>
                                <option>3-5 Years</option>
                                <option>5 years Above</option>
                            </select>
                        </div>

                     <!--Role-->
                        <div class="input-field">
                            <label>Role</label>
                            <select  name="role">
                                <option disabled selected>Select Role</option>
                                <option>Manager</option>
                                <option>Admin</option>
                                <option>Chef</option>
                                <option>Billing</option>
                                <option>Store Keeper </option>
                                <option>House Keeping </option>
                            </select>
                        </div>

                    <!--Job Preferred-->
                    <div class="input-field">
                        <label>Date of Joining</label>
                        <input type="date"  name="doj"  >
                    </div>
                        </div>

            </div>
                         <!----------Bank Details--------->
                <div class="details document">
                    <span class="title">Document</span>

                    <!--Aadhar card-->
                    <div class="fields">
                        <div class="input-field">
                            <label>Aadhar Card</label>
                            <input type="file"  name="aadharcard" required>
                        </div>

                    <!--Pan card-->
                        <div class="input-field">
                            <label>Pan Card</label>
                            <input type="file"   name="pancard" required>
                        </div>
                        <div class="input-field">
                            <label>Passbook</label>
                            <input type="file"   name="passbook" required>
                        </div>
                    <!--Image-->
                        <div class="input-field">
                            <label>Image</label>
                            <input type="file"name="image" >
                        </div>
                    </div>


                    <div class="details bank">
                        <span class="title">Bank Details</span>

                        <!--Account number-->
                        <div class="fields">
                            <div class="input-field">
                                <label>Bank Name</label>
                                <input type="Text"  name="bankname"placeholder="Enter bank name" >
                            </div>

                        <!--IFCS code-->
                            <div class="input-field">
                                <label>Account Number</label>
                                <input type="number"  name="account"placeholder="Enter account number">
                           </div>

                        <!--Bank name-->
                            <div class="input-field">
                                <label>IFSC Code</label>
                                <input type="text"  name="ifsc" placeholder="Enter ifsc code" >
                            </div>


                        <!--Branch name-->
                        <div class="input-field">
                            <label>Branch Name</label>
                            <input type="text"  name="branchname" placeholder="Enter branch name" >
                        </div>
                    </div>

                     <!--Back Button-->
                    <div class="buttons">
                        <div class=" btn backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText backBtn">Back</span>
                        </div>

                         <!--Submit button-->
                        <button type="sumbit" onclick="submit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="./assets/js/addemployees.js"></script>
</body>
</html>
