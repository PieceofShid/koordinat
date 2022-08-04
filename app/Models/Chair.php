<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chair extends Model
{
    use HasFactory;

    public function getSelectedChair($x, $y)
    {
        return $this->x == $x && $this->y == $y ? $this->getChairColorUrl() : $this->getChairUrl();
    }

    public function getChairUrl()
    {
        return 'bg-white';
    }

    public function getChairColorUrl()
    {
        return 'bg-blue-700';
    }
}
