$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Previous',
            next : 'Next Step',
            submit : 'Submit',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            var fullname = $('#user_send_fund_amount').val() ;
            var email = $('#user_receive_fund_amount').val();
            var phone = $('#user_receive_fund_account').val();
            var address = $('#user_total_pay').val();

            $('#user_send_fund_amount-val').text(fullname);
            $('#user_receive_fund_amount-val').text(email);
            $('#user_receive_fund_account-val').text(phone);
            $('#user_total_pay-val').text(address);
            return true;
        }
    });

    $('input').keyup(function(){ // run anytime the value changes
        var firstValue  = Number($('#user_send_fund_amount').val());
        var secondValue = Number($('#fixed_amount').val());
        $("input[name=user_receive_fund_amount]").val(firstValue*secondValue);

        var two = Number($('#charge').val());
        var three = Number($('#discount').val());
        $("input[name=user_total_pay]").val(firstValue+two-three);
        // document.getElementById('user_total_pay').value = firstValue+two-three ;
    });

});
