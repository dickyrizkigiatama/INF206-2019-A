<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>MAsiN</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style_Signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <noscript>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/noscript.css" /></noscript>

</head>

<body class="is-preload text-center">
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="symbol"><img src="images/1.png" alt="" /></span><span class="title">MAsiN</span>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li><a href="">Home</a></li>

            </ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <div class="inner text-center">
                <section>
                    <h2>MASUK</h2>
                    <br><br>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form method="POST" action="<?= base_url('login'); ?>">
                                <div class="fields text-center">
                                    <div class="field">
                                        <p>Username</p>
                                        <input type="text" name="username" id="name" placeholder=" Masukkan Username  ">
                                    </div>
                                    <div class="field text-center">
                                    </div>
                                    <div class="field">
                                    <p>Password</p>
                                        <input type="password" name="password" id="password" placeholder=" Masukkan Password ">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-light">
                                    MASUK
                                </button>
                            </form>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-light"><a href="<?= base_url('login/daftar'); ?>">BELUM PUNYA AKUN ? BUAT DISINI</a></button>
                </section>
            </div>
        </div>


    </div>


    <!-- Scripts -->
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/browser.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/breakpoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/util.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>