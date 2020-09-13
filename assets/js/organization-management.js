
var options = {
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
}],
  chart: {
  height: 350,
  type: 'line',
  zoom: {
    enabled: false
  }
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'straight'
},
title: {
  text: 'Product Trends by Month',
  align: 'left'
},
grid: {
  row: {
    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
    opacity: 0.5
  },
},
xaxis: {
  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
}
};

var chart = new ApexCharts(document.querySelector("#LineChart"), options);
chart.render();




var ctx = document.getElementById('meterChart').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'doughnut',

	// The data for our dataset
	data: {
		// labels: ["January", "February", "March", "April", "May"],
		datasets: [{
			label: "My First dataset",
			backgroundColor: ['#14cd20', '#26ef55', '#ffbf3a', '#ff8e3a', '#f85353', '#ec0505'],
			borderColor: '#fff',
			data: [10, 10, 10, 10, 10, 10],
		}]
	},

	// Configuration options go here
	options: {
		circumference: 1 * Math.PI,
		rotation: 1 * Math.PI,
		cutoutPercentage: 90
	}
});















$(function(){
  
  $("table#wrapper").Grid({
    
    pagination:true,
    pagination: {
      limit: 4
    },

   


    language: {
      'pagination': {
        'showing': 'Show',
        'results': () => 'Entries'
      }
    },
    

    style: {
      table: {
        border: '3px solid white'
      },
      td: {
        border: '3px solid white',
        color: '#000',
        'border-bottom': 'none',
      },
      th: {
        'background-color': 'white',
        color: '#000',
        'border': '1px solid white',
      },
    }
    
    
   
  });

  

})



