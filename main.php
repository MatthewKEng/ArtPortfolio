<html>
  <head>
    <style type="text/css">
      p {
        text-align: center;
      }
      a:link {
        color: black;
        text-decoration: none
      }
      body {
        background-color: #b3ffd9;
        display: flex;
        flex-direction: column;

      }
      #logo {
        align-items: center;
        justify-content: center;
        position: relative;
        display: flex;

      }
      #logo h1 {
        font-size: 500%;
        /*background-color: #b3ffd9;*/
        font-family: Carton Six;
        z-index: 2;
        position: relative;
        text-align: center;
        margin-top: 300px;
      }
      #logo img {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: auto;
        opacity: 0.4;
      }
      #galleries {
        position: relative;
        text-align: center;
        padding-top: 600px;
      }
      p {
        font-size: 20px;
        background-color: #b3ffd9;
      }
      .menu {
        display: flex;
        justify-content: space-between;
      }
      .graphies {
        
      }
      .graphies img {
        width: 175px;
        height: auto;
      }

    </style>
  </head>
  <body>
    <div class="menu">
      <p><a href="http://localhost/PhinPro/main.php#bios">BIOs</a></p>
      <p><a href="http://localhost/PhinPro/main.php#galls">GALLERIES</a></p>
      <p><a href="http://localhost/PhinPro/infoform.html">FUN!!!</a></p>
    </div>
    <div id="logo">
      <H1>Phineas P. Phantastically</br>Productions</H1>
      <img src="https://scontent-ord1-1.xx.fbcdn.net/v/t31.0-8/17039132_10154483283239716_5799823019574113614_o.jpg?oh=5ad9f00c7528b16553a90bc06c4d9684&oe=592A148A">
    </div>
    <div id="galleries">
      <H1 id="bios">Biographies</H1>
      <div class="graphies">
        <img src="https://scontent-ord1-1.xx.fbcdn.net/v/t1.0-9/17098678_10154485409229716_3093667700160597659_n.jpg?oh=5f15c1ce7892cb13d6d43567ac148515&oe=59635D03">
        <p><H3>Matthew Eng</H3>Matthew has drawn ever since he could hold a crayon. Early drawings centered around recreations of action scenes from his favorite films, including Star Wars.</p>
      </div>
      <div class="graphies">
        <img src="http://3.bp.blogspot.com/_4a3L1MNuWx8/R0pCuTMB4pI/AAAAAAAAAAU/BGbmYsEByow/S240/Phineas+P+Pooterbutt-Alpha.jpg">
        <H3>Phineas P. Phantastically</H3>
      </div>
      <H1 id="galls">Galleries</H1>
      <H2>Comics</H2>
      <H2>Sketch Cards</H2>
      <H2>Illustrations</H2>
      <H2>Sculpture</H2>
      <H2>Miscellaneous</H2>
    </div>
  </body>
</html>
