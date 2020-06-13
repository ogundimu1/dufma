$(document).ready(function() {
    $('form.file input').change(function() {
        console.log(this.files);
        $('form p').text(this.files[0].name + " file(s) selected");
    });


    $('div#headingOne').click(function() {
        $(this).addClass("active-accordion");
        $('#headingOne.btn-link').addClass("text-white");
        $('div#faceRecognition').addClass("d-none");
        $('div#ageAndGenderClassification').addClass("d-none");
        $('div#bgCleanUp').removeClass("d-none");
        $('div#headingTwo').removeClass("active-accordion");
        $('div#headingThree').removeClass("active-accordion");
        $('div#headingFour').removeClass("active-accordion");
        $('div#passiveLiveness').addClass("d-none");
    });

    $('div#headingTwo').click(function() {
        $('div#headingOne').removeClass("active-accordion");
        $('div#headingThree').removeClass("active-accordion");
        $('div#headingFour').removeClass("active-accordion");
        $('div#ageAndGenderClassification').removeClass("d-none");
        $('div#bgCleanUp').addClass("d-none");
        $('div#passiveLiveness').addClass("d-none");
        $('div#faceRecognition').addClass("d-none");
        $(this).addClass("active-accordion");
        $('#headingTwo.btn-link').addClass("text-white");
    });

    $('div#headingThree').click(function() {
        $(this).addClass("active-accordion");
        $('div#bgCleanUp').addClass("d-none");
        $('div#faceRecognition').removeClass("d-none");
        $('div#passiveLiveness').addClass("d-none");
        $('div#ageAndGenderClassification').addClass("d-none");
        $('div#headingOne').removeClass("active-accordion");
        $('div#headingTwo').removeClass("active-accordion");
        $('div#headingFour').removeClass("active-accordion");
    });

    $('div#headingFour').click(function() {
        $(this).addClass("active-accordion");
        $('div#bgCleanUp').addClass("d-none");
        $('div#passiveLiveness').removeClass("d-none");
        $('div#faceRecognition').addClass("d-none");
        $('div#headingOne').removeClass("active-accordion");
        $('div#ageAndGenderClassification').addClass("d-none");
        $('div#headingTwo').removeClass("active-accordion");
        $('div#headingThree').removeClass("active-accordion");
    });
});