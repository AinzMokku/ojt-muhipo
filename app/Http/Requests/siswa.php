<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class siswa extends FormRequest
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
        return [
            'nama' => 'required|max:60',
            'id_sekolah' => 'required',
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
            'tempat' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'alamat' => 'required|max:100',
            'info' => 'required',
            'nohp' => 'required|numeric',
            'program' => 'required',
            'nama_ayah' => 'required|max:60',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nohp_ayah' => 'required|numeric',
            'nama_ibu' => 'required|max:60',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required',
            'nohp_ibu' => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'required' => ':attribute Wajib diisi!',
            'numeric' => ':attribute Harus diisi Angka!',
        ];
    }
}
