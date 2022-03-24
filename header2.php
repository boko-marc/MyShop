<?php session_start(); ?>    
<div class="navbar">
  <a href="index2.php">Home</a>
  <a href="#">Shop</a>
  <div class="dropdown">
    <button class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Menu</h2>
      </div>
      <div class="row">
        <div class="column">
          <h3>Montre</h3>
          <a href="#">Rolex</a>
          <a href="#">Casio</a>
        </div>
        <div class="column">
          <h3>Chaussure</h3>
          <a href="#">SNEAKERS</a>
          <a href="#">BOTINES</a>
        </div>
      </div>
    </div>
  </div>
  <a  href="logout.php">Deconnexion</a>
  <!--search bar--> 
  <div class="topnav">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</div>
</div> 
        