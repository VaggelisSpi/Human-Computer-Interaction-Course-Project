<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap core JavaScript -->
        <script src="./vendor/jquery/jquery.min.js"></script>
        <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="main.js"></script>
        <title> Registration </title>
    </head>
    <body>

        <?php include 'header.php';?>

        <div class="below-nav-bar">
            <div class="my-breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="./index.php"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                    <li>Εγγραφή</li>
                </ul>
            </div>

            <!-- If user is not logged in  -->
            <?php include 'login_options.php';?>

        </div>

        <div class="my-main-content-registration">
            <p> Η συμπλήρωση των πεδίων με <span class="my-req-star">*</span> είναι υποχρεωτική.</p>
            <div class="my-reg-account-info">
                <h> Στοιχεία Λογαριασμού </h>
                <form>
                  <div class="form-group row">
                    <label for="myEmail" class="col-5 col-form-label"><i class="fa fa-envelope" aria-hidden="true"></i>   <span class="my-req-star">*</span>Email:</label>
                    <div class="col-6">
                      <input type="text" class="form-control" id="myEmail">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="myPassword" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Κωδικός:</label>
                    <div class="col-6">
                        <div class="input-group" id="show_hide_password_first">
                          <input class="form-control" type="password" id="myPassword">
                          <div class="input-group-addon">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="myPasswordConfirm" class="col-5 col-form-label"><i class="fa fa-lock" aria-hidden="true"></i>   <span class="my-req-star">*</span>Επιβεβαίωση:</label>
                    <div class="col-6">
                        <div class="input-group" id="show_hide_password_confirm">
                          <input class="form-control" type="password" id="myPasswordConfirm">
                          <div class="input-group-addon">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                          </div>
                        </div>
                      <!-- <input type="password" class="form-control" id="myPasswordConfirm" placeholder="Password"> -->
                    </div>
                  </div>
                </form>
            </div>
            <div class="my-reg-personal-info">
                <h> Προσωπικά Στοιχεία </h>
                <div class="form-group row">
                  <label for="myFirstName" class="col-5 col-form-label"><span class="my-req-star">*</span>Όνομα:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myFirstName">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myLastName" class="col-5 col-form-label"><span class="my-req-star">*</span>Επώνυμο:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myLastName">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myBirthDate" class="col-5 col-form-label"><span class="my-req-star">*</span>Ημερομηνία Γέννησης:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myBirthDate">
                  </div>
                </div>
            </div>
            <div class="my-reg-law-info">
                <h> Νομικά Στοιχεία </h>
                <div class="form-group row">
                  <label for="myIdNumber" class="col-5 col-form-label"><span class="my-req-star">*</span>Αριθμός Ταυτότητας:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myIdNumber">
                  </div>
                  <div class="col-1">
                      <span class="my-question-popover" title="" data-toggle="popover" data-trigger="hover"
                      data-content="Εισάγετε τον αριθμό που αναγράφεται στην μπροστινή μεριά της αστυνομικής ταυτότητας σας. Ξεκινάει υποχρεωτικά
                      με Α ακολουθούμενο από ένα γράμμα και αριθμούς ή μόνο αριθμούς. Απαραίτητα 10 χαρακτήρες.">
                          <i class="fa fa-question-circle" aria-hidden="true"></i></span>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myTaxNumber" class="col-5 col-form-label"><span class="my-req-star">*</span>ΑΦΜ:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myTaxNumber">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myAmkaNumber" class="col-5 col-form-label"><span class="my-req-star">*</span>ΑΜΚΑ:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myAmkaNumber">
                  </div>
                </div>
            </div>
            <div class="my-reg-contact-info">
                <h> Στοιχεία Επικοινωνίας </h>
                <div class="form-group row">
                  <label for="myPhoneNumber" class="col-5 col-form-label"><i class="fa fa-phone" aria-hidden="true"></i> Τηλέφωνο Επικοινωνίας:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myPhoneNumber">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="myAddress" class="col-5 col-form-label">Διεύθυνση Κατοικίας:</label>
                  <div class="col-6">
                    <input type="text" class="form-control" id="myAddress">
                  </div>
                </div>
            </div>
        </div>

        <div class="my-registration-submit">
            <div class="checkbox">
              <label><input type="checkbox" value="">  Έχω διαβάσει και αποδέχομαι τους <a href="./under_construction.php">όρους χρήσης</a> </label>
            </div>
            <a href="./under_construction.php" class="btn btn-primary"> Ολοκλήρωση Εγγραφής </a>
        </div>


        <!-- Footer Start  -->
        <footer class="bg-dark footer">
            <p class="text-center text-white">Copyright &copy; Eudoxus Team 2018</p>
        </footer>
        <!-- Footer End  -->
    </body>
</html>