
jQuery(document).ready(function($) { 
      

    
if($("body").hasClass("home")){
intro(); 
    
headerScroll();
    
var elem = document.querySelector('.slider');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
freeScroll:true
});    
    
} 
    
if($("body").hasClass("single-format-image")){
    
svgAnimation();    
    
}   
   
    
    
    
if($("body").hasClass("quiz")){
    
var form = $("form");    
    
var current = form.find(".question").eq(0).addClass("current");   
    
    
//go Back results
    
$(".moreBtn").on("click",function(e){
    
e.preventDefault();
window.history.go(-2);      
})    
    
 
    
    
$(".answer input").on("focus",function(e){

$(this).closest(".answer").siblings().removeClass("selected");    
$(this).closest(".answer").toggleClass("selected");    

})    
        

$(".next").on("click",function(){

var next = current.next(".question");
    
if($(current).find('input:radio:checked').length > 0){ 

var index = $(".question").index(next); 
    
if(!(next.length)){
    
$("input[type=submit].fixed").show();
$("button.fixed").hide();    
    
}  else {

    
current.removeClass("current"); 
    
    
$(".number span").html(index+1); 
    
var height = current.outerHeight();    
    
next.addClass("current");
    
current = next;  

TweenMax.to(form, 0.6, {y:'-=' + height +'', ease: Power1.easeOut});     
    
} 
    
}  else {
$(current).find(".warning").show();    
}   
  
})    
    
    
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



function headerScroll(){
    
var controller = new ScrollMagic.Controller();    
    
var el = jQuery(".scrollIndicator");
var type = jQuery(".intro .innerContent");    
    
var arrow = new ScrollMagic.Scene({duration:50})
								.setTween(el, {opacity: "0"})
								.addTo(controller);
    
       
    
    
    
}


function intro(){

         
jQuery('.preloader').find("img").waitForImages(function() {
       

jQuery(this).remove();
    
    
jQuery('.preloader').addClass("introAnimation");
    
    
jQuery('.preloader').one('webkitAnimationEnd oanimationend msAnimationEnd animationend',   
    function(e) {
    
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
        
    jQuery(".scrollIndicator").addClass("animateIn");   
        
        
    TweenMax.to(jQuery(".preloader"), 0.6, {
        borderBottomWidth: "6.25vw"
        , force3D: true
        , ease: Circ.easeOut
        , delay:0.2
    });
}
        

}

function svgAnimation(){


//load inline    
var url = "http://localhost:8888/wp-content/uploads/2017/03/koerper.svg"   
   
xhr = new XMLHttpRequest();
xhr.open("GET",url,false);
xhr.overrideMimeType("image/svg+xml");
xhr.send("");
document.getElementById("svg").appendChild(xhr.responseXML.documentElement);  
    
    
    

        
    
    
var igel = jQuery("#svg svg").find("#igelText > g"); 

var text = jQuery(".text").find(".snippets");
    
igel.click(function(){

igel.css("opacity","0.5");    
    
jQuery(this).css("opacity","1");
    
var id = jQuery(this).attr("id");
    
text.removeClass("active");   
    
jQuery(".snippets." + id + "").addClass("active");    
 
    
    
}) 
    
    
   
}


