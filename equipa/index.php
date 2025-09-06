<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=0.75, minimum-scale=0.75">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600,800" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <script src="./lib/lax.min.js"></script>
  <!-- <script src="../src/lax.js"></script> -->


  <script type="text/javascript">
    window.onload = function() {
      document.getElementById("main").classList.add("loaded")

      lax.setup()

      const update = () => {
        lax.update(window.scrollY)
        window.requestAnimationFrame(update)
      }

      window.requestAnimationFrame(update)

      let w = window.innerWidth
      window.addEventListener("resize", function() {
        if(w !== window.innerWidth) {
          lax.updateElements()
        }
      });
    }
  </script>

  <style>
    body,html {
      margin:0;
      padding:0;
      color: #F3F4F5;
      background: #191818;
      overflow-x: hidden;
      font-family: 'Montserrat', sans-serif;
    }

    #main {
      opacity: 0;
      transition: opacity 200ms;
    }

    #main.loaded {
      opacity: 1;
    }
   
    #header {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100vw;
      z-index: 2;
      height: 100vh;
    }

    .bg {
      position: fixed;
      width: 100vw;
      height: 100vh;
      top: 0;
      z-index: 1;
    }

    #header img {
      width: 78pt;
      margin-top: 12pt;
    }

    #header h2 {
      margin-top: 60pt;
      font-size: 24pt;
      font-weight: 600;
      text-align: center;
    }

    #header h4 {
      font-size: 16pt;
      font-weight: 300;
      text-align: center;
    }

    #header i {
      font-size: 14pt;
      background: white;
      color: black;
      width: 30pt;
      text-align: center;
      height: 30pt;
      line-height: 30pt;
      border-radius: 15pt;
      margin-top: -10pt;
    }

    .left {
      position: absolute;
      left: 80pt;
    }

    .right {
      position: absolute;
      right: 80pt;
    }

    .chunkyText {
      font-size: 80pt;
      font-weight: 1000;
    }

    .crazyText {
      font-size: 40pt;
      font-weight: 1000;
      color: #5ee5d5;
      position: absolute;
      width: 100vw;
      text-align: center;
      margin-top: 500pt;
    }

    .bubble {
      position: absolute;
      margin-top: 100pt;
    }

    .block {
      position: absolute;
      width: 60pt;
      height: 60pt;
    }

    .bubble.a {
      width: 100pt;
      height: 100pt;
      border-radius: 50pt
    }

    .bubble.b {
      width: 130pt;
      height: 130pt;
      border-radius: 65pt
    }

    .bubble.c {
      width: 50pt;
      height: 50pt;
      border-radius: 25pt
    }

    .section {
      z-index: 2;
      display: block;
      position: relative;
    }

    #section1 {
      height: 750pt;
    }

    #section2 {
      height: 200pt;
    }

    #section3 {
      padding: 0 20pt;
      font-size: 20pt;
      line-height: 30pt;
      align-items: center;
      display: flex;
      flex-direction: column;
      height: 85vh;
    }

    p {
      max-width: 500pt;
      text-align: center;
      margin-bottom: 100pt;
      font-weight: 300;
    }

    .button {
      padding: 10pt 50pt; 
      background: url(img/button-bg.jpg);
      background-size: 100pt;
      border-radius: 10pt;
      font-weight: 600;
      color: black !important;
    }

    a {
      text-decoration: none;
    }

    a:visited {
      color: black !important;
    }

    .button:hover {
      background: white;
      color: black !important;
      cursor: pointer;
    }


  </style>
</head>


