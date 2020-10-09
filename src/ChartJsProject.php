<?php


namespace Nemundo\ChartJs;


use Nemundo\Project\AbstractProject;

class ChartJsProject extends AbstractProject
{

    protected function loadProject()
    {
        $this->project = 'ChartJs';
        $this->projectName = 'chartjs';
        $this->path = __DIR__;
        $this->namespace = __NAMESPACE__;
        $this->modelPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR;

    }

}