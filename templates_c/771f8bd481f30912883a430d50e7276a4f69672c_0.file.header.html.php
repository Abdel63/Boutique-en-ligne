<?php
/* Smarty version 3.1.33, created on 2019-11-21 17:07:22
  from 'C:\laragon\www\Smarty\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd6c44a625590_07476420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '771f8bd481f30912883a430d50e7276a4f69672c' => 
    array (
      0 => 'C:\\laragon\\www\\Smarty\\header.html',
      1 => 1574356031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd6c44a625590_07476420 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="main.css" />
<nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
  <div class="container">
    <div>
      <a href="index.php"
        ><img
          id="ImageEleg"
          class="logo rounded"
          src="images/logo-elegance-france-2000x2000.jpg"
      /></a>
    </div>

    <!-- BOUTTON MENU RESPONSIVE SUR PETITS ECRANS  -->
    <button
      class="navbar-toggler text-uppercase font-weight-bold text-white"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
      aria-controls="navbarResponsive"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      Menu
    </button>
    <!-- ///////////////////////////////////////////// -->

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
          <a
            id="login"
            class="py-3 px-0 px-lg-3 rounded categories"
            href="monCompte.php"
            >LOGIN</a
          >
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a
            id="loginIcone"
            class="py-3 px-0 px-lg-3 rounded categories"
            href="monCompte.php"
            ><img src="images/login.png" alt="compte" class="compte"
          /></a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="py-3 px-0 px-lg-3 rounded categories" href="panier.php"
            ><img src="images/5420.png_860.png" alt="panier" class="panier"
          /></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Masthead -->
<header class="masthead text-white text-center" id="sousheader">
  <div class="container d-flex align-items-center flex-column">
    <!-- Masthead Avatar Image -->
    <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="" />

    <!-- Masthead Heading -->
    <h1 class="masthead-heading mb-0 text-uppercase" id="elegance">Elegance</h1>

    <!-- Masthead Subheading -->
    <p class="masthead-subheading font-weight-light mb-0">
      Graphic Artist - Web Designer - Illustrator
    </p>
  </div>
</header>

<?php echo '<script'; ?>
>
  var loginIMG = document.getElementById("login");
  var loginIc = document.getElementById("loginIcone");

  loginIc.style.display = "none";
  //loginIMG.style.display = "block";

  loginIMG.addEventListener("click", function() {
    loginIc.style.display = "block";
  });

  loginIMG.addEventListener("click", function() {
    loginIMG.style.display = "none";
  });

  loginIc.addEventListener("click", function() {
    loginIc.style.display = "none";
  });
  loginIc.addEventListener("click", function() {
    loginIMG.style.display = "block";
  });
<?php echo '</script'; ?>
>
<?php }
}
