// Bar chart
let value = [
  0, 47, 49, 63, 58, 54, 56, 58, 58, 74, 69, 76, 43, 45, 70, 70, 47, 67, 66,
  47, 81, 45, 54, 44, 67, 75, 60, 54, 56, 58, 67, 80, 65, 75, 65, 64, 75, 65,
  69, 46, 80, 80, 46, 61, 61, 45, 59, 49, 70, 65, 50, 59, 58,
];

let riviere = "#088378";
let etang = "#00ECCC";
Chart.defaults.color = "#ff0000";
Chart.defaults.global.defaultsFontColor = "white";
let tabColor = [];
let delayed;
for (let index = 0; index < value.length; index++) {
  if (value[index] >= 59) {
    tabColor.push(etang);
  } else {
    tabColor.push(riviere);
  }
}

new Chart(document.getElementById("bar-chart"), {
  type: "bar",
  data: {
    labels: [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
    ],
    datasets: [
      {
        label: "Intensité des précipitations (mn/h)",
        backgroundColor: "#00000000",
        borderColor: tabColor,
        labelColor: "#FF0000",
        data: value,
        borderWidth: 3,
        scaleFontColor: "#FFFFFF",
        fontColor: "white",
       
      },
      {
        type: "line",
        label: "test (mn/h)",
        showLine: false,
        pointStyle: "circle",
        backgroundColor: "#00000000",
        borderColor: "#0eb384",
        pointRadius: 11,
        pointBackgroundColor: "#088378",
        
        data: [
          105, 109, 113, 110, 107, 107, 107, 108, 105, 106, 107, 106, 109, 112, 111, 110, 108,
          107, 106, 105, 104, 103, 106, 104, 105, 103, 100, 96, 94, 96, 94,
        ],
      },

      {
        type: "line",
        label: "test (mn/h)",
      
        showLine: false,
        pointStyle: "circle",
        backgroundColor: "#00000000",
        borderColor: "#0eb384",
        pointRadius: 11,
        pointBackgroundColor: "#00ECCC",

        data: [
          105, 109, 113, 110, 107, 107, 107, 108, 105, 106, 107, 106, 109, 112, 111, 110, 108,
          107, 106, 105, 104, 103, 106, 104, 105, 103, 100, 96, 94, , 94, 92, 96, 98,
          102, 104, 108, 110, 114, 116, 117, 120, 116, 114, 115, 113, 110, 108, 106, 104, 108,
          112, 115,
        ],
      },
    ],
  },

  options: {
    responsiveAnimationDuration: 7000,
    barStrokeWidth: 8,
    responsive: false,
    maintainAspectRatio: false,
    barShowStroke: true,
    tooltips: {
      titleFontSize: 12,
    },
    display:false,
    

  scales: {
    xAxes: [
      {
        gridLines: {
          display: false,
          drawBorder: false,
        },
      },
    ],
    yAxes: [
      {
        gridLines: {
          display: false,
          // drawBorder: false,

        },
      },
    ],
  
    },
  },

  
  legend: { display: true },

  title: {
   
    display: true,
    text: "Evolution de lintensité des pluies extrêmes en regions méditerranéenne de 1967 à nos jours",
    fontColor: "white",
    color: "#FFF",
  },
});

