window.addEventListener("load", function(){ 
    //Menu Admin
    //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_sidenav_dropdown
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        console.log(dropdownContent);
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    } 
});