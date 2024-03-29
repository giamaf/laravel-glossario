const deleteForms = document.querySelectorAll('.delete-form');
const modal = document.getElementById('modal');
const modalLabel = document.getElementById('modalLabel');
const modalBody = document.querySelector('.modal-body');
const deleteButton = document.getElementById('modal-delete-confirmation');

// Variabile utile per svuotare il riferimento al form precedente
let activeForm = null;

// Mi metto in ascolto su ogni tasto cestino...
deleteForms.forEach(form => {

    // Al click sul tasto cestino
    form.addEventListener('submit', e => {
        // Blocco il ricarimento della pagina
        e.preventDefault();

        // Il form cliccato è uguale al form attivo
        activeForm = form;

        // Inserisco contenuto all'interno della modale
        modalLabel.innerText = 'Conferma cancellazione';
        if (form.dataset.term) {
            modalBody.innerText = `Sei sicuro di voler cancellare il termine "${form.dataset.term}"?`;
        } else {
            modalBody.innerText = `Sei sicuro di voler svuotare il cestino?`;

        }
        deleteButton.classList.add('btn-danger');
    });

});

deleteButton.addEventListener('click', () => {
    if (activeForm) activeForm.submit();

})

modal.addEventListener('hidden.bs.modal', () => {
    activeForm = null;
})
