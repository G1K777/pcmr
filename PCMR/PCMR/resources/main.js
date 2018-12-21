/* Jquery + JS */

// External link prompt.
$(".external").on("click", function(event){
    event.preventDefault();
    let button = confirm("You clicked on a external link, do you want to visit the following page? "+ this.href);
    if(button == true){
        window.open(this.href, "_blank");
    }
});