<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account center </title>
    <link rel="stylesheet" href="css/BootStrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/Reg-Profile.css">
</head>

<body>
    <div class="ccontainer light-style flex-grow-1 container-p-y">
        <!-- Server-side include for header.php -->
        <div class = "margin-up">
            <?php include('header.php'); ?>
        </div>
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>

        
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <div class="media-body ml-4">
                                    <label for="input-file" class="">your image</label>
                                    <img src="img/profile.png" alt="" class="d-block ui-w-80" id="profile-pic">
                                    <br>
                                    <br>
                                    <label for="input-file" class="hover-3">Upload image</label>
                                    <br>
                                    <input type="file" class=".profile-input" accept="image/jpeg, image/png , image/jpg" id="input-file">
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                  <?php
                                  include ("config.php");
                                  ?>
                                <div class="form-group">
                                    <label class="form-label">User name</label>
                                    <input disabled type="text" class="form-control input mb-1" id="userName" value="<?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">First name</label>
                                    <input disabled type="text" class="form-control input" id="fristName" value="<?php echo $_SESSION['firstname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last name</label>
                                    <input disabled type="text" class="form-control input" id="lastName" value="<?php echo  $_SESSION['lastname'] ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input disabled type="text" class="form-control input mb-1" id="Email" value="<?php echo $_SESSION['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" id="password" class="form-control profile-input">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" id="new-password" class="form-control profile-input">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" id="repeat-password" class="form-control profile-input">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Result</label>
                                    <textarea id="Result" class="form-control input" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Examination Date</label>
                                    <input type="text" id="examinationDate" class="form-control profile-input" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="button" class="profile-button type2">Save changes</button>&nbsp;
                    <button type="button" class="profile-button type2">Cancel</button>
                </div>
            </div>
        </div>


        <a onclick="back()" class="exit-icon">
            <img class="exit-icon" src="images/power-off.png" alt="">
        </a>
    </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="js/profile.js"></script>
</body>

</html>