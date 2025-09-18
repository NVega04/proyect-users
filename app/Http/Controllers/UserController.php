<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Usuario;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function viewUser(){
        return view ('user_registration');
    }

    public function formUser(Request $request){
        $rol = Rol::select('id')
            ->where ('nombre_cargo', '=', $request->position)
            ->first();

        $user = new Usuario();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_rol = $rol->id;
        $user->entry_date = $request->entry_date;
        $user->signature = $request->signature;
        $pdf = Pdf::loadView('contract', ['user' => $user]);
        $id_contract = Str::uuid();
        $contract = Storage::put("contracts/$id_contract.pdf", $pdf->output());
        $user->contract = "contracts/$id_contract.pdf";

        if(!$contract){
            return to_route('view_users');
        }
        
        try {
            $user->save();
            $request->session()->flash('mensaje', 'Usuario creado con éxito');
            return to_route('view_table');
        } catch(Exception) {
            return to_route('view_users');
        }
    }

    public function viewTable(){
        $users = Usuario::select('id', 'name', 'email', 'id_rol', 'entry_date', 'signature', 'contract')
            ->with('rol')
            ->get();
        
        $response = Http::get('https://api-colombia.com/api/v1/holiday/year/2025');
        $holidays = $response->collect()->map(function($holiday){
            return new Carbon($holiday['date']);
        });

        foreach($users as $user){
            $dateEntry = $user->entry_date;
            $user->workDays = $dateEntry->diffInDaysFiltered(function(Carbon $date) use ($holidays){
                return $date->isWeekday() && $holidays->doesntContain($date);
            }, now());
        }

        return view ('table_users', ['users' => $users]);
    }

    public function deleteUser(Request $request){
        Usuario::where('id', '=', $request->id_user)
            ->delete();

        try {
            $request->session()->flash('mensaje', 'Registro de usuario eliminado');
            return to_route('view_table');
        } catch(Exception) {
            return to_route('view_table');
        }
    }

    public function viewContract($user){
        $user = Usuario::where('id', '=', $user)
            ->first();

        return Storage::response($user->contract);
    }

    public function viewEditUser($user){
        $user = Usuario::where('id', '=', $user)
            ->first();

        return view ('edit_users', ['user' => $user]);
    }

    public function editUser(Request $request, $user){
        $user = Usuario::where('id', '=', $user)
            ->first();
        
        $rol = Rol::select('id')
            ->where ('nombre_cargo', '=', $request->position)
            ->first();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->id_rol = $rol->id;
        $user->entry_date = $request->entry_date;
        $pdf = Pdf::loadView('contract', ['user' => $user]);
        $id_contract = Str::uuid();
        $contract = Storage::put("contracts/$id_contract.pdf", $pdf->output());
        $user->contract = "contracts/$id_contract.pdf";

        if(!$contract){
            return to_route('view_users');
        }

        try {
            $request->session()->flash('mensaje', 'Registro de usuario editado con éxito');
            $user->save();
            return to_route('view_table');
        } catch(Exception) {
            return to_route('view_users');
        }
    }
}
