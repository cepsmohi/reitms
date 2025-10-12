<?php

namespace App\Traits;

use App\Models\App;
use App\Models\MaterialStock;

trait StockCalendarTrait
{
    public $app;
    public $day;
    public $years, $months, $days;
    public $syear, $smonth, $sday;
    public $title, $datestr;
    public $getdata;

    public function initCalendar($getdata = true)
    {
        $this->syear = date('Y');
        $this->smonth = date('m');
        $this->sday = date('d');
        $this->makeDatestr();
        $this->makeTitle();
        $this->getYears();
        $this->getMonths($this->syear);
        if ($getdata) {
            $this->getDays($this->syear, $this->smonth);
            $this->getdata = true;
        } else {
            $this->getCustomDays($this->syear, $this->smonth);
            $this->getdata = false;
        }
        return $this->getData();
    }

    public function makeDatestr()
    {
        $this->datestr = $this->syear.'-'.$this->smonth.'-'.$this->sday;
    }

    public function makeTitle()
    {
        $this->title = date_format(date_create($this->datestr), 'j, F Y');
    }

    public function getYears()
    {
        $this->years = MaterialStock::selectRaw('year(created_at) year')
            ->distinct()
            ->orderBy('year')
            ->pluck('year')
            ->all();
    }

    public function getMonths($y)
    {
        $this->months = MaterialStock::whereYear('created_at', $y)
            ->selectRaw('month(created_at) month')
            ->distinct()
            ->orderBy('month')
            ->pluck('month')
            ->all();
    }

    public function getDays($y, $m)
    {
        $this->days = MaterialStock::whereYear('created_at', $y)
            ->whereMonth('created_at', $m)
            ->selectRaw('day(created_at) day')
            ->distinct()
            ->orderBy('day')
            ->pluck('day')
            ->all();
    }

    public function getData()
    {
        $this->day = MaterialStock::where('created_at', $this->datestr)
            ->first();
    }

    public function viewMonths($year)
    {
        $this->syear = $year;
        $this->getMonths($this->syear);
        $this->smonth = '';
        $this->days = [];
        $this->sday = '';
    }

    public function viewDays($month)
    {
        $this->smonth = $month;
        if ($this->getdata) {
            $this->getDays($this->syear, $this->smonth);
        } else {
            $this->getCustomDays($this->syear, $this->smonth);
        }

        $this->sday = '';
    }

    public function viewRecords($day)
    {
        $this->sday = $day;
        $this->makeDatestr();
        $this->makeTitle();
        $this->getData();
    }
}
