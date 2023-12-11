$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.steps ul').addClass('step-2');
            } else {
                $('.steps ul').removeClass('step-2');
            }

            if ( newIndex === 2 ) {
                $('.steps ul').addClass('step-3');
            } else {
                $('.steps ul').removeClass('step-3');
            }

            if ( newIndex === 3 ) {
                $('.steps ul').addClass('step-4');
            } else {
                $('.steps ul').removeClass('step-4');
            }

            if ( newIndex === 4 ) {
                $('.steps ul').addClass('step-5');
            } else {
                $('.steps ul').removeClass('step-5');
            }

            if ( newIndex === 5 ) {
                $('.steps ul').addClass('step-6');
            } else {
                $('.steps ul').removeClass('step-6');
            }

            if ( newIndex === 6 ) {
                $('.steps ul').addClass('step-7');
            } else {
                $('.steps ul').removeClass('step-7');
            }

            if ( newIndex === 7 ) {
                $('.steps ul').addClass('step-8');
            } else {
                $('.steps ul').removeClass('step-8');
            }

            if ( newIndex === 8 ) {
                $('.steps ul').addClass('step-9');
            } else {
                $('.steps ul').removeClass('step-9');
            }

            if ( newIndex === 9 ) {
                $('.steps ul').addClass('step-10');
            } else {
                $('.steps ul').removeClass('step-10');
            }

            if ( newIndex === 10 ) {
                $('.steps ul').addClass('step-11');
            } else {
                $('.steps ul').removeClass('step-11');
            }

            if ( newIndex === 11 ) {
                $('.steps ul').addClass('step-12');
            } else {
                $('.steps ul').removeClass('step-12');
            }

            if ( newIndex === 12 ) {
                $('.steps ul').addClass('step-13');
            } else {
                $('.steps ul').removeClass('step-13');
            }

            if ( newIndex === 13 ) {
                $('.steps ul').addClass('step-14');
            } else {
                $('.steps ul').removeClass('step-14');
            }

            if ( newIndex === 14 ) {
                $('.steps ul').addClass('step-15');
                $('.actions ul').addClass('step-last');
            } else {
                $('.steps ul').removeClass('step-15');
                $('.actions ul').removeClass('step-last');
            }

            return true; 
        },
        labels: {
            finish: "Done",
            next: "Next",
            previous: "Previous"
        }
    });
    // Custom Steps Jquery Steps
    $('.wizard > .steps li a').click(function(){
    	$(this).parent().addClass('checked');
		$(this).parent().prevAll().addClass('checked');
		$(this).parent().nextAll().removeClass('checked');
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Checkbox
    // $('.checkbox-circle label').click(function(){
    //     $('.checkbox-circle label').removeClass('active');
    //     $(this).addClass('active');
    // })
})
