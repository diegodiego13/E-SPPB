// var line_1=Highcharts.chart('Hline1', {

//     title: {
//         text: 'Medidas atropométricas'
//     },

//     subtitle: {
//         text: '(Peso - Estatura)'
//     },

//     yAxis: {
//         title: {
//             text: 'Peso'
//         }
//     },
//     xAxis: {
//         title: {
//             text: 'Estatura'
//         }
//     },
//     legend: {
//         layout: 'vertical',
//         align: 'right',
//         verticalAlign: 'middle'
//     },

//     // plotOptions: {
//     //     series: {
//     //         label: {
//     //             connectorAllowed: false
//     //         },
//     //         pointStart: 2010
//     //     }
//     // },

//     series: [{
//         name: 'medidas',
//         // data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
//     }],

//     // responsive: {
//     //     rules: [{
//     //         condition: {
//     //             maxWidth: 500
//     //         },
//     //         chartOptions: {
//     //             legend: {
//     //                 layout: 'horizontal',
//     //                 align: 'center',
//     //                 verticalAlign: 'bottom'
//     //             }
//     //         }
//     //     }]
//     // }

// });

// var userIMC = document.querySelector('#user_data').dataset.user;

// userIMC = JSON.parse(userIMC);

// var imc= [];


// var p;
// var a;


// for (var i in userIMC) {
//     a=parseInt(userIMC[i]['size']);
//     p=parseInt(userIMC[i]['weight']);
//     imc.push([a,p]);      
// }

// // alert(female);
// // alert(male);

// line_1.series[0].setData(imc);