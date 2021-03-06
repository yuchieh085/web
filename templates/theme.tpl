<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><{$WEB.web_title}></title>
  <!-- Font Awesome Icons -->
  <link href="<{$xoImgUrl}>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<{$xoImgUrl}>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<{$xoImgUrl}>css/creative.min.css" rel="stylesheet">
  
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
  <script type="text/javascript" src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>

  <{* header_js.tpl *}>
  <{include file="tpl/header_js.tpl"}>

</head>

<body id="page-top">
  <{* 轉向樣板 *}>
  <{include file="tpl/redirect.tpl"}>

  <{* header.tpl *}>
  <{include file="tpl/header.tpl"}>

  <{if $WEB.file_name == "index.php"}>
    <{include file="tpl/index.tpl"}>
  <{elseif  $WEB.file_name == "cart.php"}>
    <{include file="tpl/cart.tpl"}>
  <{/if}>

  <{* footer.tpl *}>
  <{include file="tpl/footer.tpl"}>

  <{if $smarty.session.cartAmount}>
    <{* 購物車圖示 *}>
    <style>
      .fab-fixed-wrap .fab {
        display: block;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        color: white;
        background-color: #0c9;
        text-align: center;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.16);
        text-decoration: none;
        display: flex;
        line-height: 1.2;
        align-items: center;
        justify-content: center;
      }

      .fab-fixed-wrap .fab.fab-facebook {
        /* background-color: #4080ff; */
        background-color: #f4623a;
      }

      .fab-fixed-wrap .fab.fab-line {
        background-color: #0b0;
      }
    </style>
    <div class="fab-fixed-wrap with-navbar-bottom" style="bottom: 4.6875rem;position: fixed;z-index: 1035;right: .9375rem;bottom: .9375rem;">
      <a href="cart.php?op=order_form" class="fab fab-facebook mp-click" data-toggle="tooltip" data-placement="top" title="您選了<{$smarty.session.cartAmount}>個商品">
        <i class="fas fa-cart-plus"></i>
        <span class="badge badge-danger badge-counter mb-3"><{$smarty.session.cartAmount}></span>
      </a>
    </div>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  <{/if}>

</body>

  <!-- Custom scripts for this template -->
  <script src="<{$xoImgUrl}>js/creative.min.js"></script>

</html>
