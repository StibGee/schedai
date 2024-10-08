<!DOCTYPE html>
<html lang="en">
<?php
        require_once('../include/head.php');
    ?>

<body>

    <?php

        require_once('../include/admin-nav.php');
    ?>
<main>
<div class="container mb-1">
            <div class="row d-flex align-items-center">
                <div class="col-9">
                    <h3>
                        <button class="button" onclick="window.location.href='landing.php'">
                            <i class="fa-solid fa-circle-arrow-left"></i>
                        </button>
                        Authorize Users
                    </h3>
                </div>
                <div class="col-3 d-flex align-items-center justify-content-end">
                        <button class="button-modal " data-bs-toggle="modal" data-bs-target="#formModal"><img src="../img/icons/add-icon.png" alt=""></button>
                        </div>
            </div>

            <div class="colleges mt-4">

                <table class="mb-0 table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>College</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Contact No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-href="../SuperAdmin/department.php">
                            <td>College of Computing Studies</td>
                            <td>CCS</td>
                            <td>2023</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal Form -->
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="modal-header border-0">
                        <h4 class="modal-title ml-3" id="formModalLabel">Add Authorize User</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-5">
                        <form action="../processing/rootprocessing.php" method="POST">
                            <input type="text" value="add" name="action" hidden>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="collegeid">College</label>
                                    <select class="form-select" id="college" name="collegeid" required="">
                                        <option selected="" disabled="">Select College</option>
                                        <option>College of Computer Science</option>
                                        <option>College of Engineering</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="departmentid">Select Department</label>
                                    <select class="form-select" id="departmentid" name="departmentid" required="">
                                        <option selected="" disabled="">Select Department</option>
                                        <option>Computer Science</option>
                                        <option>Information Technology</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <label class="form-label" for="role">Select Role</label>
                                    <select class="form-select" id="role" name="role" required="">
                                        <option selected="" disabled="">Select Role</option>
                                        <option>Department Head</option>
                                        <option>College Secretary</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="contactno">Contact No.</label>
                                    <input type="text" class="form-control" id="contactno" name="contactno" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="gender">Gender</label>
                                    <select class="form-select" id="gender" name="gender" required="">
                                        <option selected="" disabled="">Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a Gender</div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <label class="form-label" for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label" for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname" required>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="mname">MI (Optional)</label>
                                    <input type="text" class="form-control" id="mname" name="mname">
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Username</label>
                                    <input type="email" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Done</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</main>
</body>
<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/superadmin/users.css">
    <script src="../js/facultyloading.js"></script>
    <?php
        require_once('../include/js.php')
    ?>
</html>
