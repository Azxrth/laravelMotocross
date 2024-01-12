<?php


namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Training;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }

    public function create()
    {
        // Récupérer la liste des trainings pour la vue de création
        $trainings = Training::all();
        return view('schedules.create', compact('trainings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'training_id' => 'required|exists:trainings,id',
        ]);

        Schedule::create($request->all());

        return redirect()->route('schedules.index')->with('success', 'Schedule created successfully.');
    }

    // Ajoutez les méthodes pour la mise à jour et la suppression selon vos besoins
}