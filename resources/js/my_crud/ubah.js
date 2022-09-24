import { setSaveMethod } from "./tools";
import axios from "axios";

$(document).on("click", ".btn-ubah", function (e) {
    e.preventDefault();
    const href = $(this).data("id");
    axios({
        method: "get",
        url: `/crud/${route}/${href}/edit`,
    })
        .then(function (response) {
            // show modal
            $(".tampilModal").modal("show");
            // set save_method
            setSaveMethod("ubah");
            // set attribut form
            document.getElementById("judul_form").innerText = "From Ubah Data";
            document.getElementById("tombolForm").innerText = "Simpan Data";
            // call formData
            formData(response.data);
        })
        .catch(function (error) {
            console.log(error);
        });
});

const formData = (data) => {
    if (route == "ruangan") {
        document.getElementById("id_form").value = data.id;
        document.getElementById("nama").value = data.nama;
    }
};
