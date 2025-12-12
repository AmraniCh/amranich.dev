import initAlert from "./alert";

export default function () {
    const form = document.getElementById('contactMeForm');
    const submitBtn = form.querySelector('button[type="submit"]');
    const resetBtn = form.querySelector('button[type="reset"]');
    const alert = initAlert(form);

    function toggleLoading(loading) {
        submitBtn.classList[loading ? 'add' : 'remove']('loading');
        submitBtn.disabled = loading;
    }

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        alert.clear();
        toggleLoading(true);

        grecaptcha.ready(function () {
            grecaptcha.execute('6LePjgIsAAAAAChBlEkVTlzVjXpmXFoOqPzcpUIp', { action: 'submit' }).then(async function (token) {
                const formData = new FormData(form);
                const res = await fetch('/backend/send_email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'X-REQUESTED-WITH': 'XMLHttpRequest'
                    },
                    body: new URLSearchParams({
                        fullname: formData.get('fullname'),
                        email: formData.get('email'),
                        message: formData.get('message'),
                        "g-recaptcha-response": token
                    })
                }).catch(err => {
                    alert({
                        message: "A client error occurred while sending your email: " + err.message,
                        type: alert.ERROR_TYPE
                    });
                    toggleLoading(false);
                    throw err;
                });

                toggleLoading(false);

                const json = await res.json();
                const message = json.message;
                const isSuccess = json.status === 'success';

                isSuccess && resetBtn.click();

                alert({
                    message,
                    type: isSuccess ? alert.SUCCESS_TYPE : alert.ERROR_TYPE
                });
            });
        });
    });
}