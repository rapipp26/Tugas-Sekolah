document.getElementById('formGanjilGenap').addEventListener('submit', function(event) {
    event.preventDefault();

    let platNomor = document.getElementById('plat').value;
    let tanggal = parseInt(document.getElementById('tanggal').value);

    if(tanggal < 1 || tanggal > 31) {
        document.getElementById('output').innerText = `Tanggal tidak valid.`;
    } else {
        let nomor = platNomor.split(' ')[1];
        let nomorYangDiCek = nomor[nomor.length - 1]
        let jenisNomorKendaraan = "";

        switch(parseInt(nomorYangDiCek) % 2) {
            case 0 :
                jenisNomorKendaraan = "Genap";
                break;
            case 1:
                jenisNomorKendaraan = "Ganjil";
                break;
            default :
                jenisNomorKendaraan = "Tidak Valid"
        }

        let jenisTanggal = (tanggal % 2 === 0) ? "Genap" : "Ganjil";
        let penentuan = (jenisNomorKendaraan === jenisTanggal) ? "Boleh melintas ✅" : "Tidak boleh melintas ❌";

        document.getElementById('output').innerText = `Kendaraan anda ${penentuan} karena plat anda merupakan ${jenisNomorKendaraan} dan tanggal hari ini adalah ${jenisTanggal}`;
    }

    document.get
});