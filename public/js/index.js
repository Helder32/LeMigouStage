// SideNav
function openNav() {
    document.getElementById("mySidenav").style.width = "20%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function closeLogin() {
    document.getElementById("log").style.width = "0";
}


// SideNav Button Initialization
$(".button-collapse").sideNav();

// SideNav Scrollbar Initialization
var sideNavScrollbar = document.querySelector('.custom-scrollbar');
Ps.initialize(sideNavScrollbar);


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// show Password
function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
} 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Get the modal for the customer view or article view
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == 'modal') {
        modal.style.display = "none";
    }
};

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Get the all customers or article
$(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////bin

    // code js for the customers search
    function searchCustomer() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchCust");
        filter = input.value.toUpperCase();
        table = document.getElementById("customerTable");
        tr = table.getElementsByTagName("tr");
    
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        }
                        else {
                        tr[i].style.display = "none";
                        }
                }
        }
    }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// code js for the articles search
    function searchArticle() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchArt");
        filter = input.value.toUpperCase();
        table = document.getElementById("articleTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        }
                    else {
                        tr[i].style.display = "none";
                    }
                }
        }
    }



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//Fonction pour le calcul de la TVA


function calcule_ht_ttc(event) // fonction de calcul
{
    var prix_ht = $('input[class="prix_ht"]').val();
    var quantite = $('input[class="quantite"]').val();
    var taux_tva = $('input[class="taux_tva"]').val();
    var prix_ttc = $('input[class="prix_ttc"]').val();
    var taux_remise = $('input[class="taux_remise"]').val();
    var total_remise = prix_ttc-(prix_ttc*(1-taux_remise/100));

    if(event.target.name=='prix_ttc')
    {
        var new_prix_ht = quantite*(prix_ttc/(1+taux_tva/100));		
        $('input[class="prix_ht"]').val(new_prix_ht);
    }
    else
    {
        var new_prix_ttc = quantite*(prix_ht*(1+taux_tva/100))-total_remise.toFixed(1);		
        $('input[class="prix_ttc"]').val(new_prix_ttc);
    }	
}


// $(function() // jQuery
// {
//     $('.myForm input').bind('keyup mouseup', calcule_ht_ttc);// appel de la fonction de calcul lors d'un événement 'keyup' ou 'mouseup'
    
// });


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//FONCTION POUR L'AUTOCOMPLETE DES INPUTS DE RECHERCHE

// console.log($('#result').data('result'));
// var rere= $('#result').data('result');

// function myTabResult(){
//     var rere= $('#result').data('result');
//     var tabres =[];

// for (var i=0; i<rere.length; i++){
//     console.log(rere[i].nom);
//     tabres.push(rere[i].nom);
// }
// $('#search').autocomplete({
//     source: tabres,
//     minLength:1
// });
// }



// function myAutoComplete(event){
//     $('#search').autocomplete({
//     source: myTabResult(),
//     minLength:1
// });
// }