$(document).ready(function() {
    // Menangani klik tombol "Search"
    $('#searchButton').click(function() {
        doSearch();
    });

    // Menangani peristiwa keypress pada input
    $('#searchh').keypress(function(event) {
        // Cek jika tombol Enter (kode 13) ditekan
        if (event.which === 13) {
            event.preventDefault(); // Mencegah tindakan default form (misalnya submit)
            doSearch();
        }
    });

    // Fungsi untuk melakukan pencarian Google
    function doSearch() {
        // Mendapatkan nilai input
        const searchTerm = $('#searchh').val();

        // Melakukan pencarian Google dengan mengarahkan ke URL pencarian Google
        const googleSearchURL = `https://www.google.com/search?q=${encodeURIComponent(searchTerm)}`;
        window.open(googleSearchURL, '_blank');

        // Setelah membuka tab baru, fokus ke elemen input dan kosongkan nilai
        $('#searchh').val('');
        $('#searchh').focus();
    }
});