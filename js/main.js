    var medComp = document.getElementById("search1");
    // var text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    medComp.addEventListener("keyup", function(event) {
    var res = document.getElementById("medCompResults");
        var str = this.value;
        // alert(text);
        if (str != "") {
            if (window.XMLHttpRequest) {
                var ajaxReq = new XMLHttpRequest();
            } else {
                var ajaxReq = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajaxReq.onreadystatechange = function() {
                if (ajaxReq.readyState == 4 && ajaxReq.status == 200) {
                    if (ajaxReq.responseText == "") {
                        res.innerHTML = "";
                    }
                    res.innerHTML = ajaxReq.responseText;
                } else {
                    res.innerHTML = "Loading...";
                }
            }
            ajaxReq.open("GET", "search.php?comp=" + str, true);
            ajaxReq.send();
        } else {
            // res.innerHTML = text;
            res.innerHTML = "The search results will be displayed here."
        }
    });


    var medName = document.getElementById("search2");
    medName.addEventListener("keyup", function(event) {
    var res = document.getElementById("medNameResults");
        // var sby = "";
        var str = this.value;

        var text = res.innerHTML;
        // alert(text);
        // alert(this.id);
        if (str != "") {
            if (window.XMLHttpRequest) {
                var ajaxReq = new XMLHttpRequest();
            } else {
                var ajaxReq = new ActiveXObject("Microsoft.XMLHTTP");
            }
            ajaxReq.onreadystatechange = function() {
                if (ajaxReq.readyState == 4 && ajaxReq.status == 200) {
                    if (ajaxReq.responseText == "") {
                        res.innerHTML = "";
                    }
                    res.innerHTML = ajaxReq.responseText;
                } else {
                    res.innerHTML = "Loading...";
                }
            }
            ajaxReq.open("GET", "search.php?name=" + str, true);
            ajaxReq.send();
        } else {
            // alert();
            res.innerHTML = "The search results will be displayed here."
        }
    });


$(document).ready(function() {
    $(".medCompWrapper").focusin(function() {
        $(".medNameWrapper, #medNameResults").addClass("reduce-opacity");
    });
    $("#search1").focusout(function() {
        $(".medNameWrapper, #medNameResults").removeClass("reduce-opacity");
    });


    $("#search2").focusin(function() {
        $(".medCompWrapper, #medCompResults").addClass("reduce-opacity");
    });
    $("#search2").focusout(function() {
        $(".medCompWrapper, #medCompResults").removeClass("reduce-opacity");
    });
});
