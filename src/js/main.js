function checkCookie() {
    return document.cookie.split('; ').includes('cookieConsent=true');
}

document.addEventListener("DOMContentLoaded", function(){
    let cookieModal = document.getElementById('cookieModal');
    let cookieDialog = document.getElementById('cookieDialog');
    let settingsModal = document.getElementById('settingsDialog');
    let settingsBtn = document.getElementById('settingsBtn');

    let settingsOpen = false;

    if (!checkCookie()) {
        cookieModal.classList.remove('hidden');
        cookieDialog.classList.remove('hidden');
    }

    document.getElementById('acceptBtn').addEventListener('click', function() {
        let date = new Date();
        date.setFullYear(date.getFullYear() + 1);
        document.cookie = `cookieConsent=true; expires=${date.toUTCString()}; path=/`;
        cookieModal.classList.add('hidden');
        cookieDialog.classList.add('hidden');
    });

    document.getElementById('denyBtn').addEventListener('click', function() {
        document.cookie = 'cookieConsent=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
        cookieModal.classList.add('hidden');
        cookieDialog.classList.add('hidden');
    });

    settingsBtn.addEventListener('click', function() {
        settingsOpen ? settingsModal.classList.add('hidden') : settingsModal.classList.remove('hidden'); // Zobrazi se nastaveni nebo ho skryje
        settingsBtn.innerText = settingsOpen ? 'Nastavení' : 'Uložit';
        settingsOpen = !settingsOpen;
    });

});