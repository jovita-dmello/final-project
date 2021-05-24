Chart.defaults.global.defaultFontFamily = 'Roboto';
Chart.defaults.global.defaultFontColor = '#333';


var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
var queries = queryString.split("&");

//var stat = queries[0];
var dis = queries[0];
var dat = parseInt(queries[1]);


function makeChart(players) {
  // players is an array of objects where each object is something like:
  // {
  //   "Name": "Steffi Graf",
  //   "Weeks": "377",
  //   "Gender": "Female"
  // }

  /*var playerLabels = players.map(function(d) {if (d.YEAR=='2002'){
      return d.DISTRICT;
  }});*/



  var playerLabels = players.filter(d => d.DISTRICT === 'TOTAL' && d.YEAR === '2001' ).map(function(d) {
    return d.STATE;});
    

  var weeksData = players.filter(d => d.DISTRICT === 'TOTAL' && d.YEAR === '2001').map(function(d) {
    return d.MURDER;});
    
  var playerColors = players.map(function(d) {return d.YEAR === '2003' ? '#F15F36' : '#19A0AA';});

  var chart = new Chart('chart', {
    type: 'bar',
    options: {
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      scales: {
        xAxes: [
          {
            scaleLabel: {
              display: true,
              labelString: 'STATES',
              fontSize: 16
            }
          }
        ]
      }
    },
    data: {
      labels: playerLabels,
      datasets: [
        {
          data: weeksData,
          backgroundColor: playerColors
        }
      ]
    }
  })
}

// Request data using D3

d3.csv('1-12.csv')
  .then(makeChart);

// d3.csv('dataset.csv')
//   .then(makeChart);