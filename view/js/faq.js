$(document).ready(function () {
    $('#toggleButton').click(function () {
        $('#faqCard').toggleClass('active');
    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.faq-card').length) {
            $('#faqCard').removeClass('active');
        }
    });
});
