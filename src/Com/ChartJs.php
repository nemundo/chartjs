<?php

namespace Nemundo\ChartJs\Com;


use Nemundo\ChartJs\Package\ChartJsPackage;
use Nemundo\Com\Chart\AbstractChart;
use Nemundo\Html\Canvas\Canvas;
use Nemundo\Html\Container\AbstractHtmlContainer;
use Nemundo\Com\Container\LibraryTrait;


class ChartJs extends AbstractChart
{

    use LibraryTrait;

    public function getContent()
    {

        //$this->addJsUrl('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js');

        $this->addPackage(new ChartJsPackage());

        $canvas = new Canvas($this);
        $canvas->id = 'chart';
        $canvas->width = 200;
        $canvas->height = 200;



        $code='';
        foreach ($this->dataList as $data) {

            $code = '{
            type: "line",
            labels: ["a", "b", "c"],         
            datasets: [{
            label: "' . $data->legend . '",
            data: [' . $data->valueList->getTextWithSeperator(',') . ']
            }]           
            }
            ';


            /*,

              $this->addJavaScript('datasets: [{');
        $this->addJavaScript('label: \'# of Votes\',');
            backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)"
            ],
            borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)"
            ],
            borderWidth: 1';*/
        //}]';


        }


        //window.onload = function() {

        $this->addJavaScript('         
        window.onload = function() {                 
        var ctx = document.getElementById("chart").getContext("2d");        
var myChart = new Chart(ctx,    
        '.$code.'
);
};
');


        /*

};

options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
                }
        }]
        }
}


        //$script = new JavaScript($this);
        /*$this->addJavaScript('var ctx = document.getElementById("chart").getContext("2d");');
        $this->addJavaScript('var myChart = new Chart(ctx).Line(data);');


        //$script->addScript('window.onload = function() {');
        $this->addJavaScript('var ctx = document.getElementById("chart").getContext(\'2d\');');
        $this->addJavaScript('var myChart = new Chart(ctx, {');
        $this->addJavaScript('type: \'bar\',');
        $this->addJavaScript('data: {');
        $this->addJavaScript('labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],');
        $this->addJavaScript('datasets: [{');
        $this->addJavaScript('label: \'# of Votes\',');
        $this->addJavaScript('data: [12, 19, 3, 5, 2, 3],');
        $this->addJavaScript('backgroundColor: [');
        $this->addJavaScript(' \'rgba(255, 99, 132, 0.2)\',');
        $this->addJavaScript('\'rgba(54, 162, 235, 0.2)\',');
        //$this->addJavaScript('}]');*/

        /*$this->addJavaScript('],');
        $this->addJavaScript('}],');
        $this->addJavaScript('}');
        //$this->addJavaScript('}');
        $this->addJavaScript('');
        $this->addJavaScript('');
        $this->addJavaScript('');
        //$this->addJavaScript(' }]');
        $this->addJavaScript('});');
        $this->addJavaScript('');
       // $this->addJavaScript('}');


        /*
 
 
 
 
 
 
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
 
             borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
             borderWidth: 1
         }]
     },
     options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                 }
                }]
         }
        }
 });
 
 
        //<canvas id="myChart" width="400" height="400"></canvas>
 
 
        /*
        <script src="path/to/chartjs/dist/Chart.js"></script>
 <script>
     var myChart = new Chart(ctx, {...});
 </script>*/


        return parent::getContent();
    }


}