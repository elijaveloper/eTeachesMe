var isHidden = true;

$(document).ready(function(){
  
  $("#page-menu").on("click tap",function(){
    event.preventDefault()
    if(isHidden){
      $("#page-header").slideDown(400);
      isHidden = false;
    }else{
      $("#page-header").slideUp(400);
      isHidden = true;
    }
  });
  
  
  $(document).on("scroll",function(){
    if(!isHidden){
      isHidden = true;
      $("#page-header").slideUp(500);
    }
  });
  
});

function CustomScaler(){
  this.newHeight = 0;
  this.newWidth = 0;
  this.aspectRatio = 0;
  
  this.scale = function(w,h,mw,mh){
      var nh, nw;
      nw = w;
      nh = h;

      if(w < mw){
        nh = mh * w/mw;
      }else{
        nw = mw;
        nh = mh;
      }

      this.newWidth = nw;
      this.newHeight = nh;
      this.aspectRatio = nw/nh;
  }
  
}
                   
