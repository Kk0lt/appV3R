<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Usager as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UsagerRequest extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed> 
     * \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'username' => 'required|min:4|max:50',
            'password' => 'required|min:6',
            'lastname' => 'min:3|max:50',
            'name' => 'min:3|max:50',
        ];
    }
    
    
    public function messages()
    {
            return [     
                'lastname.min' => 'Le nom doit avoir au minimum 3 caractères.',
                'lastname.max' => 'Le nom a atteint le nombre maximal de caractères.',
                                 
                'name.max' => 'Le prenom a atteint le nombre maximal de caractères.',
                'name.min' => 'Le prenom doit avoir minimum 3 caractères.',
         
                'password.min' => 'Le mot de passe doit avoir au minimum 6 caractères.',
                'password.max' => 'Le mot de passe a atteint le nombre maximal de caractères.',
                'password.required' => 'Le mot de passe est obligatoire.',
                
                'username.min' => 'Le nom d\'utilisateur doit avoir au minimum 4 caractères.',
                'username.max' => 'Le nom d\'utilisateur a atteint le nombre maximal de caractères.',
                'username.required' => 'Le nom d\'utilisateur est obligatoire.',
                'username.unique' => 'cette usernom d\'utilisateurname est déja utilisé.',
            
            ];
    }
}
