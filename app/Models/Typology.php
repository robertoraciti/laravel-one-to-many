<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function getTypologyName()
    {
        return $this->typology ? "<span class='badge' style='background-color: {$this->typology->color}'>{$this->typology->name}</span>" : "Uncategorized";
    }
}