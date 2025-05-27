document.querySelector('.custom-file-button').addEventListener('click', function() {
    document.getElementById('imgVideo').click();
});
document.getElementById('imgVideo').addEventListener('change', function() {
    var fileChosen = document.getElementById('file-chosen');
    if (this.files.length > 0) {
        fileChosen.textContent = this.files[0].name;
        fileChosen.style.display = 'inline';
    } else {
        fileChosen.textContent = 'Aucun fichier choisi';
        fileChosen.style.display = 'none';
    }
});