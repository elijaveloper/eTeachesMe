<!-- Landing Page -->

<div class="container">
  
   <div class="blue section">
    <div class="row">
      <div class="column">
        <div class="content font-big font-effect-3d">
          Typer
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column">
        <div class="content">
          <div class="canvas" id="canvas"></div>
            <script>
                 var baseDir = "<?php echo getcwd(); ?>";
              
                 var sketch = function(p) {
                   
                    var backgroundImage;
                    var wordBank = "this is to test";
                    wordBank = wordBank.split("");
                    var typeAttempts = 0;
                    var currentColor;
                    var currentLetter;
                    var currentWord;
                   
                   //some math going on here
                    var theta = 0.0;
                    var amplitude = 20;
                    var maxCanvasWidth = 1024;
                    var maxCanvasHeight = 576;
                    var scaler;
                   
                    p.preload = function(){
                      backgroundImage = p.loadImage("img/bg.jpg");
                    }
                   
                    p.setup = function() {
                      scaler = customScale(p.windowWidth,p.windowHeight,maxCanvasWidth,maxCanvasHeight);
                      p.createCanvas(
                        scaler[0],
                        scaler[1]
                      );
                      p.background(255);
                      p.textFont("Montserrat");
                      currentColor = p.color(p.random(255),p.random(255),p.random(255));
                    };

                    p.draw = function() {
                      p.image(backgroundImage,0,0,p.width,p.height);
                      
                      //floating letter (singulars)
                      theta += 0.1;
                      p.scale(p.width/maxCanvasWidth,p.height/maxCanvasHeight);
                      p.translate(p.width/2,p.height/2);

                      drawLetterCube(((maxCanvasWidth-p.width)/2),((maxCanvasHeight-p.height)/2) + (p.sin(theta)*amplitude),200,200,50,currentLetter,currentColor,"#FFFFFF");
                    }
                    
                    p.keyTyped = function(){
                      if(p.key === wordBank[typeAttempts]){
                        typeAttempts++;
                        currentColor = p.color(p.random(255),p.random(255),p.random(255));
                      }
                      typeAttempts = typeAttempts < wordBank.length ? typeAttempts : 0; 
                    }
                   
                    function drawLetterCube(x,y,w,h,r,letter,bgcolor,color){
                      //rect(x,y,w,h,rad)
                      var shadowLength = 15;
                      
                      p.fill(0,128);
                      p.rect(x, y+shadowLength, w+shadowLength, h, r);
                      
                      p.strokeWeight((w+h)*0.02);
                      p.stroke("#FFFFFF");
                      p.fill(bgcolor);
                      p.rectMode(p.CENTER);
                      p.rect(x, y, w, h, r);
                     
                      p.fill(color);
                      p.strokeWeight(0);
                      p.textStyle(p.BOLD);
                      p.textSize((w+h)*0.5);
                      p.textAlign(p.CENTER,p.CENTER);
                      p.text(letter,x,y);
                    }
                    
                    p.windowResized = function(){
                      scaler = customScale(p.windowWidth,p.windowHeight,maxCanvasWidth,maxCanvasHeight);
                      p.resizeCanvas(scaler[0],scaler[1]);
                    }
                    
                    function customScale(w,h,mw,mh){
                      var nh, nw;
                      nw = w;
                      nh = h;
                      
                      if(w < mw){
                        nh = mh * w/mw;
                      }else{
                        nw = mw;
                        nh = mh;
                      }
                      
                      return [nw,nh,nh/nw];
                    }
                   
                  };

                  new p5(sketch, "canvas");
            </script>
         </div>
     </div>
   </div>
  </div>
</div>