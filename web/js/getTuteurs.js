

setTuteurs();
$("#form-label-name").change(function(){
    setTuteurs();
})

function setTuteurs(){
    $.getJSON('getTuteurs/'+$( "#form-label-name option:selected" )[0].textContent, function (tuteurs) {
        $("#tuteurs").children().remove();

        if(!isEmpty(tuteurs)) {
            tuteurs.forEach(function (tuteur) {
                $("#tuteurs").append(
                    '<option>' + tuteur.lastname + ' ' + tuteur.firstname + '</option>'
                )
            });
        }

    });
}

function isEmpty(obj) {
    for(var key in obj) {
        if(obj.hasOwnProperty(key))
            return false;
    }
    return true;
}