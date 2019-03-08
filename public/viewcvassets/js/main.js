jQuery(document).ready(function ($) {


    /*======= Skillset *=======*/


    $('.level-bar-inner').css('width', '0');

    $(window).on('load', function () {

        $('.level-bar-inner').each(function () {

            var itemWidth = $(this).data('level');

            $(this).animate({
                width: itemWidth
            }, 800);

        });

    });

    $(".gear-check").click(function () {
        $(".colo-obtion").fadeToggle();
    });

    var coloLi=$(".colo-obtion ul li");
    coloLi
        .eq(0).css("backgroundColor","#42A8C0").end()
        .eq(1).css("backgroundColor","#4CAC9D").end()
        .eq(2).css("backgroundColor","#5BB66F").end()
        .eq(3).css("backgroundColor","#A15277").end()
        .eq(4).css("backgroundColor","#FDA246").end()
        .eq(5).css("backgroundColor","#4B6A78");


    coloLi.click(function () {
      $("#theme-style").attr("href",$(this).attr("data-value"));
    });

});