<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['tipology_id', 'title', 'repo', 'collaborators', 'publishing_date'];

    public function typology()
    {
        return $this->belongsTo(typology::class);
    }

    public function getTypologyName()
    {
        return $this->typology ? "<span class='badge' style='background-color: {$this->typology->color}'>{$this->typology->name}</span>" : "Uncategorized";
    }


}