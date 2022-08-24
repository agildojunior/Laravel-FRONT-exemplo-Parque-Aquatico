<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{

    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email', $google_user->getEmail())->first();

            if(!$user) {  
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'avatar' => $google_user->getAvatar()
                ]);

                Auth::login($new_user);

                return redirect()->intended('/inicio');
            }
            else{
                Auth::login($user);
                $nomeUserLogado = Auth::user()->name;
            
                return redirect()->intended('/inicio');
            }
        } catch (\Throwable $th) {
            dd('Algo deu errado! '. $th->getMessage());
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


//-----------------------------------------------------------
//      dados do usuario logado para todas as paginas
//-----------------------------------------------------------
//-----------------------------------------------------------
    //taxi
    public function InfosUserLogadoTaxi(){
        $teste = Auth::user();
        if($teste != null){
            $UserLogado = ([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email
            ]);
        }else{
            $UserLogado = ([
                'name' => null,
                'email' => null
            ]);
        }
        return view('taxi', compact('UserLogado'));
    }

    //hospedagem
    public function InfosUserLogadoHospedagem(){
        $teste = Auth::user();
        if($teste != null){
            $UserLogado = ([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email
            ]);
        }else{
            $UserLogado = ([
                'name' => null,
                'email' => null
            ]);
        }

        return view('hospedagem', compact('UserLogado'));
    }
    
    //Waterpark
    public function InfosUserLogadoWaterpark(){
        $teste = Auth::user();
        if($teste != null){
            $UserLogado = ([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email
            ]);
        }else{
            $UserLogado = ([
                'name' => null,
                'email' => null
            ]);
        }

        return view('waterpark', compact('UserLogado'));
    }

    //Welcome
    public function InfosUserLogadoWelcome(){
        $teste = Auth::user();
        if($teste != null){
            $UserLogado = ([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email
            ]);
        }else{
            $UserLogado = ([
                'name' => null,
                'email' => null
            ]);
        }

        return view('welcome', compact('UserLogado'));
    }

    //relatorios
    public function InfosUserLogadoRelatorios(){
        $teste = Auth::user();
        if($teste != null){
            $UserLogado = ([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email
            ]);
        }else{
            $UserLogado = ([
                'name' => null,
                'email' => null
            ]);
        }

        //funcao para informaçoes das corridas
        $header = [
            'x-access-token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjbnBqIjoiMTIzNCIsImV4cCI6MTY2MDYxMjE4N30.7I14fCQTLz_Fw4atNmuo2wfd6nYNT7yMxypX6Ofq4Ik'
        ];
        
        $response = Http::withHeaders($header)->get('http://127.0.0.1:8090/relatorio/corridas/'. 1);
        $responseArray = $response->json();

        $response2 = Http::withHeaders($header)->get('http://127.0.0.1:8090/relatorio/corridas/');
        $responseArray2 = $response2->json();
        // dd($responseArray2);
        // dd($responseArray);

        return view('relatorios', compact('UserLogado','responseArray', 'responseArray2'));
    }
}
