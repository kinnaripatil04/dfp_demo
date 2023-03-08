<!DOCTYPE html>
<html>
<head>
    <title>Register in DFP</title>
    <!--LINKS SECTION-->
    <!--Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!----------------- BOOTSTRAP CSS ------------------->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!------------- FONT AWESOME CDN LINK --------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
    
    <!------------------ MAIN STYLE CSS ----------------->
    <link rel="stylesheet" href="style.css">
    <!--LINKS SECTION-->
</head>
<body>
    <!--REGISTRATION STARTS HERE-->
    <section id="about-wrapper">
        <div class="mission-container container">
            <div class="row">
                <div class="col-lg-4 mr-space">
                    <div class="mission-hr-line">
                        <h3>Registration Form</h3>
                    </div>
                    <div class="about-nut">
                        <div class="about-list">
                          <div class="grid-gallery">
                            <br>
                            <br>
                            <div class="gallery-img-a"><img src="register.gif" alt=""></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                  <form method="post" action="registeration.php">
                    <br>
                    <fieldset>
                      <div class="form-row">
                        <div class="col">
                          <label for="exampleFormControlInput1">First Name</label>
                          <input type="text" class="form-control" placeholder="First Name" name="rfirst_name">
                        </div>
                        <div class="col">
                          <label for="exampleFormControlInput1">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" name="rlast_name">
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="remail">
                      </div>
                      <br>
                      <div class="form-row">
                        <label for="exampleFormControlInput1">Phone No</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="9000800010" name="rphone">
                      </div>
                      <br>
                      <details>
                        <summary>Note</summary>
                        <p>If you are subsrcibing for only one parent then only fill parent 1 section. If applying for both, fill both parent section.</p>
                      </details>    
                      <br>
                      <div class="form-row">
                        <div class="col">
                          <label for="exampleFormControlInput1">Parent 1 Name</label>
                          <input type="text" class="form-control" placeholder="First Parent Name" name="rp1name">
                        </div>
                        <div class="col">
                          <label for="exampleFormControlInput1">Parent 2 Name</label>
                          <input type="text" class="form-control" placeholder="Second Parent Name" name="rp2name">
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="col">
                          <label for="inputState">Parent 1 Gender</label>
                          <select id="inputState" class="form-control" name="rp1g">
                            <option selected>Select..</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Other</option>
                          </select>
                        </div>
                        <div class="col">
                          <label for="inputState">Parent 2 Gender</label>
                          <select id="inputState" class="form-control" name="rp2g">
                            <option selected>Select..</option>
                            <option>Female</option>
                            <option>Male</option>
                            <option>Other</option>
                          </select>
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="col">
                          <label for="exampleFormControlInput1">Parent 1 Date of Birth</label>
                          <input type="date" class="form-control" name="rp1dob">
                        </div>
                        <div class="col">
                          <label for="exampleFormControlInput1">Parent 2 Date of Birth</label>
                          <input type="date" class="form-control" name="rp2dob">
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="col">
                          <label for="exampleFormControlInput1">Parent 1 Pincode</label>
                          <input type="text" class="form-control" placeholder="401501" name="rp1pin">
                        </div>
                        <div class="col">
                          <label for="exampleFormControlInput1">Parent 2 Pincode</label>
                          <input type="text" class="form-control" placeholder="401501" name="rp2pin">
                        </div>
                      </div>
                      <br>
                      <div class="form-row">
                        <div class="col">
                          <label for="exampleFormControlTextarea1">Parent 1 Address</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rp1add"></textarea>
                        </div>
                        <div class="col">
                          <label for="exampleFormControlTextarea1">Parent 2 Address</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="rp2add"></textarea>
                        </div>
                      </div>
                      <br>
                      <button type="submit" class="buttons" value="submit">Submit & Proceed for Payment</button>
                    </fieldset>
                  </form>
                </div>
            </div>
        </div>
    </section>
    <!--REGISTERATION ENDS HERE-->
</body>
</html>