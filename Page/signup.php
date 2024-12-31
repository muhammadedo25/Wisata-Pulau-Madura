<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body style="background-color: #fdd31d;">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                    <img src="../images/signup.jpg" alt="img2.jpg" class="bg_cover img-fluid" style="height: 100%;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center" style="margin-top:5%">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="../system/proses_daftar.php" method="POST" style="margin-top:10%">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name"
                                        placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <select class="form-select"  id="jenis_kelamin" name="jenis_kelamin">Jenis Kelamin
                                        <option value='laki-laki'>Laki-Laki</option>
                                        <option value='perempuan'>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="Hp"
                                        placeholder="Nomor Telepon" name="hp">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="Password" placeholder="Password" name="password">
                                        <input type="checkbox"  onclick="myFunction()">Show Password
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block" style="margin-top:10%" >Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    
<script>
        function myFunction() {
        var x = document.getElementById("Password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</body>

</html>