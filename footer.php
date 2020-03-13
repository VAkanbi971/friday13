<style>
/* 
    Name: Victor Akanbi
    Date: 2.28.20
    Filename: main.css */

/* footer start */
/* I used this to make the the page position relative to all the things displayed so that i could make the footer sticky by making the value for its location absolute. */
html { height: 100%; }
body {
    min-height:100%; 
    position:relative; 
    padding-bottom:[footer-height] 
}

div.footer-copyright {
    background-color: gray;
    padding: 2em;
    position: absolute; 
    left: 0 ; right: 0; bottom: 0; 
    height:[footer-height] 
}

.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    /* Set the fixed height of the footer here */
    height: 60px;
    line-height: 60px; /* Vertically center the text there */
    background-color: #f5f5f5;
  }
  /* footer end */
</style>

<div class="footer-copyright text-center py-3">
    © 2020 Copyright: Masks R Us
  </div>