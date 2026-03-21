<div class="js-cookie-consent cookie-consent"
     style="position:fixed; bottom:0; left:0; width:100%; background:#111; color:#fff; padding:20px; z-index:99999; box-shadow:0 -2px 10px rgba(0,0,0,0.2);">

    <div style="max-width:1200px; margin:0 auto; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px;">

        <span class="cookie-consent__message" style="font-size:14px;">
            We use cookies to improve your browsing experience, serve personalized ads, and analyze traffic.
            By clicking "Accept", you consent to our use of cookies.
        </span>

        <div>
            <button class="js-cookie-consent-decline"
                    style="background:#444; color:#fff; border:none; padding:8px 18px; cursor:pointer; margin-right:10px;">
                Cancel
            </button>

            <button class="js-cookie-consent-agree"
                    style="background:#0d6efd; color:#fff; border:none; padding:8px 18px; cursor:pointer;">
                Accept
            </button>
        </div>

    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const declineBtn = document.querySelector('.js-cookie-consent-decline');
    const consentBox = document.querySelector('.js-cookie-consent');

    if (declineBtn) {
        declineBtn.addEventListener('click', function () {
            consentBox.style.display = 'none';
        });
    }
});
</script>