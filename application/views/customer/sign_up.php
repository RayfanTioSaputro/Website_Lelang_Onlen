<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/sign.css' ?>">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Sign In</title>
</head>
<body>
    <div class="loading-wrapper">
        <div class="loading-img">
            <img src="<?php echo base_url().'assets/images/Dual Ring-1s-225px.gif' ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img class="background" src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" alt="">
        </div>
        <div class="col-6">
            <form action="" class="form">
                <h1 class="title2 text-center">Sign Up</h1>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Fullname" style="width: 400px; margin-bottom: 40px;">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" style="width: 400px; margin-bottom: 40px;">
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Telephone Number" pattern="[0-9]{3} [0-9]{3} [0-9]{4}" maxlength="12" style="width: 400px; margin-bottom: 40px;" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="width: 400px;">
                    <input type="checkbox" id="pass">
                    <label for="pass" class="show-pass2">
                        <i class="fa fa-eye" id="togglePassword"></i>
                    </label>
                </div>
                <div class="text-center">
                    <a href="home"><button type="button" class="btn1 mt-5">Sign Up</button></a>
                </div>
                <div class="opsi2 text-center">
                    <span class="txt1">
                        Already have an account?
                    </span>
                    <a class="txt2" href="sign_in">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/sign.js' ?>"></script>
</body>
</html>