<body>

  <div id="main">
    <div id="header" class="section">

      <h2 class="lax" data-lax-scale="0 1, vh 0.2" data-lax-translate-y="0 0, vh 1200" data-lax-opacity="0 1, (vh*0.5) 0">A NOSSA EQUIPA</h2>

      <h4 class="lax" data-lax-opacity="0 1, (vh*0.05) 0">desliza</h4>
      <i class="lax fas fa-chevron-down" 
        data-lax-opacity="0 1, (vh*0.1) 0" 
        data-lax-translate-y="0 0, 200 100">
      </i>
    </div>


    <div id="section1" class="section">
      <div class="left">
        <div class="lax bubble a"
          style="background: #EDD943"
          data-lax-preset="lazy-250"
        ></div>

        <div class="lax bubble c"
          style="background: #ED2471; margin-left: 80pt"
          data-lax-preset="lazy-100"
        ></div>

        <div class="lax bubble b"
          style="background: #35D5E5; margin-left: 160pt"
          data-lax-preset="lazy-300"
        ></div>

        <h3 data-lax-preset="driftRight" data-lax-optimize=true class="lax chunkyText" style="color: #35D5E5;">Luis Silva</h3>
      </div>

      <div class="right">
          <div class="lax bubble a"
            style="background: #35D5E5; margin-left: 120pt"
            data-lax-preset="lazy-200"
          ></div>

          <div class="lax bubble c"
            style="background: #EDD943; margin-left: -20pt"
            data-lax-preset="lazy-150"
          ></div>

          <div class="lax bubble b"
            style="background: #ED2471; margin-left: 20pt; margin-top: 200pt"
            data-lax-preset="lazy-350"
          ></div>
        <h3 data-lax-optimize=true data-lax-preset="driftLeft" class="lax chunkyText" style="color: #ED2471; margin-top: 200pt;">Filipa Asis</h3>
      </div>

      <h3 data-lax-preset="crazy zoomInOut" class="lax crazyText" data-lax-optimize=true>Marcos Almeida</h3>
    </div>

    <div id="section2" class="section">
      <div class="lax blockContainer" data-lax-preset="leftToRight-1.1 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5;"
          data-lax-preset="spin"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.2 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: -50pt; margin-left: -50pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.4 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -90pt; margin-left: -0pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 70pt; margin-left: -150pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.3 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 100pt; margin-left: -60pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.05 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -30pt; margin-left: -70pt;"
          data-lax-preset="spin"
        ></div>
      </div>

      <h3 data-lax-preset="leftToRight-0.8 speedy" data-lax-optimize=true class="lax chunkyText" style="
        color: #white; position: absolute; margin-top: -20pt; margin-left: -100pt">
        Maria Dião
      </h3>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.15 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: -70pt; margin-left: -20pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.45 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -50pt; margin-left: -50pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: 30pt; margin-left: -20pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.25 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: 80pt; margin-left: -10pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>
    </div>
    
    
     <div id="section1" class="section">
      <div class="left">
        <div class="lax bubble a"
          style="background: #EDD943"
          data-lax-preset="lazy-250"
        ></div>

        <div class="lax bubble c"
          style="background: #ED2471; margin-left: 80pt"
          data-lax-preset="lazy-100"
        ></div>

        <div class="lax bubble b"
          style="background: #35D5E5; margin-left: 160pt"
          data-lax-preset="lazy-300"
        ></div>

        <h3 data-lax-preset="driftRight" data-lax-optimize=true class="lax chunkyText" style="color: #35D5E5;">Gonçalo Dião</h3>
      </div>

      <div class="right">
          <div class="lax bubble a"
            style="background: #35D5E5; margin-left: 120pt"
            data-lax-preset="lazy-200"
          ></div>

          <div class="lax bubble c"
            style="background: #EDD943; margin-left: -20pt"
            data-lax-preset="lazy-150"
          ></div>

          <div class="lax bubble b"
            style="background: #ED2471; margin-left: 20pt; margin-top: 200pt"
            data-lax-preset="lazy-350"
          ></div>
        <h3 data-lax-optimize=true data-lax-preset="driftLeft" class="lax chunkyText" style="color: #ED2471; margin-top: 200pt;">Ivan Rodrigues</h3>
      </div>

      <h3 data-lax-preset="crazy zoomInOut" class="lax crazyText" data-lax-optimize=true>Pedro Skater</h3>
    </div>

    <div id="section2" class="section">
      <div class="lax blockContainer" data-lax-preset="leftToRight-1.1 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5;"
          data-lax-preset="spin"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.2 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: -50pt; margin-left: -50pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.4 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -90pt; margin-left: -0pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 70pt; margin-left: -150pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.3 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 100pt; margin-left: -60pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.05 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -30pt; margin-left: -70pt;"
          data-lax-preset="spin"
        ></div>
      </div>

      <h3 data-lax-preset="leftToRight-0.8 speedy" data-lax-optimize=true class="lax chunkyText" style="
        color: #white; position: absolute; margin-top: -20pt; margin-left: -100pt">
        Rodolfo e Marina Xavier
      </h3>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.15 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: -70pt; margin-left: -20pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.45 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -50pt; margin-left: -50pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: 30pt; margin-left: -20pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.25 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: 80pt; margin-left: -10pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>
    </div>

    
     <div id="section1" class="section">
      <div class="left">
        <div class="lax bubble a"
          style="background: #EDD943"
          data-lax-preset="lazy-250"
        ></div>

        <div class="lax bubble c"
          style="background: #ED2471; margin-left: 80pt"
          data-lax-preset="lazy-100"
        ></div>

        <div class="lax bubble b"
          style="background: #35D5E5; margin-left: 160pt"
          data-lax-preset="lazy-300"
        ></div>

        <h3 data-lax-preset="driftRight" data-lax-optimize=true class="lax chunkyText" style="color: #35D5E5;">Luis Perdigão</h3>
      </div>

      <div class="right">
          <div class="lax bubble a"
            style="background: #35D5E5; margin-left: 120pt"
            data-lax-preset="lazy-200"
          ></div>

          <div class="lax bubble c"
            style="background: #EDD943; margin-left: -20pt"
            data-lax-preset="lazy-150"
          ></div>

          <div class="lax bubble b"
            style="background: #ED2471; margin-left: 20pt; margin-top: 200pt"
            data-lax-preset="lazy-350"
          ></div>
        <h3 data-lax-optimize=true data-lax-preset="driftLeft" class="lax chunkyText" style="color: #ED2471; margin-top: 200pt;">Cenoura</h3>
      </div>

      <h3 data-lax-preset="crazy zoomInOut" class="lax crazyText" data-lax-optimize=true>Rui Viola</h3>
    </div>

    <div id="section2" class="section">
      <div class="lax blockContainer" data-lax-preset="leftToRight-1.1 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5;"
          data-lax-preset="spin"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.2 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: -50pt; margin-left: -50pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.4 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -90pt; margin-left: -0pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 70pt; margin-left: -150pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.3 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 100pt; margin-left: -60pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.05 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -30pt; margin-left: -70pt;"
          data-lax-preset="spin"
        ></div>
      </div>

      <h3 data-lax-preset="leftToRight-0.8 speedy" data-lax-optimize=true class="lax chunkyText" style="
        color: #white; position: absolute; margin-top: -20pt; margin-left: -100pt">
        Naré
      </h3>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.15 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: -70pt; margin-left: -20pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.45 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -50pt; margin-left: -50pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: 30pt; margin-left: -20pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.25 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: 80pt; margin-left: -10pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>
    </div>

 <div id="section1" class="section">
      <div class="left">
        <div class="lax bubble a"
          style="background: #EDD943"
          data-lax-preset="lazy-250"
        ></div>

        <div class="lax bubble c"
          style="background: #ED2471; margin-left: 80pt"
          data-lax-preset="lazy-100"
        ></div>

        <div class="lax bubble b"
          style="background: #35D5E5; margin-left: 160pt"
          data-lax-preset="lazy-300"
        ></div>

        <h3 data-lax-preset="driftRight" data-lax-optimize=true class="lax chunkyText" style="color: #35D5E5;">Pedro Cruz</h3>
      </div>

      <div class="right">
          <div class="lax bubble a"
            style="background: #35D5E5; margin-left: 120pt"
            data-lax-preset="lazy-200"
          ></div>

          <div class="lax bubble c"
            style="background: #EDD943; margin-left: -20pt"
            data-lax-preset="lazy-150"
          ></div>

          <div class="lax bubble b"
            style="background: #ED2471; margin-left: 20pt; margin-top: 200pt"
            data-lax-preset="lazy-350"
          ></div>
        <h3 data-lax-optimize=true data-lax-preset="driftLeft" class="lax chunkyText" style="color: #ED2471; margin-top: 200pt;">Manuel Mourão</h3>
      </div>

      <h3 data-lax-preset="crazy zoomInOut" class="lax crazyText" data-lax-optimize=true>Nuno Ginja</h3>
    </div>

    <div id="section2" class="section">
      <div class="lax blockContainer" data-lax-preset="leftToRight-1.1 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5;"
          data-lax-preset="spin"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.2 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: -50pt; margin-left: -50pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.4 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -90pt; margin-left: -0pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 70pt; margin-left: -150pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.3 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 100pt; margin-left: -60pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.05 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -30pt; margin-left: -70pt;"
          data-lax-preset="spin"
        ></div>
      </div>

      <h3 data-lax-preset="leftToRight-0.8 speedy" data-lax-optimize=true class="lax chunkyText" style="
        color: #white; position: absolute; margin-top: -20pt; margin-left: -100pt">
        Corneta
      </h3>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.15 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: -70pt; margin-left: -20pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.45 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -50pt; margin-left: -50pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: 30pt; margin-left: -20pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.25 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: 80pt; margin-left: -10pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>
    </div>
