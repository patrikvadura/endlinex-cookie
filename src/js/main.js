function checkCookie() {
    return document.cookie.split('; ').includes('cookieConsent=true');
}

document.addEventListener("DOMContentLoaded", function (){
    let cookieModal = document.getElementById('cookieModal');
    let cookieDialog = document.getElementById('cookieDialog');
    let settingsDialog = document.getElementById('settingsDialog');
    let settingsBtn = document.getElementById('settingsBtn');

    let settingsOpen = false;

    // Hide settings dialog initially
    settingsDialog.style.display = 'none';

    if (!checkCookie()) {
        cookieModal.style.display = 'block';
        cookieDialog.style.display = 'block';
    }

    document.getElementById('acceptBtn').addEventListener('click', function () {
        let date = new Date();
        date.setFullYear(date.getFullYear() + 1);
        document.cookie = `cookieConsent=true; expires=${date.toUTCString()}; path=/`;
        cookieModal.style.display = 'none';
        cookieDialog.style.display = 'none';
        settingsDialog.style.display = 'none';
    });

    document.getElementById('denyBtn').addEventListener('click', function () {
        document.cookie = 'cookieConsent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        cookieModal.style.display = 'none';
        cookieDialog.style.display = 'none';
    });

    settingsBtn.addEventListener('click', function () {
        settingsOpen = !settingsOpen;
        settingsDialog.style.display = settingsOpen ? 'block' : 'none';
        settingsBtn.innerText = settingsOpen ? 'Uložit' : 'Nastavení';
    });
});