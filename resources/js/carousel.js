var myIndex = 0;
carousel = function() {
    var i;
    var x = $(".my-slides");
    for (i = 0; i < x.length; i++) {
        x.eq(i).hide();
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x.eq(myIndex-1).show();
    setTimeout(carousel, 4000); // Change image every 4 seconds
}
