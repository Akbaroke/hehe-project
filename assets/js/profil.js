$(".hal-profil").css("color", "#EA8D30");

$('.hal-profil').on('click',function(){
    $(this).css("color", "#EA8D30");
    $(".hal-alamat").css("color", "#64646466");
    $(".data-profile").css("display", "flex");
    $(".data-alamat").css("display", "none");
});

$('.hal-alamat').on('click',function(){
    $(this).css("color", "#EA8D30");
    $(".hal-profil").css("color", "#64646466");
    $(".data-alamat").css("display", "flex");
    $(".data-profile").css("display", "none");
});