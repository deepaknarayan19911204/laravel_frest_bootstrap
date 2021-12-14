/*=========================================================================================
    File Name: dashboard-analytics.js
    Description: dashboard analytics page content with Apexchart Examples
    ----------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(window).on("load", function () {

  var $primary = '#5A8DEE';
  var $success = '#39DA8A';
  var $danger = '#FF5B5C';
  var $warning = '#FDAC41';
  var $info = '#00CFDD';
  var $label_color = '#475f7b';
  var $primary_light = '#E2ECFF';
  var $danger_light = '#ffeed9';
  var $gray_light = '#828D99';
  var $sub_label_color = "#596778";
  var $radial_bg = "#e7edf3";


  // Bar Chart
  // ---------
  var analyticsBarChartOptions = {
    chart: {
      height: 260,
      type: 'bar',
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '20%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    colors: [$primary, '#B6CDF8'],
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'light',
        type: "vertical",
        inverseColors: true,
        opacityFrom: 1,
        opacityTo: 1,
        stops: [0, 70, 100]
      },
    },
    series: [{
      name: '2020',
      data: [80, 95, 150, 210, 140, 230, 300, 280, 130]
    }, {
      name: '2019',
      data: [50, 70, 130, 180, 90, 180, 270, 220, 110]
    }],
    xaxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      labels: {
        style: {
          colors: $gray_light
        }
      }
    },
    yaxis: {
      min: 0,
      max: 300,
      tickAmount: 3,
      labels: {
        style: {
          color: $gray_light
        }
      }
    },
    legend: {
      show: false
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return "$ " + val + " thousands"
        }
      }
    }
  }

  var analyticsBarChart = new ApexCharts(
    document.querySelector("#analytics-bar-chart"),
    analyticsBarChartOptions
  );

  analyticsBarChart.render();

  // Success Line Chart
  // -----------------------------
  var successLineChartOption = {
    chart: {
      height: 100,
      type: 'line',
      toolbar: {
        show: false
      }
    },
    grid: {
      show: false,
      padding: {
        bottom: 0,
      }
    },
    colors: [$success],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      width: 3,
      curve: 'smooth'
    },
    series: [{
      data: [50, 0, 50, 40, 90, 0, 40, 25, 80, 40, 45]
    }],
    xaxis: {
      show: false,
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      }
    },
    yaxis: {
      show: false
    },
  }

  var successLineChart = new ApexCharts(
    document.querySelector("#success-line-chart"),
    successLineChartOption
  );
  successLineChart.render();

  // Donut Chart
  // ---------------------
  var donutChartOption = {
    chart: {
      width: 180,
      type: 'donut',
    },
    dataLabels: {
      enabled: false
    },
    series: [80, 30, 60],
    labels: ["Social", "Email", "Search"],
    stroke: {
      width: 0,
      lineCap: 'round',
    },
    colors: [$primary, $info, $warning],
    plotOptions: {
      pie: {
        donut: {
          size: '90%',
          labels: {
            show: true,
            name: {
              show: true,
              fontSize: '15px',
              colors: $sub_label_color,
              offsetY: 20,
              fontFamily: 'IBM Plex Sans',
            },
            value: {
              show: true,
              fontSize: '26px',
              fontFamily: 'Rubik',
              color: $label_color,
              offsetY: -20,
              formatter: function (val) {
                return val
              }
            },
            total: {
              show: true,
              label: 'Impression',
              color: $gray_light,
              formatter: function (w) {
                return w.globals.seriesTotals.reduce(function (a, b) {
                  return a + b
                }, 0)
              }
            }
          }
        }
      }
    },
    legend: {
      show: false
    }
  }

  var donutChart = new ApexCharts(
    document.querySelector("#donut-chart"),
    donutChartOption
  );

  donutChart.render();

  // Widget Todo List
  // ------------------
  // Task List Widget - for completed todo item
  $(document).on('click', '.widget-todo-item input', function () {
    $(this).closest('.widget-todo-item').toggleClass("completed");
  });

  // Drag the task
  dragula([document.getElementById("widget-todo-list")], {
    moves: function (el, container, handle) {
      return handle.classList.contains("cursor-move");
    }
  });

});
