$(document).ready(function() {
    // Validasi untuk form buku
    $("#bukuForm").validate({
        rules: {
            cover: {
                extension: "jpg|jpeg|png|gif|svg",
                max: 10000
            },
            judul_buku: {
                required: true,
                maxlength: 255
            },
            pengarang_buku: {
                required: true,
                maxlength: 255
            },
            penerbit_buku: {
                required: true,
                maxlength: 255
            },
            tahun_terbit_buku: {
                required: true,
                number: true,
                min: 1900,
                max: new Date().getFullYear()
            },
            stok_buku: {
                required: true,
                number: true,
                min: 1
            },
            id_kategori: {
                required: true
            }
        },
        messages: {
            cover: {
                extension: "Cover buku harus berupa file dengan ekstensi jpg, jpeg, png, gif, atau svg.",
                max: "Ukuran file cover buku tidak boleh lebih dari 10 MB."
            },
            judul_buku: {
                required: "Judul buku wajib diisi.",
                maxlength: "Judul buku tidak boleh lebih dari 255 karakter."
            },
            pengarang_buku: {
                required: "Pengarang buku wajib diisi.",
                maxlength: "Pengarang buku tidak boleh lebih dari 255 karakter."
            },
            penerbit_buku: {
                required: "Penerbit buku wajib diisi.",
                maxlength: "Penerbit buku tidak boleh lebih dari 255 karakter."
            },
            tahun_terbit_buku: {
                required: "Tahun terbit buku wajib diisi.",
                number: "Tahun terbit buku harus berupa angka.",
                min: "Tahun terbit buku tidak boleh kurang dari 1900.",
                max: "Tahun terbit buku tidak boleh lebih dari tahun sekarang."
            },
            stok_buku: {
                required: "Stok buku wajib diisi.",
                number: "Stok buku harus berupa angka.",
                min: "Stok buku minimal 1."
            },
            id_kategori: {
                required: "Kategori buku wajib dipilih."
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("text-danger");
            error.insertAfter(element);
        }
    });

    // Validasi untuk form kategori
    $("#kategoriForm").validate({
        rules: {
            nama_kategori: {
                required: true,
                maxlength: 255
            },
            deskripsi: {
                maxlength: 1000
            }
        },
        messages: {
            nama_kategori: {
                required: "Nama kategori wajib diisi.",
                maxlength: "Nama kategori tidak boleh lebih dari 255 karakter."
            },
            deskripsi: {
                maxlength: "Deskripsi tidak boleh lebih dari 1000 karakter."
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("text-danger");
            error.insertAfter(element);
        }
    });
});