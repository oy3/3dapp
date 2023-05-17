<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="./assets/fontawesome/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- x3dom -->
    <link rel="stylesheet" href="./css/x3dom.css" />
    <script src="./js/x3dom.js"></script>

    <!-- Fancybox -->
    <link rel="stylesheet" href="./assets/fancybox/fancybox.css" />

</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="header">
            <div class="logo">
                <a class="navbar-brand" href="javascript:swapPage('home-page')">
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

    <main id="body" role="main" class="flex-shrink-0">
        <!-- Home page -->
        <div id="home-page" class="row mx-0">
            <div class="col px-0">
                <div class="container-fluid mt-3">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            
                        <div id="home_banner">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/images/site_images/coke_banner.jpeg" class="">
                                    <div class="carousel-caption d-none d-md-block">
                                    <h2 id="title_home"></h2>
                                    <h4 id="subTitle_home"></h4>
                                    <p id="description_home"></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/site_images/sprite_banner.png" >
                                    <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/images/site_images/pepper_banner.jpeg">
                                    <div class="carousel-caption d-none d-md-block">
                                    <!-- <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                                    </div>
                                </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>


                        
                            <!-- <div id="main_3d_image">
                                <div class="h-100 d-flex justify-content-end align-items-end">
                                    <div id="main_text" class="col-xs-12 col-sm-4">
                                        <h2 id="title_home"></h2>
                                        <h3 id="subTitle_home"></h3>
                                        <p id="description_home" class="display-1"></p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-sm-4 mb-4">
                            <div class="card bg-light border-0 h-100 shadow-sm">
                                <div class="card m-2">
                                    <img id="coke-banner" src="" class="card-img-top p-1 img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 id="title_left" class="card-title"></h5>
                                    <h6 id="subTitle_left"></h6>
                                    <p id="description_left" class="card-text"></p>
                                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"
                                        class="btn btn-primary moreBtn"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 ol mb-4">
                            <div class="card bg-light border-0 h-100 shadow-sm">
                                <div class="card m-2">
                                    <img id="sprite-banner" src="" class="card-img-top p-1 img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 id="title_centre" class="card-title"></h5>
                                    <h6 id="subTitle_centre"></h6>
                                    <p id="description_centre" class="card-text"></p>
                                    <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite"
                                        class="btn btn-primary moreBtn"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mb-4">
                            <div class="card bg-light border-0 h-100 shadow-sm">
                                <div class="card m-2">
                                    <img id="pepper-banner" src="" class="card-img-top p-1 img-fluid" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 id="title_right" class="card-title"></h5>
                                    <h6 id="subTitle_right"></h6>
                                    <p id="description_right" class="card-text"></p>
                                    <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper"
                                        class="btn btn-primary moreBtn"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About page -->
        <div id="about-page" class="row mx-0 h-100" style="display: none;">
            <div class="col px-5 text-center mt-5">
               <h2 id="about_title"></h2>
               <p id="about_description"></p>
            </div>
        </div>
        <!-- Model page -->
        <div id="models-page" class="row mx-0" style="display: none;">
            <div class="col px-0">
                <div class="row mx-0 my-5">
                    <div class="col-md-7 mb-md-0 mb-3">
                        <div class="card h-100 text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="coke-tab" data-toggle="tab"
                                            data-target="#coke" type="button" role="tab" aria-controls="coke"
                                            aria-selected="true" onclick="swap('coke')">Coke</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="sprite-tab" data-toggle="tab" data-target="#sprite"
                                            type="button" role="tab" aria-controls="sprite" aria-selected="false"
                                            onclick="swap('sprite')">Sprite</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pepper-tab" data-toggle="tab" data-target="#pepper"
                                            type="button" role="tab" aria-controls="pepper" aria-selected="false"
                                            onclick="swap('pepper')">Pepper</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content text-left" id="myTabContent">
                                    <div class="tab-pane fade show active coke" id="coke" role="tabpanel"
                                        aria-labelledby="coke-tab">
                                        <h5 id="model_title_coke" class="card-title"></h5>
                                        <div class="model3D mb-3">
                                            <x3d id="cokeX3D">
                                                <scene>
                                                    <inline nameSpacrName="model" onclick="animateModel();"
                                                        mapDEFToID="true" url=""></inline>
                                                </scene>
                                            </x3d>
                                        </div>
                                        <p id="model_method_coke" class="card-text"></p>


                                    </div>

                                    <div class="sprite tab-pane fade" id="sprite" role="tabpanel"
                                        aria-labelledby="sprite-tab">
                                        <h5 id="model_title_sprite" class="card-title"></h5>
                                        <div class="model3D mb-3">
                                            <x3d id="spriteX3D">
                                                <scene>
                                                    <inline nameSpacrName="model" onclick="animateModel();"
                                                        mapDEFToID="true" url=""></inline>
                                                </scene>
                                            </x3d>
                                        </div>

                                        <p id="model_method_sprite" class="card-text"></p>
                                    </div>

                                    <div class="pepper tab-pane fade" id="pepper" role="tabpanel"
                                        aria-labelledby="pepper-tab">
                                        <h5 id="model_title_pepper" class="card-title"></h5>

                                        <div class="model3D mb-3">
                                            <x3d id="pepperX3D">
                                                <scene>
                                                    <inline nameSpacrName="model" onclick="animateModel();"
                                                        mapDEFToID="true" url=""></inline>
                                                </scene>
                                            </x3d>
                                        </div>
                                        <p id="model_method_pepper" class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card h-100">
                            <h5 class="card-header">Gallery</h5>
                            <div class="card-body">
                                <h5 id="gallery-title" class="card-title"></h5>

                                <div class="gallery" id="gallery_imgs"></div>

                                <p id="gallery-desc" class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-0 mb-5">
                    <div class="col-md-4 mb-md-0 mb-3">
                        <div class="card h-100">
                            <h5 class="card-header">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Cameras
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Front</a>
                                        <a class="dropdown-item" href="#">Back</a>
                                        <a class="dropdown-item" href="#">Left</a>
                                        <a class="dropdown-item" href="#">Right</a>
                                        <a class="dropdown-item" href="#">Top</a>
                                        <a class="dropdown-item" href="#">Bottom</a>
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body">
                                <h5 id="camera-title" class="card-title"></h5>
                                <div class="mb-3">
                                    <button class="btn btn-success btn-sm" onclick="cameraFront()">Front</button>
                                    <button class="btn btn-primary btn-sm" onclick="cameraBack()">Back</button>
                                    <button class="btn btn-dark btn-sm">Left</button>
                                    <button class="btn btn-dark btn-sm">Right</button>
                                    <button class="btn btn-secondary btn-sm">Top</button>
                                    <button class="btn btn-secondary btn-sm">Bottom</button>
                                    <button class="btn btn-outline-secondary btn-sm">Off</button>
                                </div>
                                <p id="camera-desc" class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <div class="card h-100">
                            <h5 class="card-header">
                                <button class="btn btn-secondary">Animation</button>
                            </h5>
                            <div class="card-body">
                                <h5 id="anim-title" class="card-title"></h5>
                                <div class="mb-3">
                                    <button class="btn btn-dark btn-sm" onclick="spin();">RotX</button>
                                    <button class="btn btn-dark btn-sm">RotY</button>
                                    <button class="btn btn-dark btn-sm">RotZ</button>
                                    <button class="btn btn-outline-secondary btn-sm"
                                        onclick="stopRotation();">Stop</button>
                                </div>
                                <p id="anim-desc" class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <h5 class="card-header d-flex">
                                <div class="dropdown mr-2">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Render
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Polygon</a>
                                        <a class="dropdown-item" href="#">Wireframe</a>
                                        <a class="dropdown-item" href="#">Vertex</a>
                                    </div>
                                </div>

                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Lights
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Default</a>
                                        <a class="dropdown-item" href="#">Onmi On/Off</a>
                                        <a class="dropdown-item" href="#">Target On/Off</a>
                                        <a class="dropdown-item" href="#">Headlight On/Off</a>
                                    </div>
                                </div>
                            </h5>
                            <div class="card-body">
                                <h5 id="light-title" class="card-title"></h5>
                                <div class="mb-3">
                                    <button class="btn btn-dark btn-sm">Poly</button>
                                    <button class="btn btn-dark btn-sm">Wire</button>
                                    <button class="btn btn-dark btn-sm">Headlight</button>
                                    <button class="btn btn-outline-secondary btn-sm">Default</button>
                                </div>
                                <p id="light-desc" class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mx-0 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent2">

                                    <div class="tab-pane fade coke show active" id="coke-desc" role="tabpanel"
                                        aria-labelledby="coke-tab">

                                        <h4 id="title_coke" class="card-title"></h4>
                                        <p class="card-text">
                                        <h5 id="subTitle_coke"></h5>
                                        <p id="description_coke"></p>
                                        </p>
                                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola"
                                            class="btn btn-primary">Visit website</a>

                                    </div>

                                    <div class="tab-pane fade sprite" id="sprite-desc" role="tabpanel"
                                        aria-labelledby="sprite-tab">

                                        <h4 class="card-title">Sprite — Fanta Klare Zitrone</h4>
                                        <p class="card-text">
                                        <h5>First introduced in 1961</h5>
                                        Crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and
                                        lime
                                        flavoured
                                        soft drink and is sold in more than 190 different countries. Sprite Zero, part
                                        of Coca
                                        Cola's no sugar Zero range, offers the delicious lemon lime taste of Sprite
                                        without the
                                        sugar or calories.</p>
                                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite"
                                            class="btn btn-primary">Visit
                                            website</a>

                                    </div>

                                    <div class="tab-pane fade pepper" id="pepper-desc" role="tabpanel"
                                        aria-labelledby="pepper-tab">

                                        <h4 class="card-title">Dr Pepper — Liquid Sunshine</h4>
                                        <p class="card-text">
                                        <h5>23 fruit flavours</h5>
                                        Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for
                                        well over a
                                        century and it's still the same, with that distinctive flavour you just can't
                                        quite put
                                        your
                                        tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave
                                        a sample
                                        of
                                        the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison
                                        instantly
                                        agreed
                                        to stock the drink. The distinctive, bold taste of Dr Pepper has been popular
                                        ever
                                        since.
                                        </p>
                                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper"
                                            class="btn btn-primary">Visit website</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer id="footer" class="text-muted bg-light footer navbar-fixed-bottom mt-auto py-3">
        <nav class="navbar navbar-expand-sm footer">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <span>© Mobile Web 3D Applications</span>
                </div>

                <div class="navbar-text float-right social">
                    <a href="#">
                        <i class="fab fa-facebook-square fa-3x text-primary"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter-square fa-3x text-info"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-google-plus-square fa-3x text-danger"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-github-square fa-3x text-secondary"></i>
                    </a>
                </div>

            </div>
        </nav>
    </footer>

    <a href="javascript:changeLook()"
        class="text-white text-decoration-none d-flex justify-content-center align-items-center float"
        style="bottom: 100px;">
        <i class="fa fa-palette fa-lg"></i>
    </a>
    <a href="javascript:changeBack()"
        class="text-white text-decoration-none d-flex justify-content-center align-items-center float bg-secondary">
        <i class="fa fa-ban fa-lg"></i>
    </a>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Contact details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Temitope Oyeyinka, BN1 9BJ
                    <br>Email: to277@sussex.ac.uk
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="mailto:to277@sussex.ac.uk" method="post" enctype="text/plain">
                        <input type="submit" value="Contact Email" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/gallery_generator.js"></script>
    <script src="./js/getJsonData.js"></script>
    <script src="./js/modelInteractions.js"></script>
    <script src="./js/swap_restyle.js"></script>
    <script src="./assets/fancybox/fancybox.js"></script>
    <script src="./js/func.js"></script>

    <script>
        // get the tab links
        var cokeTab = document.getElementById('coke-tab');
        var spriteTab = document.getElementById('sprite-tab');
        var pepperTab = document.getElementById('pepper-tab');

        // get the target divs
        var cokeDesc = document.getElementById('coke-desc');
        var spriteDesc = document.getElementById('sprite-desc');
        var pepperDesc = document.getElementById('pepper-desc');

        // add event listeners to the tab links
        cokeTab.addEventListener('shown.bs.tab', function (event) {
            // hide the other divs
            spriteDesc.style.display = 'none';
            pepperDesc.style.display = 'none';
            // show the corresponding div
            cokeDesc.style.display = 'block';
        });

        spriteTab.addEventListener('shown.bs.tab', function (event) {
            // hide the other divs
            cokeDesc.style.display = 'none';
            pepperDesc.style.display = 'none';
            // show the corresponding div
            spriteDesc.style.display = 'block';
        });

        pepperTab.addEventListener('shown.bs.tab', function (event) {
            // hide the other divs
            cokeDesc.style.display = 'none';
            spriteDesc.style.display = 'none';
            // show the corresponding div
            pepperDesc.style.display = 'block';
        });
    </script>
</body>

</html>