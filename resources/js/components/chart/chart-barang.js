import ApexCharts from "apexcharts";
import { getChart } from "../../getData";

import moment from "../../moment";

const container = document.querySelector("#chart");

const dtBergerak = [];
const dtDiam = [];

const chartBarang = async () => {
    const getData = await getChart();

    getData.data_bergerak.forEach((bergerak) => {
        dtBergerak.push(bergerak.jmlh);
    });

    getData.data_diam.forEach((diam) => {
        dtDiam.push(diam.jmlh);
    });

    console.log(dtDiam);

    var options = {
        series: [
            {
                name: "Aset Bergerak",
                data: dtBergerak,
            },
            {
                name: "Aset Tidak Bergerak",
                data: dtDiam,
            },
        ],
        chart: {
            type: "bar",
            height: 350,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "55%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2,
            colors: ["transparent"],
        },
        xaxis: {
            categories: ["Barang Masuk", "Barang Keluar"],
        },
        yaxis: {
            title: {
                text: "",
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val;
                },
            },
        },
    };

    var chart = new ApexCharts(container, options);
    chart.render();
};

if (container) {
    chartBarang();
}
