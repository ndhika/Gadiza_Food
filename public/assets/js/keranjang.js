document.getElementById("order-btn").addEventListener("click", function() {
    //Sembunyikan tombol order
    this.style.display = "none";

    //Tampilkan pesan "Pesananmu sedang diproses"
    document.getElementById("processing-message").style.display = "block";
});