<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/item_details.css' ?>">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/Semantic-UI-CSS-master/components/image.css' ?>">
    <title>Item Details</title>
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
                                <a class="nav-link" href="home" style="color: #ffffff; font-size: 16px; font-weight: 500; margin-right: 20px;">Home</a>
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
            <div class="row mt-5 mb-5">
                <div class="col-5">
                    <img src="<?php echo base_url().'assets/images/laptop.jpg' ?>" alt="..." class="item-img img-thumbnail" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <div class="modal fade bd-example-modal-lg " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <img src="<?php echo base_url().'assets/images/laptop.jpg' ?>" alt="" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col">
                            <h2 class="item-title mb-4">Laptop Lenovo Thinkpad X240</h2>
                            <hr>
                            <h6 class="mt-4">Nilai Limit :</h6>
                            <h1 class="item-price">Rp. <span>10.000.000</span></h1>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td width="30%">Bidding Way</td>
                                        <td>Open Bidding</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Ex ad molestiae soluta ducimus facilis repellendus fugit 
                                            quo ipsam! Natus magni sapiente eveniet dignissimos 
                                            maiores itaque consectetur quidem nemo temporibus 
                                            doloremque porro dolor minus, aliquid excepturi.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lorem</td>
                                        <td>Friday, 7 August 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col">
                            <button type="button" class="btn-bidding mt-3" data-toggle="modal" data-target="#send-bidding">
                                Send Bidding
                            </button>
                            <div class="modal fade" id="send-bidding" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Send Bidding</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="mb-3"><b>Nilai Limit: Rp.<span>10.000.000</span></b></h6>
                                            <input class="form-control" type="number" placeholder="Input The Bid Amount">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger">Reset</button>
                                            <button type="button" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="10%">No.</th>
                                <th width="25%">Username</th>
                                <th width="45%">Item Name</th>
                                <th width="20%">Bid Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Rayfan24</td>
                                <td>Laptop Lenovo Thinkpad X240</td>
                                <td>Rp. <span>10.500.000</span></td>
                            </tr>
                        </tbody>
                    </table>
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
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="<?php echo base_url().'assets/js/item_details.js' ?>"></script>
</body>
</html>


