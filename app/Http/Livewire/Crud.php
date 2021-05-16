<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Crud extends Component
{
    // Declaration des variables
    public $students, $name, $email, $mobile, $student_id;
    // Verifier si le Modal est ouvert
    public $isModalOpen = 0;

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.crud');
    }

    //  Create = creation ou ajout
    public function create(){
        // Vider le formulaire
        $this->resetCreateForm();
        // Ouvrir le modal
        $this->openModalPopover();
    }

    // Fonction openModalPopover() - Modal ouvert
    public function openModalPopover(){
        $this->isModalOpen = true;
    }

    // Fonction closeModalPopover() - Modal ferme
    public function closeModalPopover(){
        $this->isModalOpen = false;
    }

    // vider le formulaire d'ajout
    public function resetCreateForm(){
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }

    public function store(){
        // Validation des champs - champs obligatoires
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);
        
        // Creation ou MAJ
        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);
        
        // Message
        session()->flash('message', $this->student_id ? 'Student update.' : 'Student created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    // Mise a jour 
    public function edit($id){
        $student = Student::findOrFail($id);
        $this->id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->mobile = $student->mobile;

        $this->openModalPopover();
    }

    // Supression
    public function delete($id){
        Student::find($id)->delete();
        session()->flash('message', 'Student deleted');
    }

}
