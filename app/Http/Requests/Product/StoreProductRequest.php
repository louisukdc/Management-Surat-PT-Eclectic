<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuratRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nomor'            => 'required|string|max:255',
            'nosurat'          => 'nullable|string|max:191',
            'id_tipe_surat'    => 'required|integer',
            'tempat_buat'      => 'nullable|string|max:255',
            'tgl_buat'         => 'required|date',
            'id_pembuat'       => 'required|integer',
            'nama_pembuat'     => 'nullable|string|max:255',
            'jabatan_pembuat'  => 'nullable|string|max:255',
        ];
    }
}
