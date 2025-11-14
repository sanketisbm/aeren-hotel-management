<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function index()
    {

        // --- NEWSLETTERS ---
        $newsletters = [
            [
                "name" => "December 2024 Newsletter",
                "pdf" => asset('assets/Images/newsLetter/Newsletter December, 2024.pdf'),
                "date" => "2025-01-18",
            ],
            [
                "name" => "Grooming Session",
                "pdf" => asset('assets/Images/newsLetter/grooming session.pdf'),
                "date" => "2025-10-31",
            ],
        ];

        // --- EVENTS ---
        $events = [
            [
                "name" => "Biodiversity and Wildlife Studies",
                "img" => asset('assets/Images/events/Month of October 2025/Biodiversity and Wildlife Studies 24.10.2025/WhatsApp Image 2025-10-24 at 5.13.06 PM.jpeg'),
                "date" => "2025-10-24",
            ],
            [
                "name" => "Career Guidance (Patseoni & Chhura)",
                "img" => asset('assets/Images/events/Month of October 2025/Career Guidance 14.10.2025 (Patseoni & Chhura)/WhatsApp Image 2025-10-15 at 2.11.37 PM (1).jpeg'),
                "date" => "2025-10-15",
            ],
            [
                "name" => "Diwali Milam",
                "img" => asset('assets/Images/events/Month of October 2025/Diwali Milam 18.10.2025/WhatsApp Image 2025-10-17 at 7.11.06 PM.jpeg'),
                "date" => "2025-10-18",
            ],
            [
                "name" => "Biodiversity and Wildlife Studies",
                "img" => asset('assets/Images/events/Month of October 2025/Biodiversity and Wildlife Studies 24.10.2025/WhatsApp Image 2025-10-24 at 5.13.06 PM.jpeg'),
                "date" => "2025-10-24",
            ],
            [
                "name" => "Career Guidance (Patseoni & Chhura)",
                "img" => asset('assets/Images/events/Month of October 2025/Career Guidance 14.10.2025 (Patseoni & Chhura)/WhatsApp Image 2025-10-15 at 2.11.37 PM (1).jpeg'),
                "date" => "2025-10-15",
            ],
            [
                "name" => "Diwali Milam",
                "img" => asset('assets/Images/events/Month of October 2025/Diwali Milam 18.10.2025/WhatsApp Image 2025-10-17 at 7.11.06 PM.jpeg'),
                "date" => "2025-10-18",
            ],
        ];

        // --- CIRCULARS & NOTICES ---
        $circulars = [
            [
                "name" => "Admission Notice",
                "pdf" => asset('assets/Images/circulars/Admission Notice.pdf'),
                "date" => "2024-02-26",
            ],
            [
                "name" => "Circular (All HODs)",
                "pdf" => asset('assets/Images/circulars/Circular (All HODs).pdf'),
                "date" => "2025-02-06",
            ],
            [
                "name" => "Admission Notice",
                "pdf" => asset('assets/Images/circulars/Admission Notice.pdf'),
                "date" => "2024-02-26",
            ],
            [
                "name" => "Circular (All HODs)",
                "pdf" => asset('assets/Images/circulars/Circular (All HODs).pdf'),
                "date" => "2025-02-06",
            ],
            [
                "name" => "Admission Notice",
                "pdf" => asset('assets/Images/circulars/Admission Notice.pdf'),
                "date" => "2024-02-26",
            ],
            [
                "name" => "Circular (All HODs)",
                "pdf" => asset('assets/Images/circulars/Circular (All HODs).pdf'),
                "date" => "2025-02-06",
            ],
            [
                "name" => "Admission Notice",
                "pdf" => asset('assets/Images/circulars/Admission Notice.pdf'),
                "date" => "2024-02-26",
            ],
            [
                "name" => "Circular (All HODs)",
                "pdf" => asset('assets/Images/circulars/Circular (All HODs).pdf'),
                "date" => "2025-02-06",
            ],
        ];

        // --- Sort each array by date (latest first) ---
        usort($newsletters, fn($a, $b) => strtotime($b['date']) - strtotime($a['date']));
        usort($events, fn($a, $b) => strtotime($b['date']) - strtotime($a['date']));
        usort($circulars, fn($a, $b) => strtotime($b['date']) - strtotime($a['date']));

        return view('front.home', compact('newsletters', 'events', 'circulars'));
    }

}
