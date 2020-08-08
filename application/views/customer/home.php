<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/home.css' ?>">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/Semantic-UI-CSS-master/components/image.css' ?>">
    <title>Home</title>
</head>
<body>
    <div class="loading-wrapper">
        <div class="loading-img">
            <img src="<?php echo base_url().'assets/images/Dual Ring-1s-225px.gif' ?>" alt="">
        </div>
    </div>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg sticky">
            <div class="container mt-2">
                <a class="navbar-brand" href="#"><img class="logo" src="<?php echo base_url().'assets/images/logowhiterev.png' ?>"></a>
                <div class="row collapse navbar-collapse" id="navbarNavDropdown">
                    <div class="col-11">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #ffffff; font-size: 16px; font-weight: 500; margin-right: 20px;">Home</a>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff; font-size: 16px; font-weight: 500; margin-right: 20px;">
                                   Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="max-width:300px">
                                    <a class="dropdown-item" href="#">House</a>
                                    <a class="dropdown-item" href="#">Car</a>
                                    <a class="dropdown-item" href="#">Motorcycle</a>
                                    <a class="dropdown-item" href="#">Others</a>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="terms_condition" style="color: #ffffff; font-size: 16px; font-weight: 500; margin-right: 20px;">Terms & Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-1">
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item dropdown">
                                <img class="ui mini avatar image dropdown-toggle" src="<?php echo base_url().'assets/images/avataraccount.png' ?>" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
                                <span>
                                    <i class="dropdown-toggle text-white"></i>
                                    <!-- <span class="nama mt-1 ml-3">Rayfan Tio Saputro</span> -->
                                </span>
                                
                                <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="profileDropdown" style="width: 200px;">
                                    <span class="dropdown-item-text" style="font-weight: 500;">RAYFAN TIO SAPUTRO</span>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="sign_in"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section id="banner">
        <div class="text-center" style="padding-top: 68px;">
            <input type="text" class="search-bar" id="search" placeholder="Search...">
            <span class="icon"><i class="fas fa-search"></i></span>
        </div>
        <div id="scroll-to-top" data-show="false">
            <i class="fas fa-arrow-up"></i>
        </div>
    </section>
    <section id="konten">
        <div class="container">
            <div>
                <!-- <div class="row">
                    <div class="col-3"></div>
                    <div class="col-9">
                        <h1 class="title3 mt-4">DAFTAR LELANG</h1>
                    </div>
                </div> -->
                <div class="row mt-5">
                    <div class="col-3">
                        <span class="badge" style="width: 100%; background: #e7eaec;">
                            <h6 class="float-left pt-2 pl-3" style="color: #233d4d;">FILTER</h6>
                            <!-- <button type="button" class="btndrop float-right mt-1 mr-3 pt-2 pl-2" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-caret-up mr-1 mb-1" id="menu-toggle" style="color: #233d4d;"></i>
                            </button> -->
                            <a href="#" class="btndrop float-right mt-2 mr-3" id="menu-toggle" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="false" aria-controls="collapseExample" ><i class="fas fa-caret-up" style="color: #233d4d;"></i></a>
                        </span>
                        <div class="collapse show mb-2" id="collapseCategory" style="margin-top: -7px;">
                            <div class="card card-body bg-light">
                            <div class="card-text pl-4 pb-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Laptop</label>
                                </div>
                                <div class="card-text pl-4 pb-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                    <label class="form-check-label" for="exampleCheck2">Handphone</label>
                                </div>
                                <div class="card-text pl-4 pb-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                    <label class="form-check-label" for="exampleCheck3">Mobil</label>
                                </div>
                                <div class="card-text pl-4 pb-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                    <label class="form-check-label" for="exampleCheck4">Motor</label>
                                </div>
                                <div class="card-text pl-4 pb-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                    <label class="form-check-label" for="exampleCheck4">Rumah</label>
                                </div>
                                <div>
                                    <hr>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" min="0" placeholder="Harga Minimum" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Rp.</span>
                                    </div>
                                    <input type="number" class="form-control" min="0" placeholder="Harga Maksimum" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <button type="button" class="btnfilter mt-3 mb-1"><i class="fas fa-filter mr-2" style="font-size: 12px;"></i>Apply</button>
                            </div>
                        </div>
                        <!-- <span class="badge mt-3" style="width: 100%; background: #e7eaec;">
                            <h6 class="float-left pt-2 pl-3" style="color: #233d4d;">PRICE RANGE</h6>
                            <button type="button" class="btndrop float-right mt-1 mr-3 pt-2 pl-2" data-toggle="collapse" data-target="#collapseHarga" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-caret-down mr-1 mb-1" style="color: #233d4d;"></i>
                            </button>
                        </span>
                        <div class="collapse" id="collapseHarga" style="margin-top: -7px;">
                            <div class="card card-body bg-light">
                                
                                <button type="button" class="btnfilter mt-4"><i class="fas fa-filter mr-2" style="font-size: 12px;"></i>Apply</button>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-9 mb-5">
                        <h1 class="title3" style="margin-bottom: -25px;">AUCTION LISTING</h1>
                        <nav class="mb-4">
                            <ul class="pagination justify-content-end" style="cursor: pointer;">
                                <li class="page-item" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                    <a class="page-link"><i class="fas fa-caret-left"></i></a>
                                </li>
                                <li class="page-item" data-target="#carouselExampleSlidesOnly" data-slide-to="0">
                                    <a class="page-link">1</a>
                                </li>
                                <li class="page-item" data-target="#carouselExampleSlidesOnly" data-slide-to="1">
                                    <a class="page-link">2</a>
                                </li>
                                <li class="page-item" data-target="#carouselExampleSlidesOnly" data-slide-to="2">
                                    <a class="page-link">3</a>
                                </li>
                                <li class="page-item" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                    <a class="page-link"><i class="fas fa-caret-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <div id="carouselExampleSlidesOnly" data-interval="false" class="carousel slide" data-ride="carousel" data-wrap="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <div class="row">
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                    <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card" style="width: 16rem;">
                                                <a href="item_details">
                                                    <img src="<?php echo base_url().'assets/images/backgroundrev2.jpg' ?>" class="card-img-top" alt="">
                                                </a>
                                                <div class="card-body text-center">
                                                     <a href="item_details" class="detail card-title text-secondary">
                                                        Laptop Lenovo Thinkpad X240
                                                    </a>
                                                    <h5 class="item-price">Rp. <span>10.000.000</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="mt-4">
                            <ul class="pagination justify-content-center" style="cursor: pointer;">
                                <li class="page-item" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                                    <a class="page-link"><i class="fas fa-caret-left"></i></a>
                                </li>
                                <li class="page-item" data-target="#carouselExampleSlidesOnly" data-slide-to="0">
                                    <a class="page-link">1</a>
                                </li>
                                <li class="page-item" data-target="#carouselExampleSlidesOnly" data-slide-to="1">
                                    <a class="page-link">2</a>
                                </li>
                                <li class="page-item" data-target="#carouselExampleSlidesOnly" data-slide-to="2">
                                    <a class="page-link">3</a>
                                </li>
                                <li class="page-item" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                                    <a class="page-link"><i class="fas fa-caret-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 text-center mt-3 mb-3">
                    <span href="#" class="text-footer">Made by Rayfan</span>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/home.js' ?>"></script>
</body>
</html>


