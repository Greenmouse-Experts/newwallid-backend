<?php

namespace App\Exports
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

use App\Models\Event;


/**
   * 
   */
  class EventExport implements FromView, WithHeadingRow, WithEvents
  {
  	
  	private $userid;

  	function __construct($userid)
  	{
  		$this->userid = $userid;
  	}

  	public function view(): View
    {
    	$events = Event::all();
        return view('exports.events', compact('events'));
    }

  	public function collection()
    {
    	$events = Event::where('user_id', $this->userid)->get();
    	info($events);
        return $events;
    }
  }  