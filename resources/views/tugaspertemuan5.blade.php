<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        body {
            background-color: #aaaaaa;
        }

        .main-card {
            max-width: 600px;
            background-color: #f3f3f3;
            border-radius: 28px;
        }

        .top-icon {
            width: 46px;
            height: 46px;
            position: absolute;
            top: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #111;
        }

        .top-icon.left {
            left: 24px;
        }

        .top-icon.right {
            right: 24px;
        }

        .profile-img {
            width: 110px;
            height: 110px;
            background-color: white;
        }

        .username {
            font-size: 34px;
            font-weight: 700;
            color: #000;
        }

        .bio-text {
            font-size: 16px;
            color: #111;
        }

        .banner-box {
            background-color: #fff;
        }

        .banner-img {
            border-radius: 20px;
            width: 100%;
        }

        .link-btn {
            background-color: #fff;
            color: #111;
            border-radius: 18px;
            font-weight: 600;
        }
    </style>

</head>

<body>

    <div class="container-fluid min-vh-100 d-flex justify-content-center py-4 px-3">
        <div class="shadow-lg main-card w-100 p-4 position-relative">

            <!-- icon atas -->
            <a href="#" class="top-icon left rounded-circle">
                <img src="assets_linktree/icon/linktree_icon.png" alt="" class="top-icon rounded-circle">
            </a>

            <a href="#" class="top-icon right rounded-circle">
                <img src="assets_linktree/icon/share_icon.png" alt="" class="top-icon rounded-circle">
            </a>


            <!-- profil -->
            <div class="text-center mt-5 pt-4 ">
                <img src="assets_linktree/icon/logo_medicube.webp" alt="Medicube Logo"
                    class="profile-img mb-3 rounded-circle">

                <h1 class="username mb-1">medicube_global</h1>
                <p class="bio-text mb-3">Real Results.</p>

                <!-- Disini menggunakan icon yang tersedia di dokumentasi bootstrap, dimana menggunakan fontawesome versi 5
                 -->
                <div class="mb-4">
                    <a href="#" class="text-dark mx-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-dark mx-2"><i class="fab fa-facebook"></i></a>
                </div>
            </div>

            <!-- banner -->
            <div class="banner-box py-1 p-3 mb-3 rounded">
                <a href="#" class="btn link-btn btn-block mb-3">
                    <img src="assets_linktree/banner/banner1_medicube.webp" alt="Medicube Banner" class="img-fluid banner-img">
                    <p></p>Medicube Offical Global Store 🌍
                </a>
            </div>

            <!-- list link -->
            <a href="#" class="btn link-btn btn-block mb-3">Official Retailer</a>
            <a href="#" class="btn link-btn btn-block mb-3">Amazon US</a>
            <a href="#" class="btn link-btn btn-block mb-3">TikTok</a>
            <a href="#" class="btn link-btn btn-block mb-3">Instagram</a>
            <a href="#" class="btn link-btn btn-block mb-3">medicube Ambassadors</a>

            <div class="banner-box py-1 p-3 mb-3 rounded">
                <a href="#" class="btn link-btn btn-block mb-3">
                    <img src="assets_linktree/banner/banner2_medicube.webp" alt="Medicube Banner" class="img-fluid banner-img">
                    <p></p>Brandstory - Medicube 🪄
                </a>
            </div>

        </div>
    </div>

</body>

</html>
