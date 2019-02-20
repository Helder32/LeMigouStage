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
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

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



