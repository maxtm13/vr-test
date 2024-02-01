/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/

$(document).ready( function (){
        /*     Аккордеон для элементов  FAQ */
        // accordion
        // $(".accordion-head").on("click", function (e) {
        //     e.preventDefault();
        //     if (!$(this).next().hasClass("collapsing")) {
        //         $(this).toggleClass("accordion-open");
        //         $(this).toggleClass("accordion-close");
        //     }
        // });

// Desktop
        $(".accordion-head").on("click",clk_accord);

        function clk_accord(){
            // $('.panel-collapse-new').not($(this).next()).slideUp(1000);
            $(".panel-collapse").not($(this).next()).slideUp(300);
            $(this).next().slideToggle(300);
            $(this).toggleClass('active')
            $('.accordion-head').not($(this)).removeClass('active');
        }

//Mobile
        $(".accordion-head-mobile").on("click",clk_accordMob);

        function clk_accordMob(){
            // $('.panel-collapse-new').not($(this).next()).slideUp(1000);
            $(".panel-collapse-mobile").not($(this).next()).slideUp(300);
            $(this).next().slideToggle(300);
            $(this).toggleClass('active')
            $('.accordion-head-mobile').not($(this)).removeClass('active');
        }
// inner accordeon
        $(".my_tabs-mobile-title").on("click",clk_accordMob2);

        function clk_accordMob2(){
            // $('.panel-collapse-new').not($(this).next()).slideUp(1000);
            $(".tab-content-mobile").not($(this).next()).slideUp(300);
            $(this).next().slideToggle(300);
            $(this).toggleClass('active')
            $(".my_tabs-mobile-title").not($(this)).removeClass('active');
        }

    }
)

