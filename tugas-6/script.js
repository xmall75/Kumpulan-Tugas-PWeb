document.getElementById('form').addEventListener('submit', function(event) {
    const mahasiswa = document.getElementById('mahasiswa')
    const nim = document.getElementById('nim')
    const dosen = document.getElementById('dosen')
    const inputMhs = mahasiswa.value.trim()
    const inputNim = nim.value.trim()
    const inputDosen = dosen.value.trim()

    if (inputMhs === '') {
        alert('Nama Mahasiswa tidak boleh kosong!')
    }
    if (inputNim === '') {
        alert('NRP tidak boleh kosong!')
    }
    if (inputDosen === '') {
        alert('Nama Dosen tidak boleh kosong!')
    }

    if (inputDosen !== '' && inputNim !== '' && inputMhs !== '') {
        return window.open('popup.html')
    }
})