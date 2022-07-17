$(document).ready(function(){

    var inputed = false;

    // confirmation step
    var secondConfirm = $('#2nd-confirm');
    var thirdConfirm = $('#3rd-confirm');
    var finalConfirm = $('#final-confirm');

    // all form step
    var firstBtn =  $('#first-step').find('.next');
    var secondBtn =  $('#second-step').find('.next');
    var thirdBtn =  $('#third-step').find('.next');
    
    function nextStep() {
        $('#first-step').hide(500);
        $('#second-step').show(500);
        secondConfirm.addClass('active');
    }

    function secondStep() {
        $('#second-step').hide(500);
        $('#third-step').show(500);
        thirdConfirm.addClass('active');
    }

    function finalStep() {
        $('#third-step').hide(500);
        $('#fourth-step').show(0);
        finalConfirm.addClass('active');
    }

    firstBtn.on('click', function(){
        event.preventDefault();
        var firstName = $('#first-step').find('input#firstName').val();
        var lastName = $('#first-step').find('input#lastName').val();
        var emailAdd = $('#first-step').find('input#emailAdd').val();
        var dOb = $('#first-step').find('input#dOb').val();
        if(firstName.length === 0 || lastName.length === 0 || emailAdd.length === 0 || dOb.length === 0) {

        } else {
            nextStep();
        }
    });
    secondBtn.on('click', function(){
        event.preventDefault();
        var countryName = $('#second-step').find('input#countryName').val();
        var addressLine = $('#second-step').find('input#address-line').val();
        var addressLine2 = $('#second-step').find('input#address-line-2').val();
        var cityName = $('#second-step').find('input#cityName').val();
        var mobileNumber = $('#second-step').find('input#mobileNumber').val();
        if(countryName.length === 0 || addressLine.length === 0 || addressLine2.length === 0 || cityName.length === 0 || mobileNumber.length === 0) {

        } else {
            secondStep();
        }
    });
    thirdBtn.on('click', function(){
        event.preventDefault();
        var userName = $('#third-step').find('input#userName').val();
        var passwordNo = $('#third-step').find('input#passwordNo').val();
        var passwordAgain = $('#third-step').find('input#passwordAgain').val();
        var securityQuote = $('#third-step').find('input#securityQuote').val();
        if(userName.length === 0 || passwordNo.length === 0 || passwordAgain.length === 0 || securityQuote.length === 0) {

        } else {
            finalStep();
        }
    });

    $('.single-form').each(function(){
        var inputed = false;
        var allValue = $(this).find('input').val();
        var buttonNext = $(this).find('.next');
        $(this).find('input').each(function(){
            $(this).focusin(function(){
                if($(this).val().length === 0) {
                    $(this).siblings('label').addClass('active');
                    console.log('nothing here');
                } 
            });
            $(this).focusout(function(){
                if($(this).val().length === 0) {
                    $(this).siblings('label').removeClass('active');
                    console.log('nothing here');
                }
            });
        });
    });
   
});