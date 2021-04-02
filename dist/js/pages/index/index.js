$(document).ready(function(){

    let labelArrayAldoc = [];
    let dataArrayAldoc= [];
    let dataArraySalto= [];
    let labelArraySalto = [];
    let dataArrayPscat= [];
    let labelArrayPscat = [];
    let chartAjax = new Promise(function (resolve, reject) {
        /* setInterval(function (){*/
        $.ajax({
            url: "?url=chart-request",
            type: "GET",
            dataType: "json",
            success: function (data) {
                console.log(data);
                labelArrayAldoc=data[0].aldoc.split(",");
                dataArrayAldoc= data[0].usage.split(",");
                labelArraySalto=data[1].salto.split(",");
                dataArraySalto= data[1].usage.split(",");
                labelArrayPscat=data[2].pscat.split(",");
                dataArrayPscat= data[2].usage.split(",");
                resolve(data);
                reject();
            }
        });
        /*  },5000);*/

    }).then((data) => {

        let aldocTotalRequest=dataArrayAldoc.reduce((a, b) => parseInt(a) + parseInt(b));
        let totalRequestAldocEl=$('#totalRequestAldoc');
        totalRequestAldocEl.html("Total request ALDOC :"+aldocTotalRequest)
        var ctxAldoc = document.getElementById('chartAldoc').getContext('2d');
        var myChartAldoc = new Chart(ctxAldoc, {
            type: 'bar',
            data: {
                labels: labelArrayAldoc,
                datasets: [{
                    label: '# Aldoc Requests',
                    data: dataArrayAldoc,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 10, 255, 0.2)',
                        'rgba(153, 2, 255, 0.2)',
                        'rgba(153, 122, 25, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(13, 102, 55, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 10, 255, 0.2)',
                        'rgba(13, 102, 255, 0.2)',
                        'rgba(153, 19, 255, 0.2)',
                        'rgba(120, 102, 255, 0.2)',
                        'rgba(14, 102, 255, 0.2)',
                        'rgba(50, 102, 255, 0.2)',
                        'rgba(73, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)'

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        let saltoTotalRequest=dataArraySalto.reduce((a, b) => parseInt(a) + parseInt(b));
        let totalRequestSaltoEl=$('#totalRequestSalto');
        totalRequestSaltoEl.html("Total request SALTO :"+saltoTotalRequest);
        var ctxSalto = document.getElementById('chartSalto').getContext('2d');
        var myChartSalto = new Chart(ctxSalto, {
            type: 'bar',
            data: {
                labels: labelArraySalto,
                datasets: [{
                    label: '# Salto Requests',
                    data: dataArraySalto,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 10, 255, 0.2)',
                        'rgba(153, 2, 255, 0.2)',
                        'rgba(153, 122, 25, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(13, 102, 55, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 10, 255, 0.2)',
                        'rgba(13, 102, 255, 0.2)',
                        'rgba(153, 19, 255, 0.2)',
                        'rgba(120, 102, 255, 0.2)',
                        'rgba(14, 102, 255, 0.2)',
                        'rgba(50, 102, 255, 0.2)',
                        'rgba(73, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)'

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        let pscatTotalRequest=dataArrayPscat.reduce((a, b) => parseInt(a) + parseInt(b));
        let totalRequestPscatEl=$('#totalRequestPscat');
        totalRequestPscatEl.html("Total request Pscat :"+pscatTotalRequest);
        var ctxPscat = document.getElementById('chartPscat').getContext('2d');
        var myChartPscat = new Chart(ctxPscat, {
            type: 'bar',
            data: {
                labels: labelArrayPscat,
                datasets: [{
                    label: '# Pscat Requests',
                    data: dataArrayPscat,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 10, 255, 0.2)',
                        'rgba(153, 2, 255, 0.2)',
                        'rgba(153, 122, 25, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(13, 102, 55, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 10, 255, 0.2)',
                        'rgba(13, 102, 255, 0.2)',
                        'rgba(153, 19, 255, 0.2)',
                        'rgba(120, 102, 255, 0.2)',
                        'rgba(14, 102, 255, 0.2)',
                        'rgba(50, 102, 255, 0.2)',
                        'rgba(73, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)'

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });

});