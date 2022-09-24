import { getDataRuangan } from "../../getData";

const ruangan_id = document.getElementById("ruangan_id");

const selectRuangan = async () => {
    if (ruangan_id) {
        const dataRuangan = await getDataRuangan();
        console.log(dataRuangan);
        ruangan_id.innerHTML = `<option value="" disabled selected>Pilih Ruangan</option>`;
        dataRuangan.forEach((ruangan) => {
            ruangan_id.innerHTML += `
                <option value="${ruangan.id}">${ruangan.nama}</option>
            `;
        });
    }
};
selectRuangan();
