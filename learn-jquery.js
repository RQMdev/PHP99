$(document).ready(function(){

    $('li').bind('click', function(){
        var $btn = $(this);
        switch ($btn.attr("class")){
            case "list1":
                $section = ".section1";
                break;
            case "list2":
                $section = ".section2";
                break;
            case "list3":
                $section = ".section3";
                break;
            case "list4":
                $section = ".section4";
                break;
            case "list5":
                $section = ".section5";
                break;
            case "list6":
                $section = ".section6";
                break;
            case "list7":
                $section = ".section7";
                break;
        };
        

        // animate the step out
        $('.is-showing').addClass('animate-out');

        // animate the step in
        setTimeout(function(){
            $('.is-showing').removeClass('animate-out is-showing');
            $($section).addClass('animate-in is-showing');
            $('.is-active').removeClass('is-active');
            $btn.addClass('is-active');
        }, 1000);
        
        // after the animation, adjust classes
        setTimeout(function(){
            $($section).removeClass('animate-in');
        }, 2000);

    });

});