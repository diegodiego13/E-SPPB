
var dis_1 = Highcharts.chart('Hdispersion1', {
    chart: {
        type: 'scatter',
        zoomType: 'xy'
    },
    accessibility: {
        description: 'none'
    },
    
    title: {
        useHTML: true,
        text: 'Test Mini-Mental',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 5% 5px 5%',
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
    xAxis: {
        title: {
            enabled: true,
            text: 'Puntaje'
        },
        startOnTick: true,
        endOnTick: true,
        showLastLabel: true,
        max:35,
        min:0,
        tickInterval: 5

    },
    yAxis: {
        title: {
            text: 'Paciente'
        },
        
        tickInterval: 5
        
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 55,
        y: 70,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'rgb(255,255,255,.6)',
        shadow: true,
        borderWidth: 0
    },
    plotOptions: {
        scatter: {
            marker: {
                radius: 5,
                states: {
                    hover: {
                        enabled: true,
                        lineColor: 'rgb(100,100,100)'
                    }
                }
            },
            states: {
                hover: {
                    marker: {
                        enabled: false
                    }
                }
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: 
                    'Paciente: <b>{point.y}</b><br/>' +
                    'Puntaje: <b>{point.x}</b><br/>'
            }
        }
    },
    series: [{
        name: 'Hombres',
        color: '#54D6D6'
        // color: 'rgba(223, 83, 83, .5)',
        
        // data: 
        //    [[20, 1], [21, 2], [25, 3], [20, 4], [28, 5]]

    }, {
        name: 'Mujeres',
        // color: 'rgba(119, 152, 191, .5)',
        color: '#F04971'
        // data: 
        //    [[25, 6], [24, 7], [27, 8], [20, 9], [28, 10]]

    }]
});


var gd_1 = document.querySelector('#gd_1').dataset.user;
gd_1 = JSON.parse(gd_1);

var female= [];
var male= [];

var m;
var f;

var con=1;
for (var i in gd_1) {
    if (gd_1[i]['gender'] == 'Masculino') {
        m=parseInt(gd_1[i]['final_score']);
        male.push([m,con]);
        con++;

    } else if (gd_1[i]['gender'] == 'Femenino') {
        f=parseInt(gd_1[i]['final_score']);
        female.push([f,con]);
        con++;
    }
}

// alert(female);
// alert(male);

dis_1.series[1].setData(female);
dis_1.series[0].setData(male);

// ----------------------------------------------------------------------------------

var line_1=Highcharts.chart('Hline1', {
    chart: {
        type: 'scatter',
        zoomType: 'xy'
    },
    accessibility: {
        description: 'none'
    },
 
    title: {
        useHTML: true,
        text: 'Medidas atropométricas',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 3% 5px 3%',
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

    subtitle: {
        text: '(Peso - Estatura)'
    },
    xAxis: {
        title: {
            enabled: true,
            text: 'Estatura'
        },
        startOnTick: true,
        endOnTick: true,
        showLastLabel: true,
        // max:35,
        // min:50,
        // tickInterval: 5

    },
    yAxis: {
        title: {
            text: 'Peso'
        },
        
        // tickInterval: 10
        
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        x: 55,
        y: 70,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'rgb(255,255,255,.6)',
        shadow: true,
        borderWidth: 0,
        enabled: false
    },
    plotOptions: {
        scatter: {
            marker: {
                radius: 5,
                states: {
                    hover: {
                        enabled: true,
                        lineColor: 'rgb(100,100,100)'
                    }
                }
            },
            states: {
                hover: {
                    marker: {
                        enabled: false
                    }
                }
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: 
                    'Peso: <b>{point.y} Kg</b><br/>' +
                    'Estatura: <b>{point.x} Cm</b><br/>'
            }
        }
    },
    series: [{
        name: 'Medidas',
        color: '#54D6D6'
        // color: 'rgba(223, 83, 83, .5)',
        
        // data: 
        //    [[20, 1], [21, 2], [25, 3], [20, 4], [28, 5]]

    }]
});


var userIMC = document.querySelector('#user_data').dataset.user;

userIMC = JSON.parse(userIMC);

var imc= [];


var p;
var a;


for (var i in userIMC) {
    a=parseInt(userIMC[i]['size']);
    p=parseInt(userIMC[i]['weight']);
    imc.push([a,p]);      
}
// alert(imc);
line_1.series[0].setData(imc);