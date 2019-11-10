var user = document.querySelector('#user_data').dataset.user;

    user = JSON.parse(user);
    var mas = 0;
    var fem = 0;

    for (let i in user) {
        if (user[i]['gender'] == 'Masculino') {
            mas++;
        } else if (user[i]['gender'] == 'Femenino') {
            fem++;
        }
    }

    Highcharts.chart('Hpie1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 1, //null,
            plotShadow: null,
            backgroundColor: 'white',
            type: 'pie',
        },
        accessibility: {
            description: 'none'
        },
        title: {
            useHTML: true,
            text: 'Genero',
            style: {
                color: 'white',
                'background-color': 'royalblue',
                padding: '5px 20% 5px 20%',
                // zIndex:'0',
                borderRadius:'5px 5px',
                
                font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
            }
        },
        lang: {
            contextButtonTitle: 'Menu',
        },
        navigation: {
            buttonOptions: {
                height: 37,
                
                width: 30,
                symbolSize: 18,
                symbolX: 15,
                symbolY: 18,
                y:-4,
                x:5,
                vertical:'top',
                symbolStroke: 'white',
                symbolStrokeWidth: 3,
                theme: {
                    fill: 'royalblue',
                    r: 5,
                    states: {
                        hover: {
                            fill: '#1cc88a',
                            cursor: 'pointer'
                        },
                        select: {
                            // stroke: 'green',
                            fill: '#1cc88a'
                        }
                    }
                }
            }
        },
        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Cantidad: <b>{point.y}</b><br/>' +
                'Porcentaje: <b>{point.percentage: .1f}%</b><br/>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true
                },
                showInLegend: true
            }
        },
        series: [{
            minPointSize: 10,
            innerSize: '60%',
            zMin: 0,
            name: 'sexo',

            data: [{
                name: 'Masculino',
                color:'#2BD85D',
                y: mas
            }, {
                name: 'Femenino',
                color: '#D631FF',
                y: fem
            }]
        }]
    });
