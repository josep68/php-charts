$( document ).ready(function() {
    var ctx = $('#chart1');
    var chart = new Chart(ctx,{
         type :'line',
         data : {
           labels: ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'],
           datasets: [{
             label: 'Vendite mensili',
             backgroundColor: '#63BDFE',
             borderColor: '#63BDFE',
             data: jarray1,
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
        })
      });
