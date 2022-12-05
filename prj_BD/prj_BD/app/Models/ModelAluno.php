<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAluno extends Model
{
    use HasFactory;
    protected $table = 'Aluno';
    protected $fillable=['nm_aluno', 'nm_mae_aluno', 'nm_pai_aluno'];
    protected $primaryKey = 'cd_rm_aluno';

}
