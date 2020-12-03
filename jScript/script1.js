var i = 0;
var image = ["image/startPage/001.png", "image/startPage/002.png", "image/startPage/003.png", "image/startPage/004.png"];
var time = 3000;

function changeImage(){
    document.slide.src = image[i];
    
    if(i< image.length - 1)
        i++;
    else 
        i=0;

    setTimeout("changeImage()",time);
}
window.onload = changeImage;


$("#loginLode").click(function(){
    window.location.href = "login.php";
});