function log(inf){
    window.console && console.log(inf);
}
function slide(id, clas, path, n){
    n= (n==path.length) ? 0: n;
    ind= n+1;//select the next indicator( "1" is added because of the default set before calling this function)
    log("slide("+id+", "+clas+", "+path[n]+") initialized");
    x= document.getElementById(id);
    x.style.backgroundImage= "url("+path[n]+")";// change slide image
    log(path[n]+" set to background");

    //Indicator Dynamics
    div= document.getElementById(id).getElementsByClassName(clas);
    for(i=0; i<div.length; i++){//Update indicator
        ind= (ind==path.length) ? 0: ind;//start from the beggining if last indicator have been selected.
        if(i==ind){
        div[i].style.backgroundColor= "#0000ff";
    }else{
        div[i].style.backgroundColor= "#FFFFFF";
    }
        log(div[i]);
    }
    log("Indicator updated");
    log("slide("+id+", "+clas+", "+path[n]+") completed");

    //call next slide
    next(id, clas, path, n+1);
    log("next("+id+", "+clas+", "+path[n]+") initialized...");

}
function next(id, clas, path, n){
    setTimeout(slide, 5000, id, clas, path, n);
    log("slide("+id+", "+clas+", "+path[n]+") called...");
}
function init_Display(id, clas, path){
    //var url= ['../images/promotion/promo2.png', '../images/promotion/promo3.png', '../images/promotion/promo1.png'];
    //id= "promotion";
    n= path.length;
    log("Creating "+n+" indicators");
   // init_Display(id, n);


    for(i=0; i< n; i++){
        //Create indicator
        tag = document.createElement("div");
        tag.setAttribute('class',clas);
        if(i == 0){
            tag.style.backgroundColor= "#0000ff";
            log(i+" choose as current indicator...");
        }
        x= document.getElementById(id);
        x.appendChild(tag);
    }
    log(n+" indicator created...");
    log(" Animinaton initialized with next("+id+", "+clas+", "+path+",0)...");
    next(id, clas, path, 0);
}