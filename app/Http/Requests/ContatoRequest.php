<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case "POST": // CREATING A NEW REGISTER
                return [
                    'nome' => 'required|max:100',
                    'email' => 'email|max:200|unique:contatos',
                    'cpf' => 'required|min:11|max:11|unique:contatos',
                    'telefone' => 'required|max15',
                    'data_nascimento' => 'date_format: "d/m/Y"',
                    'avatar' => 'nullable|sometimes|image|mimes:png,jpg,jpeg,gif',
                ];
                break;

            case "PUT": // UPDATING A EXISTENT REGISTER
                return [
                    'nome' => 'required|max:100',
                    'email' => 'email|max:200|unique:contatos, email,' . $this->id,
                    'cpf' => 'nullable|min:11|max:11|unique:contatos, cpf,' . $this->id,
                    'telefone' => 'required|max15',
                    'data_nascimento' => 'date_format: "d/m/Y"',
                    'avatar' => 'nullable|sometimes|image|mimes:png,jpg,jpeg,gif',
                ];
                break;

            default:
                break;
        }
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'email.email' => 'Informe um e-mail válido',
            'cpf' => 'Informe apenas os números do CPF',
            'data_nascimento' => 'O campo data deve ser no formato DD/MM/YYYY',
        ];
    }
}
