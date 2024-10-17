$(document).ready(function () {
    var namaContainer = $("#nama-container");
    var nameInput = $("#name");
    var nrpInput = $("#nrp");
    var divisiInput = $("#divisi");
    var emailInput = $("#email");
    var idKaryawanInput = $("#id_karyawan");
    var idBarangInput = $("#id_barang");

    $("#name").on("input", function () {
        var name = $(this).val();

        if (name === "") {
            clearNama();
        } else {
            $.ajax({
                url: "/get-karyawan",
                type: "GET",
                dataType: "json",
                data: { name: name },
                success: function (response) {
                    displayNama(response);
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                },
            });
        }
    });

    function clearNama() {
        namaContainer.empty();

        idKaryawanInput.val("");
        nrpInput.val("");
        divisiInput.val("");
        emailInput.val("");
        namaContainer.addClass("hidden");
    }

    function displayNama(response) {
        namaContainer.empty();

        if (response.length > 0) {
            var namaList = $("<ul></ul>");

            $.each(response, function (index, nama) {
                var namaItem = $("<li></li>").text(nama);
                namaItem.addClass("cursor-pointer");
                namaItem.on("click", function () {
                    updateForm(nama);
                });
                namaList.append(namaItem);
            });

            namaContainer.append(namaList);
            namaContainer.removeClass("hidden");
        } else {
            namaContainer.text("Tidak ada nama yang cocok.");
            namaContainer.removeClass("hidden");
        }
    }

    function updateForm(nama) {
        nameInput.val(nama);
        clearNama();

        $.ajax({
            url: "/get-karyawan-data",
            type: "GET",
            dataType: "json",
            data: { name: nama },
            success: function (response) {
                if (response.error) {
                    console.log(response.error);
                    return;
                }
                idKaryawanInput.val(response.id_karyawan);
                nrpInput.val(response.nrp);
                divisiInput.val(response.divisi);
                emailInput.val(response.email);
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            },
        });
    }

    // Menggunakan event change pada dropdown barang
    // $("#barang").change(function () {
    //     var selectedBarang = $(this).val();

    //     $.ajax({
    //         url: "/get-barang-data",
    //         type: "GET",
    //         dataType: "json",
    //         data: { barang: selectedBarang },
    //         success: function (response) {
    //             if (response.error) {
    //                 console.log(response.error);
    //                 return;
    //             }
    //             idBarangInput.val(response.id);
    //         },
    //         error: function (xhr) {
    //             console.log(xhr.responseText);
    //         },
    //     });
    // });
});

const dropdown = document.getElementById("barang");
const idBarangInput = document.getElementById("id_barang");

// Tambahkan event listener pada dropdown
dropdown.addEventListener("change", function () {
    // Ambil data-id-barang dari opsi yang dipilih
    const selectedOption = this.options[this.selectedIndex];
    const idBarang = selectedOption.getAttribute("data-id-barang");

    // Perbarui nilai id_barang pada input
    idBarangInput.value = idBarang;
});

//notif
function showNotification() {
    var notification = document.getElementById("notif");
    notification.classList.remove("hidden");
    setTimeout(function () {
        hideNotification();
    }, 8000);
}

function hideNotification() {
    var notification = document.getElementById("notif");
    notification.classList.add("hidden");
}

document.addEventListener("DOMContentLoaded", function () {
    showNotification();
});
//notif
