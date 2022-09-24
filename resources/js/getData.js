import axios from "axios";

const getDataRuangan = () => {
    return axios({
        method: "GET",
        url: `/api/ruangan`,
    })
        .then((res) => {
            return res.data;
        })
        .catch((err) => {
            alert(`Terjadi kesalahan pada server ${err}`);
        });
};

export { getDataRuangan };
