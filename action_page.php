<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <script>
      function bigtab (ID) {
      	document.getElementById(ID).style.fontSize = "30px";
      }
      function normaltab (ID) {
        document.getElementById(ID).style.fontSize = "25px";
      }
    </script>
    <style>
       #MainTitle {
    background-color: #1D201F;
    font-size: 50px;
    text-align: center;
         }      
      .Tabs {
        float:left; 
     	  width: 25%;
        height: 80px;
        background-color:rgb(187, 30, 255);
        font-size:25px;
        text-align: center;
        transition: all 0.2s ease-out;
        background-color: #1D201F;
      }
      #MyName {
          padding: 0px 0px 10px 0px;
          margin: 0px;
      }
    a:link {
    color: white;
    text-decoration: none;
      }
a:visited {
    color: white;
    text-decoration: none;
     }
a:hover {
    color: white;
    text-decoration: none;
    }
a:active {
    color: white;
    text-decoration: none;
    }
      body {
        background-color: #E7BBE3; 
      }
      p {
        font-family: Garamond, serif;
        line-height: 150%;
      }
      h1 {
        font-family: 'Satisfy', cursive;
      }
      </style>
    </head>
  <title> Welcome! </title>
  <link rel='shortcut icon' type='image/x-icon' href='icon.png' />
<body>
  <div id="MainTitle">
  <h1 id="MyName"> <font color="white">  Caity Berry </font>  </h1>
  </div>
  <div id="Menu">
    <div id="Welcometab" onmouseover="bigtab('Welcometab')" onmouseout="normaltab('Welcometab')" class="Tabs" onclick="location.href='https://caityraspberry.github.io/portfolio/welcome.html';" style="cursor:pointer;">
      <p><a href="https://caityraspberry.github.io/portfolio/welcome.html">Welcome</a>
</p>
    </div>
    <div id="Projectstab" onmouseover="bigtab('Projectstab')" onmouseout="normaltab('Projectstab')" class="Tabs" onclick="location.href='https://caityraspberry.github.io/portfolio/projects.html';" style="cursor:pointer;">
 <p><a href="https://caityraspberry.github.io/portfolio/projects.html">Projects</a>
</p>    </div>
    <div id="Aboutmetab" onmouseover="bigtab('Aboutmetab')" onmouseout="normaltab('Aboutmetab')" class="Tabs" onclick="location.href='https://caityraspberry.github.io/portfolio/aboutme.html';" style="cursor:pointer;">
 <p><a href="https://caityraspberry.github.io/portfolio/aboutme.html" >About Me</a>
</p>    </div>
    <div id="Contacttab" onmouseover="bigtab('Contacttab')" onmouseout="normaltab('Contacttab')" class="Tabs" onclick="location.href='https://caityraspberry.github.io/portfolio/contact.html';" style="cursor:pointer;">
 <p><a href="https://caityraspberry.github.io/portfolio/contact.html">Contact</a>
</p>    </div>
  </div>
  <>
</body>
  </html>
