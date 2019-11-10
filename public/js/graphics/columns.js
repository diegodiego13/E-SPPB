var user = document.querySelector('#user_data').dataset.user;

    user = JSON.parse(user);
    var r1 = 0;
    var r2 = 0;
    var r3 = 0;

    var v1={'55': 0,'56': 0,'57': 0,'58': 0,'59': 0,
            '60': 0,'61': 0,'62': 0,'63': 0,'64': 0
    };
    var v2={'65': 0,'66': 0,'67': 0,'68': 0,'69': 0,'70': 0,'71': 0,
            '72': 0,'73': 0,'74': 0,'75': 0,'76': 0,'77': 0,'78': 0,'79': 0
    };
    var v3={'80':0,'81': 0,'82': 0,'83': 0,'84': 0,'85': 0,
            '86': 0,'87': 0,'88': 0,'89': 0,'90': 0, 'mas':0
    };

    for (let i in user) {
        var s=''+user[i]['age'];
        if (user[i]['age']>=55 && user[i]['age']<=64) {
            r1++;
            v1[s]++;
            
        } else if (user[i]['age']>=65 && user[i]['age']<=79) {
            r2++;
            v2[s]++;
        }else if (user[i]['age']>=80) {
            r3++;
            if (user[i]['age']<=90) {
                v3[s]++;
            }else{
                v3['mas']++;
            }
        }
    }
    var tr=r1+r2+r3;

Highcharts.chart('Hcolumn1', {
    chart: {
        backgroundColor: 'white',
        type: 'column'

    },
    title: {
        
        useHTML: true,
        text: 'Edad',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 30% 5px 30%',
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
    //     text: 'Click the columns to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
    // },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total de edades en cada rango'
        }

    },
    legend: {
        enabled: false
        
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.z:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '',
        // pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
                'Cantidad: <b>{point.y}</b><br/>' +
                'Porcentaje: <b>{point.z: .1f}%</b><br/>'
    },

    series: [
        {
            name: "Rangos de edades",
            colorByPoint: true,
            data: [
                {
                    name: "Prevejez (55-64 años)",
                    y: r1,
                    z:r1/tr*100,
                    color: '#54D6D6',
                    drilldown: "Prevejez"
                },
                {
                    name: "Vejez (65-79 años)",
                    y: r2,
                    z:r2/tr*100,
                    color: '#F0C049',
                    drilldown: "Vejez"
                },
                {
                    name: "Ancianidad (80 años en adelante)",
                    y: r3,
                    z:r3/tr*100,
                    color: '#F04971',
                    drilldown: "Ancianidad"
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Prevejez",
                id: "Prevejez",
                data: [
                    {
                        name: "55 años",
                        y: v1['55'],
                        z: v1['55']/r1*100
                        
                    },
                    {
                        name: "56 años",
                        y: v1['56'],
                        z: v1['56']/r1*100
                    },
                    {
                        name: "57 años",
                        y: v1['57'],
                        z: v1['57']/r1*100
                    },
                    {
                        name: "58 años",
                        y: v1['58'],
                        z: v1['58']/r1*100
                    },
                    {
                        name: "59 años",
                        y: v1['59'],
                        z: v1['59']/r1*100
                    },
                    {
                        name: "60 años",
                        y: v1['60'],
                        z: v1['60']/r1*100
                    },
                    {
                        name:"61 años",
                        y: v1['61'],
                        z: v1['61']/r1*100
                    },
                    {
                        name:"62 años",
                        y: v1['62'],
                        z: v1['62']/r1*100
                    },
                    {
                        name:"63 años",
                        y: v1['63'],
                        z: v1['63']/r1*100
                    },
                    {
                        name:"64 años",
                        y: v1['64'],
                        z: v1['64']/r1*100
                    }
                ]
            },
            {
                name: "Vejez",
                id: "Vejez",
                data: [
                    {
                        name:"65 años",
                        y: v2['65'],
                        z: v2['65']/r2*100
                    },
                    {
                        name:"66 años",
                        y: v2['66'],
                        z: v2['66']/r2*100
                    },
                    {
                        name:"67 años",
                        y: v2['67'],
                        z: v2['67']/r2*100
                    },
                    {
                        name:"68 años",
                        y: v2['68'],
                        z: v2['68']/r2*100
                    },
                    {
                        name:"69 años",
                        y: v2['69'],
                        z: v2['69']/r2*100
                    },
                    {
                        name:"70 años",
                        y: v2['70'],
                        z: v2['70']/r2*100
                    },
                    {
                        name:"71 años",
                        y: v2['71'],
                        z: v2['71']/r2*100
                    },
                    {
                        name:"72 años",
                        y: v2['72'],
                        z: v2['72']/r2*100
                    },
                    {
                        name:"73 años",
                        y: v2['73'],
                        z: v2['73']/r2*100
                    },
                    {
                        name:"74 años",
                        y: v2['74'],
                        z: v2['74']/r2*100
                    },
                    {
                        name:"75 años",
                        y: v2['75'],
                        z: v2['75']/r2*100
                    },
                    {
                        name:"76 años",
                        y: v2['76'],
                        z: v2['76']/r2*100
                    },
                    {
                        name:"77 años",
                        y: v2['77'],
                        z: v2['77']/r2*100
                    },
                    {
                        name:"78 años",
                        y: v2['78'],
                        z: v2['78']/r2*100
                    },
                    {
                        name:"79 años",
                        y: v2['79'],
                        z: v2['79']/r2*100
                    }
                    
                ]
            },
            {
                name: "Ancianidad",
                id: "Ancianidad",
                data: [
                    {
                        name:"80 años",
                        y: v3['80'],
                        z: v3['80']/r3*100
                    },
                    {
                        name:"81 años",
                        y: v3['81'],
                        z: v3['81']/r3*100
                    },
                    {
                        name:"82 años",
                        y: v3['82'],
                        z: v3['82']/r3*100
                    },
                    {
                        name:"83 años",
                        y: v3['83'],
                        z: v3['83']/r3*100
                    },
                    {
                        name:"84 años",
                        y: v3['84'],
                        z: v3['84']/r3*100
                    },
                    {
                        name:"85 años",
                        y: v3['85'],
                        z: v3['85']/r3*100
                    },
                    {
                        name:"86 años",
                        y: v3['86'],
                        z: v3['86']/r3*100
                    },
                    {
                        name:"87 años",
                        y: v3['87'],
                        z: v3['87']/r3*100
                    },
                    {
                        name:"88 años",
                        y: v3['88'],
                        z: v3['88']/r3*100
                    },
                    {
                        name:"89 años",
                        y: v3['89'],
                        z: v3['89']/r3*100
                    },
                    {
                        name:"90 años",
                        y: v3['90'],
                        z: v3['90']/r3*100
                    },
                    {
                        name:"91 años o más",
                        y: v3['mas'],
                        z: v3['mas']/r3*100
                    }
                    
                ]
            }
            
        ]
    }
});