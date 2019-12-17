try{
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
}
catch(error) {
  console.error(error);
}



// ---------------------------------------------------------------------------------------


try {
var g_alF = document.querySelector('#g_alF').dataset.user;

    
var row_2 = Highcharts.chart('Hrow2', {


    tooltip: {
        formatter: function () {
            return '<b>'+this.series.name+'</b><br>'+
                    'Paciente: <b>'+(this.x)+'</b><br/>' +
                    'Centimetros: <b>'+this.y+' cm</b><br/>';
        }
    },

    chart: {
        backgroundColor: 'white',
        type: 'bar'
    },
    title: {
        useHTML: true,
        text: 'Alcance funcional',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 10% 5px 10%',
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
        // min: 0,
        pointStart: 1,
        tickInterval: 1,
        title: {
            text: 'Paciente'
        }
    },
    yAxis: {
        min: 0,
        tickInterval: 1,
        title: {
            text: 'Centimetros (cm)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        },
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 1
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
        shadow: false,
        enabled: false
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Mayor distancia recorrida',
        // data: [3,4,2,5,3,6,4],
        color:'#A347FF'
    }]
});

g_alF = JSON.parse(g_alF);

var centimetros= [];
var cm;
for (var i in g_alF) {
    
    cm=parseInt(g_alF[i]['mayor_distance']);
    centimetros.push(cm);
}
row_2.series[0].setData(centimetros);

}
  catch(error) {
    console.error(error);
}

// ---------------------------------------------------------------------------------------

try{
var row_3 = Highcharts.chart('Hrow3', {


    tooltip: {
        formatter: function () {
            return '<b>'+(this.x)+'</b><br/>' +
                    'Respuesta: <b>'+this.series.name+'</b><br>'+
                    'Personas: <b>'+this.y+'</b><br/>';
        }
    },

    chart: {
        backgroundColor: 'white',
        type: 'bar'
    },
    title: {
        useHTML: true,
        text: 'Alcance funcional',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 10% 5px 10%',
            zIndex:'0',
            borderRadius:'5px 5px',
            
            font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
        }
    },
    
    subtitle: {
        text: 'En qué medida su barrio tiene…'
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
        text: null
        }
    },
    yAxis: {
        min: 0,
        tickInterval: 1,
        title: {
            text: 'Persona',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'horizontal',
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        shadow: false
        // enabled: false
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Muchos',
        // data: [3, 18, 5, 10, 21, 12,7],
        color:'#FF4747'
    },{
        name: 'Algunos',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#FFEB47'
    },{
        name: 'Ninguno',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#47FFFC'
    },{
        name: 'No sabe',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#B147FF'
    }]
});


var g_buE = document.querySelector('#g_buE').dataset.user;

g_buE = JSON.parse(g_buE);
   
    var q1=[],q2=[],q3=[],q4=[];

    for (let index = 0; index <7; index++) {
        q1[index]=0;
        q2[index]=0;
        q3[index]=0;
        q4[index]=0;
    }
    for (let i in g_buE) {
        if (g_buE[i]['name'] == 'question_have') {
            if (g_buE[i]['id'] == 2) {
                if(g_buE[i]['answer']=='Muchos'){q1[0]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[0]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[0]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[0]++;}
            
            }else if (g_buE[i]['id'] == 3) {
                if(g_buE[i]['answer']=='Muchos'){q1[1]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[1]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[1]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[1]++;}

            }else if (g_buE[i]['id'] == 4) {
                if(g_buE[i]['answer']=='Muchos'){q1[2]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[2]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[2]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[2]++;}
                
            }else if (g_buE[i]['id'] == 5) {
                if(g_buE[i]['answer']=='Muchos'){q1[3]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[3]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[3]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[3]++;}
                
            }else if (g_buE[i]['id'] == 6) {
                if(g_buE[i]['answer']=='Muchos'){q1[4]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[4]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[4]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[4]++;}
                
            }else if (g_buE[i]['id'] == 7) {
                if(g_buE[i]['answer']=='Muchos'){q1[5]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[5]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[5]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[5]++;}
                
            }else if (g_buE[i]['id'] == 8) {
                if(g_buE[i]['answer']=='Muchos'){q1[6]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[6]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[6]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[6]++;}

            }
        } 
    }


