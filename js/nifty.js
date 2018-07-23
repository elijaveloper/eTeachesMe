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
