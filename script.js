let selected_texture = "";
console.log(selected_texture);

$(".draggable").click(function (e) {
    e.preventDefault();
    selected_texture = $(this).attr("src");
    $(".draggable").css("background-color", "");
    $(this).css("background-color", "red");
    $(".draggable").css("cursor", "pointer");
});

//Fonction remplir toute les case
$(".case").hover(function () {
    selected_case = $(this).attr("id");
    if (selected_texture != "") {
        $(this).html("<img src='" + selected_texture + "'>");
    }
});

$(".case").click(function (e) {
    e.preventDefault();
    console.log(selected_texture);
    if (selected_texture != "") {
        $(this).html("<img src='" + selected_texture + "'>");
        $(".draggable").css("background-color", "white");
        $(".case").css("cursor", "");
        selected_texture = "";
    }
});