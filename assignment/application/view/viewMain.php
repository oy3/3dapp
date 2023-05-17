<?php include "header.php"?>
    <main id="body" role="main" class="flex-shrink-0">
            <!-- Home page -->
            <div id="home-page" class="row mx-0">
                <div class="col px-0">
                    <div class="container-fluid">

                        <div class="row px-0">
                            <div class="col-xs-12 col-sm-12 px-0">
                                
                            <div id="home_banner" class="">
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
                                        <h2 id="title_home" class="font-weight-bolder"></h2>
                                        <h4 id="subTitle_home"></h4>
                                        <p id="description_home"></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="opacing">
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
            <div id="about-page" class="row mx-0 vh-100" style="display: none;">
                <div class="col px-5 mt-5" style="text-shadow: 2px 2px 1px #fff;">
                <h2 id="about_title" class="font-weight-bolder text-center"></h2>
                <p id="about_description" class="mt-3"></p>
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
                                                aria-selected="true" onclick="swap('coke');">Coke</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="sprite-tab" data-toggle="tab" data-target="#sprite"
                                                type="button" role="tab" aria-controls="sprite" aria-selected="false"
                                                onclick="swap('sprite');">Sprite</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pepper-tab" data-toggle="tab" data-target="#pepper"
                                                type="button" role="tab" aria-controls="pepper" aria-selected="false"
                                                onclick="swap('pepper');">Pepper</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content text-left" id="myTabContent">
                                        <div class="coke tab-pane fade show active" id="coke" role="tabpanel"
                                            aria-labelledby="coke-tab">
                                            <h5 id="model_title_coke" class="card-title"></h5>
                                            <div class="model3D mb-3">
                                                <x3d id="cokeX3D">
                                                    <scene>
                                                        <inline nameSpaceName="coke" mapDEFToID="true" onclick="animateModel();" url=""></inline>
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
                                                        <inline nameSpaceName="sprite" mapDEFToID="true" onclick="animateModel();"
                                                            url=""></inline>
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
                                                        <inline nameSpaceName="pepper" mapDEFToID="true" onclick="animateModel();"
                                                        url=""></inline>
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
                                            <a class="dropdown-item" href="javascript:cameraFront();">Front</a>
                                            <a class="dropdown-item" href="javascript:cameraBack();">Back</a>
                                            <a class="dropdown-item" href="javascript:cameraLeft();">Left</a>
                                            <a class="dropdown-item" href="javascript:cameraRight();">Right</a>
                                            <a class="dropdown-item" href="javascript:cameraTop();">Top</a>
                                            <a class="dropdown-item" href="javascript:cameraBottom();">Bottom</a>
                                        </div>
                                    </div>
                                </h5>
                                <div class="card-body">
                                    <h5 id="camera-title" class="card-title"></h5>
                                    <div class="mb-3">
                                        <button class="btn btn-success btn-sm" onclick="cameraFront();">Default</button>
                                        <button class="btn btn-primary btn-sm" onclick="cameraBack();">Back</button>
                                        <button class="btn btn-dark btn-sm" onclick="cameraTop();">Top</button>
                                        <button class="btn btn-dark btn-sm" onclick="cameraBottom();">Bottom</button>
                                        <button class="btn btn-outline-secondary btn-sm" onclick="">Off</button>
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
                                            <a class="dropdown-item" href="javascript:wireframe();">Wireframe</a>
                                            <a class="dropdown-item" href="">Vertex</a>
                                        </div>
                                    </div>

                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-expanded="false">
                                            Lights
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:resetDefault();">Default</a>
                                            <a class="dropdown-item" href="javascript:omniLights();">Onmi On/Off</a>
                                            <a class="dropdown-item" href="#">Target On/Off</a>
                                            <a class="dropdown-item" href="javascript:headlight();">Headlight On/Off</a>
                                        </div>
                                    </div>
                                </h5>
                                <div class="card-body">
                                    <h5 id="light-title" class="card-title"></h5>
                                    <div class="mb-3">
                                        <!-- <button class="btn btn-dark btn-sm">Poly</button> -->
                                        <button class="btn btn-dark btn-sm" onclick="wireframe();">Wire</button>
                                        <button class="btn btn-dark btn-sm" onclick="headlight();">Headlight</button>
                                        <button class="btn btn-dark btn-sm" onclick="omniLights();">Onmi</button>
                                        <button class="btn btn-outline-secondary btn-sm" onclick="resetDefault();">Default</button>
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
<?php include "footer.php"?>