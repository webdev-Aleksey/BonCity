function openTab(e) {
    $(".tabcontent").each(function () {
        $(this).css({
            display: "none"
        })
    }), $(".mainContent__controls .tablink").on("click", function () {
        $(this).addClass("btn-selected"), $(this).siblings().removeClass("btn-selected")
    }), document.getElementById(e).style.display = "block"
}
$(".yourSum").on("change", function () {
    $(this).val() ? ($(this).parent().find($(".result")).text((.04 * $(this).val()).toFixed(2)), $(this).parent().find($(".cardPlaceholder")).text("")) : ($(this).parent().find($(".result")).text("кешбэк"), $(this).parent().find($(".cardPlaceholder")).html("введите <br> сумму"))
}), $(".mainContent-more").on("click", function () {
    $(".mainContent-hidden").toggleClass("hide"), $(".mainContent-more").toggleClass("mainContent-more-back"), "ещё" == $(".mainContent-more").html() ? $(".mainContent-more").html("свернуть") : $(".mainContent-more").html("ещё")
}), $(".mainContent-contacts-more").on("click", function () {
    $(".mainContent__point-hidden").toggleClass("hide"), $(".mainContent-contacts-more").toggleClass("mainContent-more-back"), "ещё" == $(".mainContent-contacts-more").html() ? $(".mainContent-contacts-more").html("свернуть") : $(".mainContent-contacts-more").html("ещё")
}), document.getElementById("defaultOpen").click(), $(".modal-links label").on("click", function () {
    $(this).addClass("label-selected"), $(this).find(".inner-shadow").addClass("inner-shadow-selected"), $(this).siblings().removeClass("label-selected"), $(this).siblings().find(".inner-shadow").removeClass("inner-shadow-selected")
}), $(".galleryMore").on("click", function () {
    $(".noMore").toggleClass("hide"), "Развернуть ещё" == $(".galleryMore").html() ? $(".galleryMore").html("Свернуть") : $(".galleryMore").html("Развернуть ещё")
}), $(".reviewMore").on("click", function () {
    $(".hidden-review").toggleClass("hide"), "Посмотреть предыдущие..." == $(".reviewMore").html() ? $(".reviewMore").html("Свернуть") : $(".reviewMore").html("Посмотреть предыдущие...")
}), $(".brick").venobox();