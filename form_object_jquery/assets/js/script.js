$(document).ready(function() {
    $('#form').submit(function(e) {
        e.preventDefault();
        var obj = {
            name: {
                fname: $('input#fname').val(),
                lname: $('input#lname').val(),
            },
            Gender: $('input[name=gen]:checked').val(),
            dob: $('input#dob').val(),
            blood_group: $('select#bg').val(),
            email: $('input#email').val(),
            phone: $('input#phone').val(),
            language: {
                lan1: $('input#lang1:checked').val(),
                lan2: $('input#lang2:checked').val(),
                lan3: $('input#lang3:checked').val(),
                lan4: $('input#lang4:checked').val(),
            },
            address: $('textarea#address').val(),
            password: $('input#password').val(),
        }
        alert('Thank You');
        console.log(obj);
    });
});