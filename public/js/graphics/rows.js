Highcharts.chart('Hrow1', {
    chart: {
        backgroundColor: 'white',
        type: 'bar'
    },
    title: {
        useHTML: true,
        text: 'Educación',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 20% 5px 20%',
            zIndex:'0',
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
    // subtitle: {
    //     text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
    // },
    xAxis: {
        categories: ['Ninguno', 
                     'Educación basica primaria',
                     'Educación basica secundaria', 
                     'Educación media', 
                     'Educación técnica profesional y tecnológica',
                     'Educación universitaria',
                     'Postgrado'
                    ],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Personas',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    // tooltip: {
    //     valueSuffix: 'Personas'
    // },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Hombres',
        data: [3, 18, 5, 10, 21, 12,7],
        color:'#2BD85D'
    },{
        name: 'Mujeres',
        data: [4, 19, 15, 8, 15, 12,9],
        color: '#D631FF'
    }]
});