<?php

namespace App\Http\Controllers;

class Schedule
{
    public string $date;
    public array $session;
    public int $field;
    // public int $booking;

    public function __construct($date)
    {
        $this->date = $date;
        $this->session = array_fill(0, 20, true);
        $this->field = 1;
        // $this->booking = null;
    }
}
