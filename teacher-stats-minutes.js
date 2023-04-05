const ctx = document.getElementById("minutes-watched-chart");

new Chart(ctx, {
  scaleFontColor: "white",
  type: "bar",
  data: {
    labels: [
        "1 Apr",
        "2 Apr",
        "3 Apr",
        "4 Apr",
        "5 Apr",
        "6 Apr",
        "7 Apr",
        "8 Apr",
        "9 Apr",
        "10 Apr",
        "11 Apr",
        "12 Apr",
        "13 Apr",
        "14 Apr",
        "15 Apr",
        "16 Apr",
        "17 Apr",
        "18 Apr",
        "19 Apr",
        "20 Apr",
        "21 Apr",
        "22 Apr",
        "23 Apr",
        "24 Apr",
        "25 Apr",
        "26 Apr",
        "27 Apr",
        "28 Apr",
        "29 Apr",
        "30 Apr",
    ],
    datasets: [
      {
        label: "Minutes Watched",
        data: [
          50, 60, 35, 45, 70, 25, 30, 70, 35, 45, 28, 45, 67, 34, 90, 50, 35,
          48, 65, 50, 55, 100, 40, 75, 89, 28, 45, 67, 34, 90,
        ],
        borderWidth: 1,
        backgroundColor: "#00d989",
      },
    ],
  },
  options: {
    color: "white",
    legend: {
      labels: {
        color: "white",
        fontSize: 18,
      },
    },
    scales: {
      y: {
        ticks: { color: "white", beginAtZero: true },
      },
      x: {
        ticks: { color: "white", beginAtZero: true },
      },
    },
  },
});
