     <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><i class="ion ion-ios-menu"></i></a>
            <a class="navbar-brand" href="dashboard.php">KRISHAN BAZAR
            </a>
            
<?php
$ctid=$_SESSION['agroctid'];
$ret=mysqli_query($con,"select FullName,Images from tblcustomer where ID='$ctid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];
$imgs=$row['Images'];
?>                        
                    <div class="float-left info">

                        <h2 class="font-weight-light mt-2 mb-1"><img style="width: 200px;" src="images/<?php echo $imgs; ?>"><?php echo $name; ?></h2>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="profile.php" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="change-password.php" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="logout.php" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Logout</a>
                    </div>
                </div>
            </div>
        
                </li>
            </ul>
        </nav>