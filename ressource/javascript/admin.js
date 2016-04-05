/**
 * Created by louyo on 05/04/2016.
 */
function admin(){
    this.consolelog = function (log){
        console.log(log);
    }

    this.alert = function (alert) {
        alert(alert);
    }

    this.value_select_site = function (indice) {
        console.log(indice);
        $.ajax({
            type    : "POST",
            url     : "admin_proc.php",
            data    :
            {
                indice : indice
            },
            async    : true,
            dataType : "json",
            success : function(data)
            {
                $('#myModal').on('shown.bs.modal', function (e) {
                    $(".modal-body").empty().append(data["lien"]);
                    $(".modal-body").append(data["image"]);
                    $(".modal-body").append(data["nom"]);
                });
            },
            error : function(data){
                console.log("error");
            }

        });
    }
};

var admin = new admin();

$(document).ready(function(){
    $('.coucou').click(function() {
        $(".modal-body").children().remove();
        select = document.getElementById("site_select");
        choice = select.selectedIndex  // Récupération de l'index du <option> choisi
        site_select = select.options[choice].value; // Récupération du texte du <option> d'index "choice"
        admin.value_select_site(site_select);
    });

    $('#myModal').on('hidden.bs.modal', function (e) {
        $(".modal-body").empty();
    });
});