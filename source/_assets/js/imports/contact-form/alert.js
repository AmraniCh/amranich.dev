import templates from "./templates";

export default function initAlert(form) {
    const alertsDiv = form.querySelector('.alerts');

    const ERROR_TYPE = 'error';
    const SUCCESS_TYPE = 'success';

    /**
     * @param {string|array} message
     * @param {string} message
     */
    function doAlert({ message, type }) {
        const component = templates[type === SUCCESS_TYPE ? 'successAlert' : 'errorAlert'];

        alertsDiv.classList.remove('hidden');

        alertsDiv.innerHTML = '';

        if (typeof message === 'string') {
            alertsDiv.innerHTML += component(message);
        } else if (Array.isArray(message)) {
            alertsDiv.innerHTML += message.map(msg => component(msg)).join('');
        }
    }

    doAlert.clear = () => {
        alertsDiv.classList.add('hidden');
    }

    doAlert.ERROR_TYPE = ERROR_TYPE;
    doAlert.SUCCESS_TYPE = SUCCESS_TYPE;

    return doAlert;
}