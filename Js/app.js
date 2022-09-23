var i = 0;
var images = [];
var time = 2000;

images[0]='Images/crocs.jpg'
images[1]='Images/slippers.jpg'
images[2]='Images/womenshoes.jpg'

function changeimg(){
    document.slide.src = images[i];

    if(i < images.length -1){
        i++;
    }else{
        i=0;
    }

    setTimeout("changeimg()",time);
}

window.onload = changeimg;