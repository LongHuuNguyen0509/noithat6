<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="/noithat6/vendor/style1.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
         integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
         integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
         crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
         crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      </style>
   </head>
   <body>
      <div class="header">
         <input type="checkbox" class="nav__input" id="check_overlay" hidden>
               <!-- nút show menu kích thước 2x  -->
               <label for="check_overlay" class="nav__overlay">
               </label>
               <!-- Nhấp vào khoảng overlay để tắt check box -->
         <!-- <div class="nav__overlay"></div> -->

         <div class="nav__mobile d-flex flex-column justify-content-center">
            <a class=" d-flex justify-content-center">
               <div class="12345">
                  <!-- <input type="text" placeholder="" /> -->
                  <input style="background-color: hsl(237, 100%, 50%);" class="fa fa-search " type="button"  />
               </div>
            </a>
            <a href="#home">Trang chủ</a>
            <a href="#contact">Giới thiệu</a>
            <a href="#about">Thiết kế nhà phố</a>
            <a href="#home">Thiết kế biệt thự</a>
            <a href="#contact">Thư viện mẫu</a>
            <a href="#about">Bảng giá</a>
            <a href="#home">Liên hệ</a>
         </div>
         <div class="header header--background--orange">
            <div class="header__logoname">
               <img class="image__header--logo" src="/noithat6/vendor/image/logo.jpg" alt="Logo CompanyLogo">
               <p class="a__company--name" href="#default">Nội Thất An Đông</p>
            </div>
            <div class="header-right d-flex flex-row topnav" id="myTopnav">
               <a href="#home">Trang chủ</a>
               <a href="#contact">Giới thiệu</a>
               <a href="#about">Thiết kế nhà phố</a>
               <a href="#home">Thiết kế biệt thự</a>
               <a href="#contact">Thư viện mẫu</a>
               <a href="#about">Bảng giá</a>
               <a href="#home">Liên hệ</a>
               <a class="search__header--hover">
                  <div class="123">
                     <input  class="fa fa-search fa-lg" type="button"
                        />
                  </div>
               </a>
               <!--  -->
               <a class="togglesearch">
               <input type="text" placeholder="" />
               <input style="background-color: hwb(27 2% 0%);" class="fa fa-search fa-lg" type="button"
                  />
               </i>
               </a>
               <script>
                  $(document).ready(function () {
                      $(".fa-search").click(function () {
                          $(".togglesearch").toggle();
                          $("input[type='text']").focus();
                      });
                  });
               </script>
               <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                  </a> -->
               <label for="check_overlay" class="icon">
               <i class="fa fa-bars fa-2x"></i>
               </label>

            </div>
         </div>
      </div>