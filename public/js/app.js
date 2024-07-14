const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

/*datatable initiation */



// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})

const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



// const switchMode = document.getElementById('switch-mode');

// switchMode.addEventListener('change', function () {
// 	if(this.checked) {
// 		document.body.classList.add('dark');
// 	} else {
// 		document.body.classList.remove('dark');
// 	}
// })
$(document).ready(function() {
	// Écouteur d'événement sur le lien de déconnexion
	$('#logout-link').on('click', function(e) {
		e.preventDefault();
		// Afficher la boîte de dialogue SweetAlert pour confirmation
		Swal.fire({
			title: 'Déconnexion',
			text: 'Êtes-vous sûr de vouloir vous déconnecter ?',
			icon: 'question',
			showCancelButton: true,
			confirmButtonColor: '#3D5EE1',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Oui',
			cancelButtonText: 'Non',
			customClass:{
				popup: 'z-index'
			}
		}).then((result) => {
			if (result.isConfirmed) {
				// Soumettre le formulaire de déconnexion
				document.getElementById('disconnect-form').submit();
			}
		});
	});
});
$(document).ready(function() {
	// Écouteur d'événement sur le bouton de suppression
	$('.delete-btn').on('click', function(e) {
		e.preventDefault();

		// Afficher la boîte de dialogue SweetAlert pour confirmation
		Swal.fire({
			title: 'Êtes-vous sûr de vouloir supprimer cet élément ?',
			text: 'Cette action est irréversible !',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#d33',
			cancelButtonColor: '#3085d6',
			confirmButtonText: 'Oui, supprimer',
			customClass:{
				popup: 'z-index'
			},
			cancelButtonText: 'Annuler'
		}).then((result) => {
			if (result.isConfirmed) {
				// Soumettre le formulaire de suppression correspondant
				$(e.target).closest('td').find('.delete-form').submit();
			}
		});
	});
});
$(document).ready(function() {
    $('.bxs-bell').each(function(i, e) {
        $(e).on('click', function() {
            Swal.fire({
                title: 'Notification',
                text: 'Les notifications vous concernant sont envoyées directement sur votre boite mail. Merci !',
                icon: 'info',
				customClass:{
					popup: 'z-index'
				},
                confirmButtonText: 'OK'
            });
        });
    });
});
var langueOptions = {
    "sEmptyTable":     "Aucune donnée disponible dans le tableau",
    "sInfo":           "Affichage de  _START_ à _END_ sur _TOTAL_ ",
    "sInfoEmpty":      "Affichage de  0 à 0 sur 0 entrées",
    "sInfoFiltered":   "(filtré à partir de _MAX_  au total)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ",",
    "sLengthMenu":     "Afficher _MENU_ éléments",
    "sLoadingRecords": "Chargement...",
    "sProcessing":     "Traitement...",
    "sSearch":         "Rechercher :",
    "sZeroRecords":    "Aucun résultat trouvé",
    "oPaginate": {
        "sNext":     "Suivant",
        "sPrevious": "Précédent"
    },
    "oAria": {
        "sSortAscending":  ": activer pour trier la colonne par ordre croissant",
        "sSortDescending": ": activer pour trier la colonne par ordre décroissant"
    },
    "select": {
        "rows": {
            "_": "%d lignes sélectionnées",
            "0": "Aucune ligne sélectionnée",
            "1": "1 ligne sélectionnée"
        }
    }
};
let table = new DataTable('#myTable',{
	language: langueOptions,

});

