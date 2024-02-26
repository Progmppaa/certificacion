<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DocumentController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required',
                'date' => 'required',
                'addr' => 'required',
                'rif' => 'required',
                'nro' => 'required',
                'date_cont' => 'required',
                'nro_cont' => 'required',
                'nro_reg' => 'required',
                'tipo_apro' => 'required',
                'uso' => 'required',
                'nro_apro' => 'required',
                'utm' => 'required',
                'region' => 'required',
                'caudal' => 'required',
            ]);
            Document::create([
                'direccion' => $request->addr,
                'empresa' => $request->name,
                'rif' => $request->rif,
                'uuid' => (string) Str::uuid(),
                'fecha_documento' => self::formatDate($request->date),
                'nro_hoja' => $request->nro,
                'fecha_contrato' => self::formatDate($request->date_cont),
                'nro_contrato' => $request->nro_cont,
                'n_registro_user' => $request->nro_reg,
                'tipo_aprov' => $request->tipo_apro,
                'nro_aprov' => $request->nro_apro,
                'uso' => $request->uso,
                'utm' => $request->utm,
                'region_hidrogafica' => $request->region,
                'caudal' => $request->caudal,
                'user_id' => Auth::id(),
            ]);

            return redirect()->route('home')->with('success', 'Se han guardado los datos correctamente.');
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->route('home')->with('error', 'Error al procesar los datos, verifique e intente nuevamente.');
        }
    }

    public function show($uuid)
    {
        $data = Document::where('uuid', $uuid)->firstOrFail();
        return view('pages.public.verification', compact('data'));
    }

    public function edit(Document $document)
    {
        //
    }

    public function update(Request $request, Document $document)
    {
        //
    }

    public function destroy($id)
    {
        Document::find($id)->delete();
        return redirect()->route('home')
            ->with('success', 'Se elimino el registro correctamente!');
    }

    public function formatDate($date)
    {
        switch (date('m', strtotime($date))) {
            case '1':$mes = 'Enero';
                break;
            case '2':$mes = 'Febrero';
                break;
            case '3':$mes = 'Marzo';
                break;
            case '4':$mes = 'Abril';
                break;
            case '5':$mes = 'Mayo';
                break;
            case '6':$mes = 'Junio';
                break;
            case '7':$mes = 'Julio';
                break;
            case '8':$mes = 'Agosto';
                break;
            case '9':$mes = 'Septiembre';
                break;
            case '10':$mes = 'Octubre';
                break;
            case '11':$mes = 'Noviembre';
                break;
            case '12':$mes = 'Diciembre';
                break;
            default:break;
        }
        return date('d', strtotime($date)) . ' de ' . $mes . ' de ' . date('Y', strtotime($date));
    }
}