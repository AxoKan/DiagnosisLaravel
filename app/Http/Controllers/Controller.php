<?php

namespace App\Http\Controllers;
use App\Models\M_lelang;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Import session

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Method logout
   


//     public function aksi_login(Request $request)
// {
//     // Mengakses input dari request
//     $username = $request->input('username');
//     $password = $request->input('password');

//     // Model instantiation
//     $model = new M_lelang();

//     // Mencari user berdasarkan username
//     $user = $model->getWhere('user', ['user' => $username]);

//     // Cek jika user ditemukan dan password cocok
//     if ($user && $user->password == $password) { // Pastikan ini adalah cara yang aman
//         // Set session
//         session()->put('user', $user->user); // Pastikan ini sesuai dengan kolom yang ada di tabel
//         session()->put('id_user', $user->id_user);
//         session()->put('Level', $user->Level);

//         // Redirect ke dashboard jika login berhasil
//         return redirect()->to('dashboard_L');
//     } else {
//         // Redirect ke halaman login jika login gagal
//         return redirect()->to('login')->with('error', 'Invalid username or password.');
//     }
// }

public function aksi_login(Request $request)
    {
        // Mengakses input dari request
        $name = $request->input('username');
        $pw = $request->input('password');    
        // Membuat instance model
        
    
            $model = new M_lelang();
            $user = $model->getWhere('user', ['user' => $name]); // Dapatkan pengguna berdasarkan username
    
            if ($user && $user->password === $pw) { // Verifikasi password tanpa hash
                // Set session
                session()->put('user', $user->user);
                session()->put('id_user', $user->id_user);
                session()->put('Level', $user->Level);
    
                // Catat aktivitas login (opsional)
                // $activityLog = [
                //     'id_user' => session()->get('id_user'),
                //     'activity' => 'Login',
                //     'time' => now()
                // ];
                // $model->logActivity($activityLog);
    
                return redirect()->to('dashboard_L');
            } else {
                return redirect()->to('login')->with('error', 'Invalid username or password.');
            }
        }


    

    // Menampilkan halaman login
    public function login()
    {
            
        return view('login'); // Langsung return view, tanpa echo
    }

    // Method dashboard
    public function dashboard()
    {
        $model = new M_lelang();
        
        // Fetch data dari tabel 'gejala', diurutkan berdasarkan 'id_gejala'
        $data['gejala'] = $model->tampil2('gejala', 'id_gejala');
        
        // Menampilkan views dengan data
        echo view('header');
        echo view('menu');
        echo view('dashboard', $data);
        echo view('footer');
    }
    public function dashboard_L()
    {
        $model = new M_lelang();
        
        
        // Menampilkan views dengan data
        echo view('header');
        echo view('menu_L');
        echo view('dashboard_L');
        echo view('footer');
    }
    public function gejala()
    {
        $model = new M_lelang();
        
        // Fetch the data from the 'gejala' table, ordered by 'id_gejala'
        $data['gejala'] = $model->tampil('gejala', 'id_gejala');
      
        
        // Load the views and pass the data to 'dashboard' view
        echo view('header');
        echo view('menu_L');
        echo view('gejala', $data);  // Make sure to pass the $data array here
        echo view('footer');
    }
    public function delete($id)
    {
        $model =new M_lelang();
        $where= array('id_gejala'=>$id);
        $model->hapus('gejala',$where);
        return redirect()->to('gejala');
        }
        public function tambah()
        {
            $model = new M_lelang();

            echo view('header');
            echo view('menu_L');
            echo view('tambah');
            echo view('footer');
        }
        public function aksi_tambah(Request $request)
        {
            // Instantiate the model
            $model = new M_lelang(); 
        
            // Retrieve data from the request
            $a = $request->input('namaG');
            $b = $request->input('namaM');
            $c = $request->input('namaS');
        
            // Get the count of current entries in the 'gejala' table
            $count = $model->getMenuCount(); 
        
            // Increment the count to get the new sequence number
            $sequence = $count + 1;
        
            // Format the sequence number into the desired code format
            $nomor = sprintf('G%02d', $sequence);
        
            // Prepare data for insertion
            $isi = [
                'Kode' => $nomor,
                'NamaG' => $a,
                'Masalah' => $b,
                'Solusi' => $c
            ];
        
            // Perform the insert operation
            $model->tambah('gejala', $isi);
        
            // Redirect to the Gejala page
            return redirect()->route('gejala');
        }
        
}
