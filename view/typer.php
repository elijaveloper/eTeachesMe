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
               var sketch = function(p) {
                  p.setup = function() {
                    p.createCanvas(640, 480);
                    p.background(255);
                  };

                  p.draw = function() {
                    p.fill(0);
                  }

                  p.mouseDragged = function() {
                    p.strokeWeight(10);
                    p.line(p.mouseX, p.mouseY, p.pmouseX, p.pmouseY);
                  }
                };

                new p5(sketch, "canvas");
            </script>
         </div>
     </div>
   </div>
  </div>
</div>