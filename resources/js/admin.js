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

// burger button
const button = document.getElementById("burger-button");
const sidebar = document.getElementById("logo-sidebar");

document.addEventListener("click", (event) => {
    const target = event.target;

    if (target == button) {
        sidebar.classList.remove("hidden");
    } else if (!sidebar.contains(target) && target !== button) {
        sidebar.classList.add("hidden");
    }
});
// burger button

//KARYAWAN
const btnEditKaryawanClose = document.getElementById("btnEditKaryawanClose");
const editKaryawan = document.getElementById("editKaryawan");
btnEditKaryawanClose.addEventListener("click", () => {
    editKaryawan.classList.add("hidden");
});

//BARANG
const btnEditBarangClose = document.getElementById("btnEditBarangClose");
const editBarang = document.getElementById("editBarang");
btnEditBarangClose.addEventListener("click", () => {
    editBarang.classList.add("hidden");
});

//LICENSE
const btnEditLicenseClose = document.getElementById("btnEditLicenseClose");
const editLicense = document.getElementById("editLicense");
btnEditLicenseClose.addEventListener("click", () => {
    editLicense.classList.add("hidden");
});

var skip = 10;

$(document).ready(function () {
    //KARYAWAN
    //EDIT KARYAWAN
    $(document).on("click", "#btnEditKaryawan", function () {
        var karyawanId = $(this).data("id");
        $.ajax({
            url: "/karyawan/" + karyawanId,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $("#id_karyawan").val(data.id_karyawan);
                $("#nama").val(data.nama);
                $("#nrp").val(data.nrp);
                $("#divisi").val(data.divisi);
                $("#dept").val(data.dept);
                $("#email").val(data.email);
                $("#editKaryawan").removeClass("hidden");
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
    //DELETE KARYAWAN
    $(document).on("click", "#btnDeleteKaryawan", function () {
        const karyawanId = $(this).data("id");
        $.ajax({
            url: "/karyawan/" + karyawanId,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $("#namaKaryawan").text(data.nama);
                $("#id_karyawanDelete").val(data.id_karyawan);
                $("#deleteKaryawan").removeClass("hidden");
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
    $("#btnDeleteKaryawanClose").click(function () {
        $("#deleteKaryawan").addClass("hidden");
    });
    //SHOW MORE KARYAWAN
    $("#load-more-btn").click(function () {
        $.get("/get-more-karyawan/" + skip, function (data) {
            var karyawan = data.karyawan;
            if (karyawan.length > 0) {
                var tbody = $("#data-body");
                karyawan.forEach(function (krywn) {
                    var newRow = `
                            <tr class="odd:bg-white even:bg-gray-50 text-center">
                                <td class="px-6 py-4 whitespace-nowrap border sticky bg-blue-50 left-0 shadow-sm">${krywn.nama}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">${krywn.nrp}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">${krywn.divisi}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">${krywn.dept}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">${krywn.email}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">
                                    <button data-id="${krywn.id_karyawan}" id="btnEditKaryawan" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button data-id="${krywn.id_karyawan}" data-name="${krywn.nama}" id="btnDeleteKaryawan" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                </td>
                            </tr>`;
                    tbody.append(newRow);
                });
                skip += 10;
            } else {
                $("#load-more-btn").hide();
            }
        });
    });
    //KARYAWAN
    //BARANG
    //EDIT BARANG
    $(document).on("click", "#btnEditBarang", function () {
        var barangId = $(this).data("id");
        $.ajax({
            url: "/barang/" + barangId,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $("#id").val(data.id);
                $("#id_barang").val(data.id_barang);
                $("#deskripsi").val(data.deskripsi);
                $("#kategori").val(data.kategori);
                $("#editBarang").removeClass("hidden");
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
    //DELETE BARANG
    $(document).on("click", "#btnDeleteBarang", function () {
        const barangId = $(this).data("id");
        $.ajax({
            url: "/barang/" + barangId,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $("#namaBarang").text(data.deskripsi);
                $("#id-barang").text(data.id_barang);
                $("#id_barangDelete").val(data.id);

                $("#deleteBarang").removeClass("hidden");
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
    $("#btnDeleteBarangClose").click(function () {
        $("#deleteBarang").addClass("hidden");
    });
    //SHOW MORE BARANG
    $("#load-more-btn-barang").click(function () {
        $.get("/get-more-barang/" + skip, function (data) {
            var barang = data.barang;
            if (barang.length > 0) {
                var tbody = $("#data-body");
                barang.forEach(function (brng) {
                    var newRow = `
                    <tr class="odd:bg-white even:bg-gray-50 text-center">
                    <td class="px-6 py-4 whitespace-nowrap border bg-blue-50 sticky left-0 shadow-sm">${
                        brng.id_barang
                    }</td>
                    <td class="px-6 py-4 whitespace-nowrap border">${
                        brng.deskripsi
                    }</td>
                    <td class="px-6 py-4 whitespace-nowrap border">${
                        brng.kategori
                    }</td>
                    <td class="px-6 py-4 whitespace-nowrap border">
                    ${brng.tersedia == 1 ? "Available" : "Booked"}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap border">
                        <button id="btnEditBarang" data-id="${
                            brng.id
                        }" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button id="btnDeleteBarang" data-id="${
                            brng.id
                        }" data-name="${brng.deskripsi}" data-idBarang="${
                        brng.id_barang
                    }" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                    </td>
                </tr>`;
                    tbody.append(newRow);
                });
                skip += 10;
            } else {
                $("#load-more-btn-barang").hide();
            }
        });
    });
    //BARANG
    //LICENSE
    //EDIT LICENSE
    $(document).on("click", "#btnEditLicense", function () {
        var licenseId = $(this).data("id");
        $.ajax({
            url: "/license/" + licenseId,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $("#id_license").val(data.id_license);
                $("#nama_license").val(data.nama_license);
                $("#tgl_expired").val(data.tgl_expired);
                $("#editLicense").removeClass("hidden");
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
    //DELETE LICENSE
    $(document).on("click", "#btnDeleteLicense", function () {
        const licenseId = $(this).data("id");
        $.ajax({
            url: "/license/" + licenseId,
            method: "GET",
            dataType: "json",
            success: function (data) {
                $("#namaLicense").text(data.nama_license);
                $("#id_licenseDelete").val(data.id_license);
                $("#deleteLicense").removeClass("hidden");
            },
            error: function (error) {
                console.log(error);
            },
        });
    });
    $("#btnDeleteLicenseClose").click(function () {
        $("#deleteLicense").addClass("hidden");
    });
    //SHOW MORE LICENSE
    $("#load-more-btn-license").click(function () {
        $.get("/get-more-license/" + skip, function (data) {
            var license = data.license;
            if (license.length > 0) {
                var tbody = $("#data-body");
                license.forEach(function (lcnse) {
                    var newRow = `
                            <tr class="odd:bg-white even:bg-gray-50 text-center">
                                <td class="px-6 py-4 whitespace-nowrap border sticky bg-blue-50 left-0 shadow-sm">${lcnse.nama_license}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">${lcnse.tgl_expired}</td>
                                <td class="px-6 py-4 whitespace-nowrap border">
                                    <button data-id="${lcnse.id_license}" id="btnEditLicense" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button data-id="${lcnse.id_license}" data-name="${lcnse.nama_license}" id="btnDeleteLicense" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                </td>
                            </tr>`;
                    tbody.append(newRow);
                });
                skip += 10;
            } else {
                $("#load-more-btn").hide();
            }
        });
    });
    //LICENSE
});
