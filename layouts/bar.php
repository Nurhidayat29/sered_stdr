<link href="<?php echo base_url()?>/donjo-app/views/themes/sered_stdr/bar/assets/styles.css" rel="stylesheet" />
  <style>
    #chart {
            max-width: 650px;
            margin: 35px auto;
        }
    </style>
  <div id="app"></div>
  <div id="html">
          &lt;div id=&quot;chart&quot;&gt;&#10;            &lt;ReactApexChart options={this.state.options} series={this.state.series} type=&quot;bar&quot; height=&quot;350&quot; /&gt;&#10;          &lt;/div&gt;
  </div>

  <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/prop-types@15.6.2/prop-types.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
  <script src="https://unpkg.com/react-apexcharts@1.1.0/dist/react-apexcharts.iife.min.js"></script>

  <script type="text/babel">

    class BarChart extends React.Component {
      
      constructor(props) {
        super(props);

        this.state = {
          options: {
            chart: {
              stacked: true,
              stackType: '100%'
            },
            plotOptions: {
              bar: {
                horizontal: true,
              },
            },
            stroke: {
              width: 1,
              colors: ['#fff']
            },
            title: {
              text: '100% Stacked Bar'
            },
            xaxis: {
              categories: ["Pendapatan", 2009, 2010, 2011, 2012, 2013, 2014],
            },
            tooltip: {
              y: {
                formatter: function (val) {
                  return val + "K"
                }
              }
            },
            fill: {
              opacity: 1
            },
            legend: {
              position: 'top',
              horizontalAlign: 'left',
              offsetX: 40
            }
          },
          series: [{
            name: 'Marine Sprite',
            data: [44, 55, 41, 37, 22, 43, 21]
          }, {
            name: 'Striking Calf',
            data: [53, 32, 33, 52, 13, 43, 32]
          }, {
            name: 'Tank Picture',
            data: [12, 17, 11, 9, 15, 11, 20]
          }, {
            name: 'Bucket Slope',
            data: [9, 7, 5, 8, 6, 9, 4]
          }, {
            name: 'Reborn Kid',
            data: [25, 12, 19, 32, 25, 24, 10]
          }],
        }
      }

      render() {
        return (
          <div>
            <div id="chart">
              <ReactApexChart options={this.state.options} series={this.state.series} type="bar" height="350" />
            </div>
            <div id="html-dist">
            </div>
          </div>
        );
      }
    }

    const domContainer = document.querySelector('#app');
    ReactDOM.render(React.createElement(BarChart), domContainer);

  </script>