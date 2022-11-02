let selected_texture = "";

//Quand on selectionne une texture
$(".texture").click(function (e) {
    e.preventDefault();
    selected_texture = $(this).attr("src");
    $(".texture").css("background-color", "");
    $(this).css("background-color", "red");
});

//Fonction remplir toute les case
function tiles_continue() {
    $(".case").hover(function () {
        if (selected_texture != "" && document.getElementById("tiles_continue").checked == true) {
            $(this).html("<img src='" + selected_texture + "'>");
        }
    });
    /*
    if (document.getElementById("tiles_continue").checked == false) {
        selected_texture = "";
    }
    */
};

//Fonction case par case
function tiles_par_tiles() {
    $(".case").click(function (e) {
        e.preventDefault();
        if (selected_texture != "" && document.getElementById("tiles_par_tiles").checked == true) {
            $(this).html("<img src='" + selected_texture + "'>");
            $(".case").css("cursor", "");
        }
    });
    /*
    if (document.getElementById("tiles_par_tiles").checked == false) {
        selected_texture = "";
    }
    */
};

/* MODAL MENU */
let btn = document.querySelectorAll(".btn");
let modal = document.querySelectorAll('#myModal');
let span = document.querySelectorAll(".close");

[...btn].forEach((btn, ind) => {
    btn.onclick = () => (modal[ind].style.display = "block");
});

[...span].forEach((span, ind) => {
    span.onclick = () => (modal[ind].style.display = "none");
    selected_texture = "";
});


$(function() {
    $( ".modal" ).draggable();
});
