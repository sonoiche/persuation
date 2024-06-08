$(document).ready(function() {
    $('.tabs button').on('click', function() {
        $('.marketers, .solopreneurs, .agencies').addClass('hidden');
        $('.marketers-tab, .solopreneurs-tab, .agencies-tab').removeClass('border-secondary text-secondary');
        $('.li-marketers, .li-solopreneurs, .li-agencies').removeClass('border-b-[3px]');
        var tabId = $(this).attr('aria-controls');
        // alert(tabId);
        var tabContentId = $('.' + tabId).attr('aria-controls');
        $(`.${tabId}`).removeClass('hidden');
        $('.' + tabId).addClass('border-secondary text-secondary');
        $('.li-' + tabId).addClass('border-b-[3px]');
    });

    $('#tabs-1280 button').on('click', function() {
        $('#marketers-1280, #solopreneurs-1280, #agencies-1280').addClass('hidden');
        $('#marketers-tab-1280, #solopreneurs-tab-1280, #agencies-tab-1280').removeClass('border-secondary text-secondary');
        $('#li-marketers-1280, #li-solopreneurs-1280, #li-agencies-1280').removeClass('border-b-[3px]');
        var tabId = $(this).attr('id');
        var tabContentId = $('#' + tabId).attr('aria-controls');
        $(`#${tabContentId}`).removeClass('hidden');
        $('#' + tabId).addClass('border-secondary text-secondary');
        $('#li-' + tabContentId).addClass('border-b-[3px]');
    });

    let modal = $('.modal');
    let modalContent = $('.modal-content');

    $('.open-btn').click(function (e) { 
        e.preventDefault();
        modal.addClass('block');
        modalContent.fadeIn();
        modal.removeClass('hidden');
        modalContent.removeClass('hidden');
        $('.email').val('');
        $('.error-msg').addClass('hidden');
        $('.error-msg').removeClass('flex');
        $('.success-msg').removeClass('flex');
        $('.success-msg').addClass('hidden');
    });

    $('.close-modal').click(function (e) { 
        e.preventDefault();
        modal.addClass('hidden');
        modalContent.addClass('hidden');
        modal.removeClass('block');
        modalContent.fadeOut();
    });

    var texts = ["Soloprenious", "Agencies", "Marketers"]; // array of texts to cycle through
    var index = 0;
    setInterval(function() {
        $(".changing-text").fadeOut(300, function() {
        $(this).html(texts[index]).fadeIn(300);
            index = (index + 1) % texts.length; // cycle through the array
        });
    }, 2000);
});

let templates = [
    '<p class="text-primary font-semibold font-wavehausBold text-center leading-relaxed">"I love the fact that I can design a Landing page based on Marketing psychology. As a marketer I have so many ideas buzzing in my head about how to connect with the users and make them love our producs. Persuation enables me to do that."</p><p class="text-primary font-semibold iphone:text-lg sm:text-xl lg:text-2xl xl:text-3xl font-malishroman text-center pt-10">Sam,</p><p class="text-primary font-medium iphone:text-lg sm:text-xl lg:text-2xl xl:text-3xl font-malishroman text-center pt-5">D2C Growth Marketer, CRED</p>',
    '<p class="text-primary font-semibold font-wavehausBold text-center leading-relaxed">"Being a founder, I\'m all about finding the most skillful resources in an optimal manner. When I first came accross Persuation, I was hooked by the fact that my landing pages are built with the help of proven Marketing Intelligence at ridiculously low cost!"</p><p class="text-primary font-semibold iphone:text-lg sm:text-xl lg:text-2xl xl:text-3xl font-malishroman text-center pt-20">Aayush Mazumder,</p><p class="text-primary font-medium iphone:text-lg sm:text-xl lg:text-2xl xl:text-3xl font-malishroman text-center pt-5">Founder & CEO, Foodiverse</p>'
]; // array of templates
let currentTemplate = 0;

function changeTemplate() {
    // get the div element
    let div = $(".testimonial-element");

    // change the template
    div.html(templates[currentTemplate]);

    // increment the current template index
    currentTemplate = (currentTemplate + 1) % templates.length;

    // schedule the next change
    // setTimeout(changeTemplate, 5000); // 5000ms = 5 seconds
}

// start the timer
changeTemplate();