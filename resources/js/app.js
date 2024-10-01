import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

// Seleziona tutti i pulsanti con la classe 'deleteComic'
const delete_buttons = document.querySelectorAll('.deleteComic');

delete_buttons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const modal = document.getElementById('deleteComicModal');

        const bootstrap_modal = new bootstrap.Modal(modal);

        bootstrap_modal.show();

        const buttonDelete = modal.querySelector('.confirmDelete');

        buttonDelete.addEventListener('click', function(){
            button.parentElement.submit()
        })
    });
});