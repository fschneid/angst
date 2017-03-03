jQuery(document).ready(function($) { 
    
    
if($("body").hasClass("home")){
intro();   
}    
    
var menuOpen = false; 
    
var videoOverlay = new overlay();  

    
$(".post.category-video").on("click",function(){
    
var id = $(this).attr("data-id");
    
videoOverlay.open(id)    
    
});

    
    
$(".menuBtn").on("click",function(){
     
$(this).toggleClass('is-active'); 
    
var tl = new TimelineMax({onStart:function(){$("nav.main").addClass("white")},onReverseComplete:function(){$("nav.main").removeClass("white")}});
 
tl.fromTo($(".menuLayer"), 0.2, {x:"-100%"},{x:"0%",ease:Circ.easeOut})
  .staggerFromTo($(".menuLayer li"), 0.4, {opacity: 0},{opacity: 1,ease:Circ.easeInOut}, 0.2);
   
if(menuOpen === false){
tl.play();
menuOpen = true;    
    
} else{
tl.reverse(0);
    
menuOpen = false;    
}    
})


if($("body").hasClass("single-post")){
 
$('.poster').on('click', function() {
 
    $(this).parent().find(".youtube-player")[0].src += "&autoplay=1";
    $(this).delay(500).hide(0);
 
  });    
    
    
}
    
    



$(".facts h2").html(function(){
    var text= $(this).text().split(" ");
    var last = text.pop();
    return text.join(" ")+ (text.length > 0 ? " <span>"+ last + "</span>" : last);
});



var elem = document.querySelector('.slider');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
freeScroll:true
});


    
}); 



function overlay(){
    
    var el;
    
    this.open = function(id){   
        
    if(!(jQuery(".videoOverlay").length)){
        
    var videoUrl = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'+ id +'?rel=0&amp;autoplay=1&amp;showinfo=0" showinfo=0" frameborder="0" allowfullscreen></iframe>';    
    el =  jQuery('<div/>', {
    class: 'videoOverlay'
    }).append('<div class="videoContainer">'+ videoUrl +'</div')
    .appendTo('body');   
    
        
    var closeBtn = jQuery('<div/>', {
    class: 'closeBtn',
    on:{
    click:this.close
    }   
    }).prependTo(el);        
    }  
        
     TweenMax.from(el,0.2,{opacity:0});
        
    } 
    
    this.close = function(){
          
    el.hide().remove();   
        
    }
   
}


function intro(){

         
jQuery('.preloader').find("img").waitForImages(function() {
       

jQuery(this).remove();
    
    
jQuery('.preloader').addClass("introAnimation");
    
    
jQuery('.preloader').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
    function(e) {
    
    quadratic(4,100)
    
    function quadratic (duration, range, current) {
    return ((duration * 3) / Math.pow(range, 3)) * Math.pow(current, 2);
    }
    
    setStart();
    }) 
 

    
});
    
    function imageReplace(num){
    setTimeout(function(){  
    var url = "wp-content/uploads/2017/02/intro"+ num +".jpg";  
    jQuery(".preloader").css("backgroundImage", 'url(' + url + ')');  
    if(num <= 10){imageReplace(num + 1)};
    if(num == 10){setStart()};
    }, 600);
}
    
    function setStart() {
        
    TweenMax.to(jQuery("nav"), 0.6, {
        x: "0"
        , ease: Circ.easeOut
        , delay: 0.2
    });
        
        
    TweenMax.to(jQuery(".preloader"), 0.6, {
        borderLeftWidth: "6.25vw"
        , borderRightWidth: "6.25vw"
        , borderTopWidth: "6.25vw"
        , borderBottomWidth: "6.25vw"
        , force3D: true
        , ease: Circ.easeOut
        , delay:0.2
    });
}
        

}