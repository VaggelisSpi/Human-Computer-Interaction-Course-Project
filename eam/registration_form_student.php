<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <link href="./vendor/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <link href="./vendor/select2-4.0.6-rc.1/dist/css/select2.css" rel="stylesheet">
        <script src="./vendor/select2-4.0.6-rc.1/dist/js/select2.js"></script>

        <script src="./vendor/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <link href="./vendor/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.standalone.css" rel="stylesheet">

        <script src="./vendor/daterangepicker/moment.min.js"></script>
        <script src="./vendor/daterangepicker/daterangepicker.js"></script>
        <link href="./vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

        <script src="myDatePickerReg.js"></script>
        <script src="main.js"></script>
        <title> Registration </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li>Εγγραφή Φοιτητή</li>
                </ul>
            </div>

            <!-- If user is not logged in  -->
            <?php include 'login_options.php';?>

        </div>

        <?php include 'signup_student.php';?>

        <div class="my-main-content-registration">
            <p> Η συμπλήρωση των πεδίων με <span class="my-req-star">*</span> είναι υποχρεωτική.</p>
            <p class="success-registration"> <?php echo $succ;?> </p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="my-registration-from" autocomplete="false">
                <div class="my-reg-account-info">
                    <h> Στοιχεία Λογαριασμού </h>
                      <div class="form-group row">
                        <label for="myEmail" class="col-5 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i>   <span class="my-req-star">*</span>Email:</label>
                        <div class="col-6">
                          <input type="text" name="email" onfocusout="valRegEmail()" value="<?php echo $email;?>" id="myEmail-reg" class="form-control" >
                        </div>
                      </div>
                      <div class="row error-msg">
                          <div class="col-5">
                          </div>
                          <div class="col-6 error-email-reg">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="myPassword" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Κωδικός:</label>
                        <div class="col-6">
                            <div class="input-group" id="show_hide_password_first">
                              <input class="form-control" name="password" onfocusout="valPassword()" value="<?php echo $pass;?>" type="password" id="myPassword-reg">
                              <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <span class="my-question-popover" title="" data-toggle="popover" data-trigger="hover"
                            data-content="Εισάγετε τον κωδικό σας. Πρέπει να είναι υποχρεωτικά τουλάχιστον 8 χαρακτήρες
                            και μπορεί να αποτελείται απο κεφαλαίους και μικρούς λατινικούς χαρακτήρες, αριθμούς και
                            σύμβολα">
                                <i class="fa fa-question-circle" aria-hidden="true"></i></span>
                        </div>
                      </div>
                      <div class="row error-msg">
                          <div class="col-5">
                          </div>
                          <div class="col-6 error-pass-reg" id="myPasswordStrength">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="myPasswordConfirm" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Επιβεβαίωση:</label>
                        <div class="col-6">
                            <div class="input-group" id="show_hide_password_confirm">
                              <input class="form-control" name="passwordConf" onfocusout="valPassConf()" value="<?php echo $passConf ?>"type="password" id="myPasswordConfirm-reg">
                              <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          <!-- <input type="password" class="form-control" id="myPasswordConfirm" placeholder="Password"> -->
                        </div>
                        <div class="col-1">
                            <span class="my-question-popover" title="" data-toggle="popover" data-trigger="hover"
                            data-content="Εισάγετε τον ίδιο κωδικό με από πάνω για επιβεβαίωση">
                                <i class="fa fa-question-circle" aria-hidden="true"></i></span>
                        </div>
                      </div>
                      <div class="row error-msg">
                          <div class="col-5">
                          </div>
                          <div class="col-6 error-conf-pass-reg">
                          </div>
                      </div>
                </div>
                <div class="my-reg-personal-info">
                    <h> Προσωπικά Στοιχεία </h>
                    <div class="form-group row">
                      <label for="myFirstName" class="col-5 col-form-label"><span class="my-req-star">*</span>Όνομα:</label>
                      <div class="col-6">
                        <input type="text" name="firstName" onfocusout="valFirstName()" value="<?php echo $firstName ?>" class="form-control" id="myFirstName-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-first-name-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myLastName" class="col-5 col-form-label"><span class="my-req-star">*</span>Επώνυμο:</label>
                      <div class="col-6">
                        <input type="text" name="lastName" onfocusout="valLastName()" value="<?php echo $lastName ?>"class="form-control" id="myLastName-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-last-name-reg">
                        </div>
                    </div>
                    <div class="form-group row">

                      <label for="myBirthDate" class="col-5 col-form-label"><span class="my-req-star">*</span>Ημερομηνία Γέννησης:</label>
                      <div class="input-group date col-6 successRegField my-calendar" id="myBirthDate-reg">
                          <input type="text" class="form-control" onkeydown="return false" name="date" value="" disabled>
                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                      </div>

                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-date-reg">
                        </div>
                    </div>
                </div>
                <div class="my-university-info">
                    <h> Στοιχεία Σχολής </h>
                    <div class="form-group row">
                      <label for="myUniv" class="col-5 col-form-label"><span class="my-req-star">*</span>Σχολή:</label>
                      <div class="col-6">
                        <!-- <input type="text" name="university" onfocusout="valUniv()" value=""class="form-control" id="myUniv-reg"> -->

                        <select class="successRegField" name="university" id="myUniv-reg" onchange="myDepartmentOptionsDisplay(this.value)">
                            <option value="" selected disabled hidden>Επιλογή Πανεπιστημίου</option>
                            <?php include 'universityValues.php';?>
                        </select>

                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-univ-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myDepart" class="col-5 col-form-label"><span class="my-req-star">*</span>Τμήμα:</label>
                      <div class="col-6">
                        <!-- <input type="text" name="department" onfocusout="valDep()" value=""class="form-control" id="myDepart-reg"> -->
                        <select class="successRegField" name="department" id="myDepart-reg" disabled>
                            <option value="" selected disabled hidden>Επιλογή Τμήματος</option>
                        </select>
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-dep-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myAm" class="col-5 col-form-label"><span class="my-req-star">*</span>Αριθμός Μητρώου:</label>
                      <div class="col-6">
                        <input type="text" name="am" onfocusout="valAm()" value="<?php echo $am ?>"class="form-control" id="myAm-reg">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-am-reg">
                        </div>
                    </div>
                </div>
                <div class="my-reg-contact-info">
                    <h> Στοιχεία Επικοινωνίας </h>
                    <div class="form-group row">
                      <label for="myPhoneNumber" class="col-5 col-form-label"><i class="fa fa-phone" aria-hidden="true"></i> Τηλέφωνο Επικοινωνίας:</label>
                      <div class="col-6">
                        <input type="text" name="phone" onfocusout="valPhoneNumber()" value="<?php echo $phone ?>"class="form-control successRegField" id="myPhoneNumber-reg">
                      </div>
                      <div class="col-1">
                          <span class="my-question-popover" title="" data-toggle="popover" data-trigger="hover"
                          data-content="Εισάγετε τον αριθμό του κινητού η του σταθρού τηλεφώνου σας. Αποτελείται υποχρεωτικά από
                          10 ψηφία και ξεκινάει με 2 η 69">
                              <i class="fa fa-question-circle" aria-hidden="true"></i></span>
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-5">
                        </div>
                        <div class="col-6 error-phone-reg">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myAddress" class="col-2 col-form-label">Οδός:</label>
                      <div class="col-4">
                        <input type="text" name="address" onfocusout="valAddress()" value="<?php echo $address ?>"class="form-control successRegField" id="myAddress-reg">
                      </div>
                      <label for="myAddressNum" class="col-3 col-form-label">Αριθμός:</label>
                      <div class="col-2">
                        <input type="text" name="addressNum" onfocusout="valAddressNumber()" value="<?php echo $addressNum ?>" class="form-control successRegField" id="myAddressNum-reg">
                      </div>
                      <div class="col-1">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-2">
                        </div>
                        <div class="col-4 error-myAddress-reg">
                        </div>
                        <div class="col-3">
                        </div>
                        <div class="col-2 error-myAddressΝum-reg">
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="myDimos" class="col-2 col-form-label">Δήμος:</label>
                      <div class="col-4">
                        <input type="text" name="addressDimos" onfocusout="valMunicipality()" value="<?php echo $municipality ?>" class="form-control successRegField" id="myAddressDimos-reg">
                      </div>
                      <label for="myAddressTK" class="col-3 col-form-label">Ταχ. Κώδικας:</label>
                      <div class="col-2">
                        <input type="text" name="addressTK" onfocusout="valTK()" value="<?php echo $TK ?>" class="form-control successRegField" id="myAddressTK-reg">
                      </div>
                      <div class="col-1">
                      </div>
                    </div>
                    <div class="row error-msg">
                        <div class="col-2">
                        </div>
                        <div class="col-4 error-myAddressDimos-reg">
                        </div>
                        <div class="col-3">
                        </div>
                        <div class="col-2 error-myAddressTK-reg">
                        </div>
                        <div class="col-1">
                        </div>
                    </div>
                </div>
                <div class="my-registration-submit">
                    <div class="row">
                        <label><input type="checkbox" value="" id="reg-checkbox">  Έχω διαβάσει και αποδέχομαι τους <a href="./under_construction.php">όρους χρήσης</a> </label>
                    </div>
                    <div class="row">
                        <input type="submit" name="submit" class="btn btn-primary" value="Ολοκλήρωση Εγγραφής" disabled id="submit-reg-button">
                    </div>
                </div>
            </form>
        </div>

        <!-- <div class="my-registration-submit">
            <div class="checkbox">

            </div>
            <a href="./under_construction.php" class="btn btn-primary"> Ολοκλήρωση Εγγραφής </a>
        </div> -->


        <!-- Footer Start  -->
        <footer class="bg-dark footer">
            <p class="text-center text-white">Copyright &copy; Eudoxus Team 2018</p>
        </footer>
        <!-- Footer End  -->
    </body>
</html>