row_3.series[0].setData(q1);
row_3.series[1].setData(q2);
row_3.series[2].setData(q3);
row_3.series[3].setData(q4);
row_3.xAxis[0].setCategories([
    'Aceras o andenes irregulares.',
    'Parques o áreas para caminar de fácil acceso.',
    'Parques y áreas para caminar seguro.',
    'Sitios para sentarse y descansar en las paradas del bus o parques.',
    'Transporte público cerca a su casa.',
    'Transporte público para personas con discapacidad.',
    'Parqueaderos adecuados para personas con discapacidad.'
]);
}
catch(error) {
  console.error(error);
}


// --------------------------------------------------------------------------------

try{
var row_3 = Highcharts.chart('Hrow4', {


    tooltip: {
        formatter: function () {
            return '<b>'+(this.x)+'</b><br/>' +
                    'Respuesta: <b>'+this.series.name+'</b><br>'+
                    'Personas: <b>'+this.y+'</b><br/>';
        }
    },

    chart: {
        backgroundColor: 'white',
        type: 'bar'
    },
    title: {
        useHTML: true,
        text: 'Alcance funcional',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 10% 5px 10%',
            zIndex:'0',
            borderRadius:'5px 5px',
            
            font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
        }
    },
    
    subtitle: {
        text: 'De las siguientes situaciones ¿qué tanto es un problema en su barrio?'
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
        text: null
        }
    },
    yAxis: {
        min: 0,
        tickInterval: 1,
        title: {
            text: 'Persona',
            align: 'high'
            
        },
        labels: {
            overflow: 'justify'
        }
    },
    
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'horizontal',
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 15,
        floating: true,
        borderWidth: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'transparent',
        shadow: false
        // enabled: false
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Muchos problemas',
        // data: [3, 18, 5, 10, 21, 12,7],
        color:'#FC47FF'
    },{
        name: 'Pocos Problemas',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#4755FF'
    },{
        name: 'No es un problema',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#FF9B47'
    },{
        name: 'No sabe',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#5DFF47'
    }]
});


    q1=[],q2=[],q3=[],q4=[];

    for (let index = 0; index <10; index++) {
        q1[index]=0;
        q2[index]=0;
        q3[index]=0;
        q4[index]=0;
    }
    for (let i in g_buE) {
        if (g_buE[i]['name'] == 'question_problem') {
            if (g_buE[i]['id'] == 10) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[0]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[0]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[0]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[0]++;}
            
            }else if (g_buE[i]['id'] == 11) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[1]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[1]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[1]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[1]++;}

            }else if (g_buE[i]['id'] == 12) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[2]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[2]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[2]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[2]++;}
                
            }else if (g_buE[i]['id'] == 13) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[3]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[3]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[3]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[3]++;}
                
            }else if (g_buE[i]['id'] == 14) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[4]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[4]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[4]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[4]++;}
                
            }else if (g_buE[i]['id'] == 15) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[5]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[5]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[5]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[5]++;}
                
            }else if (g_buE[i]['id'] == 16) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[6]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[6]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[6]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[6]++;}

            }else if (g_buE[i]['id'] == 17) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[7]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[7]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[7]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[7]++;}

            }else if (g_buE[i]['id'] == 18) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[8]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[8]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[8]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[8]++;}

            }else if (g_buE[i]['id'] == 19) {
                if(g_buE[i]['answer']=='MuchoProblema'){q1[9]++;}
                else if(g_buE[i]['answer']=='PocoProblema'){q2[9]++;}
                else if(g_buE[i]['answer']=='NoEsProblema'){q3[9]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[9]++;}

            }
        } 
    }


row_3.series[0].setData(q1);
row_3.series[1].setData(q2);
row_3.series[2].setData(q3);
row_3.series[3].setData(q4);
row_3.xAxis[0].setCategories([
    'Tensiones entre los diferentes grupos raciales, étnicos o religiosos.',
    'Basuras, desperdicios o botellas en la calle, en los andenes o en los jardines.',
    'Ventas o usos de drogas.',
    'Abuso de alcohol en las calles y sitios públicos.',
    'Pandillas.',
    'Iluminación inadecuada.',
    'Delincuencia - delitos.',
    'Ruido excesivo.',
    'Tráfico pesado.',
    'Casas o edificios abandonados.'
]);

}
catch(error) {
  console.error(error);
}


