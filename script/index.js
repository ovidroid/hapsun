window.addEventListener('scroll',()=>{
  let height = window.scrollY;
if(height>=300){
document.getElementById('contact').setAttribute("style","opacity:1;transform:scale(1);");
}else{
document.getElementById('contact').setAttribute("style","opacity:0;transform:scale(0.5);");
}
})