<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Autenticate App</title>

        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
        <script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="dist/css/style.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.5.0/js/md5.min.js"></script>

    </head>

    <style>
        .card {
            background-color:#242830;
            border: none;
            border-radius: 12px;
            padding: 20px;
        }

        .card2 {
            background-color: #48494a;
            border: none;
            border-radius: 12px;
            padding: 20px;
        }


        @media only screen and (min-width: 400px) {
            .hero-copy{
                padding-right:10px;
                min-width:552px;
                width:552px;
            }
        }

        .lds-dual-ring.hidden { 
            display: none;
        }
        .lds-dual-ring {
            display: inline-block;
            width: 80px;
            height: 80px;
        }
        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 64px;
            height: 64px;
            margin: 5% auto;
            border-radius: 50%;
            border: 6px solid #fff;
            border-color: #fff transparent #fff transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0,.8);
            z-index: 999;
            opacity: 1;
            transition: all 0.5s;
        }
        
    </style>
    <body class="is-boxed has-animations">
        <div id="loader" class="lds-dual-ring hidden overlay"></div>
        <div class="body-wrap">
            <header class="site-header">
                <div class="container">
                    <div class="site-header-inner">
                        <div class="brand header-brand">
                            <h1 class="m-0">
                                <a href="#">
                                    <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <section class="hero">
                    <div class="container">
                        <div class="hero-inner">
                            <div class="hero-copy card">
                                <h1 class="hero-title mt-0">Auth And Fetch Page</h1>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" style="font-size: 15px;" for="nik">NIK:</label>
                                            <div class="col-sm-10">          
                                                <input type="number"onkeypress="return event.charCode>=48 && event.charCode<=57" class="form-control" id="nik" placeholder="Enter NIK" name="nik" pattern="[0-9]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" style="font-size: 15px;" for="role">Role:</label>
                                            <div class="col-sm-10">          
                                                <!-- <input type="text" class="form-control" id="role" placeholder="Enter Role" name="role"> -->
                                                <select class="form-control" id="role" name="role" placeholder="Enter Role">
                                                    <option value="" disabled selected>Enter Role</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" style="font-size: 15px;" for="pwd">Password:</label>
                                            <div class="col-sm-10">          
                                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" id="submit" class="btn btn-primary" style="float:right;margin-right:30px;margin-top:10px">Submit</button>
                                </div>
                            </div>
                            
                            <div class="hero-copy card2" id="result" style="display:none;z-index:1;position:relative;margin-left: 10%;">
                                
                            </div>

                            <div class="hero-figure anime-element">
                                <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                    <rect width="528" height="396" style="fill:transparent;" />
                                </svg>
                                <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                                <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                                <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                                <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                                <div class="hero-figure-box hero-figure-box-05"></div>
                                <div class="hero-figure-box hero-figure-box-06"></div>
                                <div class="hero-figure-box hero-figure-box-07"></div>
                                <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                                <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                                <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </main>

            <footer class="site-footer">
                <div class="container">
                    <div class="site-footer-inner">

                        <div class="brand footer-brand">
                            <a href="#">
                                <img class="header-logo-image" src="dist/images/logo.svg" alt="Logo">
                            </a>
                        </div>

                        <ul class="footer-links list-reset">
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">FAQ's</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>

                        <ul class="footer-social-links list-reset">
                            <li>
                                <a href="#">
                                    <span class="screen-reader-text">Facebook</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="screen-reader-text">Twitter</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="screen-reader-text">Google</span>
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#0270D7"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="footer-copyright">&copy; 2019 Solid, all rights reserved</div> -->

                    </div>
                </div>
            </footer>
        </div>
    </body>

    <script src="dist/js/main.min.js"></script>
    <script>


    </script>
</html>