<div id="section1" class="section">
      <div class="left">
        <div class="lax bubble a"
          style="background: #EDD943"
          data-lax-preset="lazy-250"
        ></div>

        <div class="lax bubble c"
          style="background: #ED2471; margin-left: 80pt"
          data-lax-preset="lazy-100"
        ></div>

        <div class="lax bubble b"
          style="background: #35D5E5; margin-left: 160pt"
          data-lax-preset="lazy-300"
        ></div>

        <h3 data-lax-preset="driftRight" data-lax-optimize=true class="lax chunkyText" style="color: #35D5E5;">Ministros e Matrafonas</h3>
      </div>

      <div class="right">
          <div class="lax bubble a"
            style="background: #35D5E5; margin-left: 120pt"
            data-lax-preset="lazy-200"
          ></div>

          <div class="lax bubble c"
            style="background: #EDD943; margin-left: -20pt"
            data-lax-preset="lazy-150"
          ></div>

          <div class="lax bubble b"
            style="background: #ED2471; margin-left: 20pt; margin-top: 200pt"
            data-lax-preset="lazy-350"
          ></div>
        <h3 data-lax-optimize=true data-lax-preset="driftLeft" class="lax chunkyText" style="color: #ED2471; margin-top: 200pt;">Fidalgos</h3>
      </div>

      <h3 data-lax-preset="crazy zoomInOut" class="lax crazyText" data-lax-optimize=true>Rodrigo Miranda</h3>
    </div>

    <div id="section2" class="section">
      <div class="lax blockContainer" data-lax-preset="leftToRight-1.1 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5;"
          data-lax-preset="spin"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.2 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: -50pt; margin-left: -50pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.4 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -90pt; margin-left: -0pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 70pt; margin-left: -150pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.3 fadeInOut">
        <div class="lax block"
          style="background: #EDD943; margin-top: 100pt; margin-left: -60pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.05 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -30pt; margin-left: -70pt;"
          data-lax-preset="spin"
        ></div>
      </div>

      <h3 data-lax-preset="leftToRight-0.8 speedy" data-lax-optimize=true class="lax chunkyText" style="
        color: #white; position: absolute; margin-top: -20pt; margin-left: -100pt">
        Simão & Sury
      </h3>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.15 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: -70pt; margin-left: -20pt; width: 40pt; height: 40pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.45 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: -50pt; margin-left: -50pt; width: 25pt; height: 25pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.5 fadeInOut">
        <div class="lax block"
          style="background: #35D5E5; margin-top: 30pt; margin-left: -20pt;"
          data-lax-preset="spinRev-500"
        ></div>
      </div>

      <div class="lax blockContainer" data-lax-preset="leftToRight-1.25 fadeInOut">
        <div class="lax block"
          style="background: #ED2471; margin-top: 80pt; margin-left: -10pt;"
          data-lax-preset="spin-500"
        ></div>
      </div>
    </div>
    

    <div id="section3" class="lax section">
      <p class="lax" data-lax-preset="linger" data-lax-optimize=true>
        Agradecemos também a todos os fãns do nosso Carnaval de Torres Vedras, pois sem vocês isto não fazia sentido.
      </p>
      <a class="lax button" data-lax-preset="linger" data-lax-optimize=true data-lax-bg-pos-x="0 0, 3000 1000" href="https://radiocarnavaldetorresvedras.com">
        Voltar a Radio
      </a>
    </div>



  </div>

</body>
