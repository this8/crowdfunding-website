function openDetalis(evt, tabIdName){
    var i, tabview, tablinks;

    // Remove displaying all details for show next details of a clicked tab
    tabview = document.getElementsByClassName("tabView");
    for (i = 0; i < tabview.length; i++) {
        tabview[i].style.display = "none";
    }

    // if some button is actived, then it is replace class name to ""
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }

    // if pressed button , show relevent table

    var activeTag=document.getElementById(tabIdName);
    activeTag.style.display = "block";// display=none change to display=block
    evt.currentTarget.className += " active";//change class name
}