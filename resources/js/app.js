import './bootstrap';

const csrf = document.querySelector('meta[name="csrf-token"]')?.content;

let Modals = {
    init: function () {
        let modalButtons = document.querySelectorAll('*[data-modal-toggle]');
        for(let i = 0; i < modalButtons.length; i++) {
            let modalButton = modalButtons[i];
            modalButton.onclick = function (e) {
                let modal = document.getElementById(e.currentTarget.dataset.modalToggle);
                Modals.showModal(modal)
            }
        }
    },
    showModal: function (modal) {
        modal.classList.remove('hidden');
        modal.onclick = function(event) {
            if (event.target.classList.contains('items-end')) {
                modal.classList.add("hidden");
            }
        }
        let closeButtons = modal.querySelectorAll('.close');
        if (closeButtons.length) {
            for(let i = 0; i < closeButtons.length; i++) {
                closeButtons[i].onclick = function () {
                    modal.classList.add("hidden");
                }
            }
        }
    },
    showEmptyModal: function (content) {
        let modal = document.getElementById('empty-modal');
        let contentBlock = document.getElementById('empty-modal-content');
        contentBlock.innerHTML = content;
        this.showModal(modal);
    }
}

Modals.init();

let Events = {
    routeGetEventModal: '/event/{event}/modal_info',
    init: function () {
        this.initShowTriggers();
        this.initDeleteTriggers();
    },
    initShowTriggers: function () {
        let eventCardButtons = document.querySelectorAll('.show-event-info');
        for(let i = 0; i < eventCardButtons.length; i++) {
            let eventButton = eventCardButtons[i];
            eventButton.onclick = this.showEventModal;
        }
    },
    initDeleteTriggers: function () {
        let deleteCardButtons = document.querySelectorAll('.delete-event');
        for(let i = 0; i < deleteCardButtons.length; i++) {
            let eventButton = deleteCardButtons[i];
            eventButton.onclick = this.showDeleteEventModal;
        }
    },
    showEventModal: function (e) {
        if (e.target.dataset.id !== null) {
            getRequest(Events.routeGetEventModal.replace('{event}', e.target.dataset.id), {}, function (data) {
               Modals.showEmptyModal(data);
            });
        }
    },
    showDeleteEventModal: function (e) {
        if (e.currentTarget.dataset.id !== undefined) {
            let modal= document.getElementById('modal-event-delete');
            modal.querySelector('[name="event"]').value = e.currentTarget.dataset.id;
            Modals.showModal(modal);
        }
    }
}

Events.init();

function getRequest(url, data, callback = null) {
    data['_token'] = csrf;
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", url + '?' + new URLSearchParams(data).toString());
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send();
    if (callback !== null && isFunction(callback)) {
        xhttp.onload = () => {
            if (xhttp.status === 200) {
                callback(xhttp.responseText)
            }
        }
    }
}

function isFunction(functionToCheck) {
    return functionToCheck && {}.toString.call(functionToCheck) === '[object Function]';
}
