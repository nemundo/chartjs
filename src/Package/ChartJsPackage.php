<?php


namespace Nemundo\ChartJs\Package;


use Nemundo\ChartJs\ChartJsProject;
use Nemundo\Com\Package\AbstractPackage;

class ChartJsPackage extends AbstractPackage
{

    protected function loadPackage()
    {
        $this->project=new ChartJsProject();
        $this->packageName = 'chartjs';
        $this->addJs('Chart.min.js');
    }

}