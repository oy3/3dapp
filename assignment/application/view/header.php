<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <link rel="stylesheet" href="../assignment/css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" type='text/css' href="./css/style.css">
    <link href="./assets/fontawesome/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- x3dom -->
    <link rel="stylesheet" href="./css/x3dom.css" crossorigin="anonymous"/>

    <!-- Fancybox -->
    <link rel="stylesheet" href="./assets/fancybox/fancybox.css" />

</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header">
            <div class="logo">
                <a class="navbar-brand" href="./index.php">
                    <h1>1</h1>
                    <h1>oca</h1>
                    <h2>Cola</h2>
                    <h3>Journey <span>&#8482;</span></h3>
                    <p>Refreshing the world, one story at a time</p>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a id="home_link" class="nav-link" href="javascript:swapPage('home-page')"></a>
                    </li>
                    <li class="nav-item">
                        <a id="about_link" class="nav-link" href="javascript:swapPage('about-page')"></a>
                    </li>
                    <li class="nav-item">
                        <a id="models_link" class="nav-link" href="javascript:swapPage('models-page')"></a>
                    </li>
                    <li class="nav-item">
                        <a id="contact_link" class="nav-link" href="#" data-toggle="modal"
                            data-target="#contactModal"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>