import initAlert from "./alert";

export default function () {
    const form = document.getElementById('contactMeForm');
    const submitBtn = form.querySelector('.primary-btn');
    const alert = initAlert(form);

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        alert.clear();

        submitBtn.classList.add('loading');
        submitBtn.disabled = true;

        const formData = new FormData(form);
        const res = await fetch('send_email.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                fullname: formData.get('fullname'),
                email: formData.get('email'),
                message: formData.get('message')
            })
        });
        const json = await res.json();
        const message = json.message;

        submitBtn.classList.remove('loading');
        submitBtn.disabled = false;

        alert({
            message,
            type: json.status === 'success' ? alert.SUCCESS_TYPE : alert.ERROR_TYPE
        });
    });
}