// ---------------------------------------------------------------------------------------
try{

var row_3 = Highcharts.chart('Hrow5', {


    tooltip: {
        formatter: function () {
            return '<b>'+(this.x)+'</b><br/>' +
                    'Respuesta: <b>'+this.series.name+'</b><br>'+
                    'Personas: <b>'+this.y+'</b><br/>';
        }
    },

    chart: {
        backgroundColor: 'white',
        type: 'bar'
    },
    title: {
        useHTML: true,
        text: 'Alcance funcional',
        style: {
            color: 'white',
            'background-color': 'royalblue',
            padding: '5px 10% 5px 10%',
            zIndex:'0',
            borderRadius:'5px 5px',
            
            font: 'bold 20px Nunito,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"'
        }
    },
    
    subtitle: {
        text: 'En qué medida su barrio tiene…'
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
        text: null
        }
    },
    yAxis: {
        min: 0,
        tickInterval: 1,
        title: {
            text: 'Persona',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'horizontal',
        align: 'left',
        verticalAlign: 'bottom',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 0,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        shadow: false
        // enabled: false
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Muchos',
        // data: [3, 18, 5, 10, 21, 12,7],
        color:'#FF4747'
    },{
        name: 'Algunos',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#FFEB47'
    },{
        name: 'Ninguno',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#47FFFC'
    },{
        name: 'No sabe',
        // data: [4, 19, 15, 8, 15, 12,9],
        color: '#B147FF'
    }]
});



var g_buE = document.querySelector('#consulta_11').dataset.user;

g_buE = JSON.parse(g_buE);
   
    var q1=[],q2=[],q3=[],q4=[];

    for (let index = 0; index <7; index++) {
        q1[index]=0;
        q2[index]=0;
        q3[index]=0;
        q4[index]=0;
    }
    for (let i in g_buE) {
        if (g_buE[i]['name'] == 'question_have') {
            if (g_buE[i]['id'] == 2) {
                if(g_buE[i]['answer']=='Muchos'){q1[0]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[0]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[0]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[0]++;}
            
            }else if (g_buE[i]['id'] == 3) {
                if(g_buE[i]['answer']=='Muchos'){q1[1]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[1]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[1]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[1]++;}

            }else if (g_buE[i]['id'] == 4) {
                if(g_buE[i]['answer']=='Muchos'){q1[2]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[2]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[2]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[2]++;}
                
            }else if (g_buE[i]['id'] == 5) {
                if(g_buE[i]['answer']=='Muchos'){q1[3]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[3]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[3]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[3]++;}
                
            }else if (g_buE[i]['id'] == 6) {
                if(g_buE[i]['answer']=='Muchos'){q1[4]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[4]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[4]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[4]++;}
                
            }else if (g_buE[i]['id'] == 7) {
                if(g_buE[i]['answer']=='Muchos'){q1[5]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[5]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[5]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[5]++;}
                
            }else if (g_buE[i]['id'] == 8) {
                if(g_buE[i]['answer']=='Muchos'){q1[6]++;}
                else if(g_buE[i]['answer']=='Algunos'){q2[6]++;}
                else if(g_buE[i]['answer']=='Ninguno'){q3[6]++;}
                else if(g_buE[i]['answer']=='NoSabe'){q4[6]++;}

            }
        } 
    }


row_3.series[0].setData(q1);
row_3.series[1].setData(q2);
row_3.series[2].setData(q3);
row_3.series[3].setData(q4);
row_3.xAxis[0].setCategories([
    'Aceras o andenes irregulares.',
    'Parques o áreas para caminar de fácil acceso.',
    'Parques y áreas para caminar seguro.',
    'Sitios para sentarse y descansar en las paradas del bus o parques.',
    'Transporte público cerca a su casa.',
    'Transporte público para personas con discapacidad.',
    'Parqueaderos adecuados para personas con discapacidad.'
]);
}
catch(error) {
  console.error(error);
}


// --------------------------------------------------------------------------------

