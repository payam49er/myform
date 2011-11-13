<?php

echo 'hello, this is a test'
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Capucina, Join the fun</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" type="text/css" href="user_signup.css"/>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1 class="htitle">Capucina</h1>
            </div>
            <!-- end .header -->
            <div class="signup_content">
                <fieldset class="content_box"><legend
                        class="legend"><span>Sign up</span></legend>
                    <div class="fieldset">
                        <form action="<?php echo $editFormAction; ?>" name="register" id='register' method='POST'
                              accept-charset='UTF-8'>
                            <div class="row_name">
                                <div class="label">
                                    <label for="fname">First Name</label>
                                </div>
                                <div class="inputbox">
                                    <input style="width: 200px;height:
                                           25px;font-size: 17px" type="text" name="fname" id="fname"
                                           maxlength="25" size="25"/>
                                    <span>
                                        <?php
                                        if ($_post && isset($errors['first_name'])){
                                        echo $errors['fname'];
                                        }
                                        ?>
                                    </span>
                                    
                                </div>
                                <div class="label">
                                    <label for="lname">Last Name</label>
                                </div>
                                <div class="inputbox">
                                    <input style="width: 200px;height:
                                           25px;font-size: 17px" type="text" name="lname" id="lname"
                                           maxlength="30" size="30"/>
                                </div>
                            </div>
                            <div style="line-height: 30px" class="row_email">
                                <div class="label">
                                    <label for="email_address">Email Address</label>
                                </div>
                                <div class="inputbox">
                                    <input style="width: 400px;height:
                                           25px;font-size: 17px" type="text" name="email_address"
                                           id="email_address" maxlength="50" size="50"/>
                                </div>
                            </div>
                            <div class="row_password">
                                <div class="label">
                                    <label for="email_address">Password</label>
                                </div>
                                <div class="inputbox">
                                    <input style="width: 180px;height:
                                           25px;font-size: 17px" type="password" name="password" id="password"
                                           maxlength="15" size="15"/>
                                </div>
                                <div class="label">
                                    <label for="confirm_password">Confirm
                                        Password</label>
                                </div>
                                <div class="inputbox">
                                    <input style="width: 180px;height:
                                           25px;font-size: 17px" type="password" name="confirm_password"
                                           id="confirm_password" maxlength="15" size="15"/>
                                </div>
                            </div>
                            <div class="zipcode">
                                <div class="label">
                                    <label for="zipcode">Zip / Postal Code</label>
                                </div>
                                <div class="inputbox">
                                    <input style="width: 120px;height:
                                           25px;font-size: 17px" type="text" name="zipcode" id="zipcode"
                                           maxlength="10" size="10"/>
                                </div>
                            </div>
                            <!-- Terms of Service --> <div
                                class="field-agree-tos">
                                <label style="width: 50px;height:
                                       50px" for="agree_tos"> <input
                                        type="checkbox" id="agree_tos"
                                        name="agree_tos" value="yes"/>
                                    I have read and agree to the <a
                                        href="#">Terms
                                        of Service</a>. </label>
                                <!-- Controls --> <div class="controls">
                                    <input style="font-family:
                                           courier;font-size: 17px;height: 40px;width: 150px" id="submit"
                                           name="submit" type="submit"
                                           value="Create Profile"/>
                                </div>
                            </div>
                            <input type="hidden" name="MM_insert" value="register">
                        </form>
                    </div>
                </fieldset>
            </div>
            <!-- end .content -->
            <div class="footer">
                <div class="col1">
                    <ul>
                        <li><a href="#"><span>About</span></a></li>
                        <li><a href="#"><span>Team</span></a></li>
                        <li><a href="#"><span>Contact</span></a></li>
                        <li><a href="#"><span>Jobs</span></a></li>
                    </ul>
                </div>
                <div class="col2">
                    <ul>
                        <li><a href="#"><span>Brands</span></a></li>
                        <li><a href="#"><span>Boutiques</span></a></li>
                        <li><a href="#"><span>PR</span></a></li>
                        <li><a href="#"><span>Promoters</span></a></li>
                    </ul>
                </div>
                <div class="col3">
                    <ul>
                        <li><a href="#"><span>Legal</span></a></li>
                        <li><a href="#"><span>Privacy</span></a></li>
                        <li><a href="#"><span>Investment</span></a></li>
                        <li><a href="#"><span>Partnership</span></a></li>
                    </ul>
                    <a style="color: white;font-size:
                       10px;position:absolute;right:
                       20px;top: 1050px">Capucina Inc,All rights
                        reserved 2011</a>
                </div>
                <!-- end .footer --></div>
            <!-- end .container --></div>
    </body>
</html>
