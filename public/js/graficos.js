Highcharts.chart('grafico1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Empresas Participantes'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Minería',
            y: 2.8
        }, {
            name: 'Industria y Construcción',
            y: 8.9
        }, {
            name: 'Servicios y Comercio',
            y: 14.9
        }, {
            name: 'Gastronomía y Bebidas',
            y: 14
        }, {
            name: 'Vehículos y Motos',
            y: 2.8
        }, {
            name: 'Empresas Publicas y Turísticas',
            y: 5.6
        }, {
            name: 'MIMYPES',
            y: 47.7,
            sliced: true,
            selected: true
        }, {
            name: 'RSE',
            y: 3.3
        }]
    }]
});

Highcharts.chart('grafico2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Visitantes'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Personas que pagaron su boleto',
            y: 50,
            
            sliced: true,
            selected: true
        }, {
            name: 'Invitados',
            y: 6.8
        }, {
            name: 'Prensa',
            y: 0.4
        }, {
            name: 'Niños',
            y: 19.8
        }, {
            name: 'Expositores',
            y: 23
        }]
    }]
});


Highcharts.chart('grafico3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Rueda de negocios'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Construcción',
            y: 60,
            
            sliced: true,
            selected: true
        }, {
            name: 'Automotor y Comercio',
            y: 11
        }, {
            name: 'Servicios y Banca',
            y: 23
        }, {
            name: 'MIPYMES',
            y: 6
        }]
    }]
});