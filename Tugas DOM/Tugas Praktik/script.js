function tambahTugas() {
    let teks = document.getElementById("inputTugas");

    if (!teks.value) {
        alert("Input tidak boleh kosong!")
    } else {
        let tugas = document.createElement("li");
        tugas.innerText = teks.value;
        
        let hapusTugas = document.createElement("button");
        hapusTugas.innerHTML = "Hapus";
        hapusTugas.className = "hapusTugas";
        
        document.getElementById("containerTugas").appendChild(tugas)
        tugas.appendChild(hapusTugas)
        
        hapusTugas.addEventListener("click", function(a) {
            tugas.remove();
        })
    }
    teks.value = "";
}