import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const deleteButtons = document.querySelectorAll('.confirm-delete-button[type="submit"]'); //  vado a richiamare il button dall'index.blade.php

deleteButtons.forEach((button) => {
    button.addEventListener('click', function (event) {
        //Evito che il record sia eliminato subito dal database.
        event.preventDefault();
        const comicTitle = button.getAttribute('data-title');
        //Recupero la modale creata attraverso l'id.
        const modal = document.getElementById('delete-project-modal');
        //Creo una nuova modale con i metodi di bootstrap a partire da quella realizzata nel file modal_delete.
        const bootstrapModal = new bootstrap.Modal(modal);
        //Mostro la modale.
        bootstrapModal.show();
        const modalContent = modal.querySelector('#modal-item-title');
        modalContent.textContent = comicTitle;
        //Recupero il pulsante di cancellazione del record;
        const deleteButton = modal.querySelector('#confirm-delete');
        //Metto in ascolto il pulsante per intercettare il click;
        deleteButton.addEventListener('click', () => {
            button.parentElement.submit();
        })
    })
})