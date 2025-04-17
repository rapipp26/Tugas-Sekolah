let daftarNilai = [
    {nama: "Rafif", nilai: 100},
    {nama: "Sachio", nilai: 90},
    {nama: "Riza", nilai: 91},
    {nama: "Daffa", nilai: 83},
    {nama: "Rafi", nilai: 67},
    {nama: "Rashad", nilai: 77},
]

daftarNilai.forEach(siswa => {
    let nilai;
    switch(true) {
        case (siswa.nilai >= 95):
            nilai = "A";
            break;
        case (siswa.nilai >= 80):
            nilai = "B";
            break;
        case (siswa.nilai >= 70):
            nilai = "C";
            break;
        case (siswa.nilai >= 60):
            nilai = "D";
            break;
        default:
            nilai = "E"
    }

    console.log(`${siswa.nama} = ${nilai}`)
})