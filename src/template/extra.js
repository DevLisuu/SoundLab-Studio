$(document).ready(function() {
    $(".add-to-cart").click(function() {
        const that = this;
        const originalText = $(this).text();

        $(this).attr("disabled", true);
        $(this).text("Dodano");
        
        setTimeout(function() {
            $(that).attr("disabled", false);
            $(that).text(originalText);
        }, 2000); 
    })
})