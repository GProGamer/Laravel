<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//Replacé 'FormRequest' por 'StoreTaskRequest'  para no redefinir las reglas, sino heredarlas
//de StoreTaskRequest 
class UpdateTaskRequest extends StoreTaskRequest
{
    
}
