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

const getChart = () => {
    return axios({
        method: "GET",
        url: `/api/chart`,
    })
        .then((res) => {
            return res.data;
        })
        .catch((err) => {
            alert(`Terjadi kesalahan pada server ${err}`);
        });
};

export { getDataRuangan, getChart };
