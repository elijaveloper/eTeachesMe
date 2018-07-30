<!-- Landing Page -->

<div class="container">
  
   <div class="white section">
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
                  $(document).ready(function(){
                    var scaler = new CustomScaler();
                    var maxCanvasWidth = 1024;
                    var maxCanvasHeight = 576;
                    var backgroundColor = 255;

                    var sketch = function(p){
                      
                      var enemyPool = [];
                      
                      function Enemy(id,x,y,ctx){
                        this.x = x;
                        this.y = y;
                        
                        this.id = id;
                        
                        this.draw = function(){
                          ctx.fill(0);
                          ctx.text(":D",this.x,this.y);
                        }                     
                        
                        this.move = function(x,y){
                          this.x = x;
                          this.y = y;
                        }
                        
                      }
                      
                      p.setup = function(){
                        scaler.scale(p.windowWidth,p.windowHeight,maxCanvasWidth,maxCanvasHeight);
                        p.createCanvas(scaler.newWidth,scaler.newHeight);
                        
                        for(i = 0; i<400; i++){
                          enemyPool[i] = new Enemy(i,i+i,(i*2)*5,p);
                        }
                      }
                      
                      p.draw = function(){
                        enemyPool.forEach(function(enemy,index){
                          enemy.move(enemy.x, enemy.y);
                          enemy.draw();
                        });
                      }
                      
                      p.windowResized = function(){
                        scaler.scale(p.windowWidth,p.windowHeight,maxCanvasWidth,maxCanvasHeight);
                        p.resizeCanvas(scaler.newWidth,scaler.newHeight);
                      }

                    }

                    new p5(sketch, "canvas");
                  });
              
              
                  
            </script>
         </div>
     </div>
   </div>
  </div>
</div>