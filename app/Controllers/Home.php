<?php

namespace App\Controllers;

use App\Models\JastipM;

class Home extends BaseController
{
    public function __construct()
    {
        $this->JastipM = new JastipM();
    }

    public function index()
    {
        $cek['jumlah'] = $this->KirimanM->where(['id_user' => session()->get('id'), 'status !=' => 6])->countAllResults();
        return view('index', $cek);
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function imprint()
    {
        return view('imprint');
    }
    // new
    public function jadwal()
    {
        // Ji Jerman - Indonesia
        // IJ Indonesia - Jerman
        $level = 1; // Ganti dengan level yang sesuai
        $result = $this->JastipM->getJastipByLevel($level);
        $result2 = $this->JastipM->getJastipIJByLevel($level);

        $JastipJI = $this->JastipM->where('level', 1)->get()->getResult();

        $JastipIJ = $this->JastipM->where('level', 2)->get()->getResult();
        $data = [
            'result' => $result,
            'result2' => $result2,
            'jastipJI' => $JastipJI,
            'jastipIJ' => $JastipIJ
        ];
        return view('jadwal', $data);
    }
    // end new
    public function login()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('login', $data);
    }
    public function cek_login()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'trim|required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'valid_email' => 'Harus menggunakan format email yang benar.',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password tidak boleh kosong.',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/login'))->withInput();
        }

        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);
        $password = $this->request->getVar('password');

        $data = $this->UserM->where('email', $email)->get()->getRow();

        if ($data) {
            if ($data->aktif == 1) {
                session()->setFlashdata('pesan', 'Maaf, Akun Anda dinonaktifkan karena kami mendeteksi ada kesalahan, hubungi Admin untuk info detailnya.');
                return redirect()->to('/');
            }

            $pass = $data->password;
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'            => $data->id,
                    'kode_admin'    => $data->kode_admin,
                    'ref'           => $data->ref,
                    'nama'          => $data->nama,
                    'wa'            => $data->wa,
                    'hp'            => $data->hp,
                    'email'         => $data->email,
                    'aktif'         => $data->aktif,
                    'level'         => $data->level,
                    'logged_in'     => TRUE
                ];
                $this->session->set($ses_data);

                switch ($data->level) {
                    case 0:
                        session()->setFlashdata('pesan', 'Login berhasil, silahkan kirim paket.');
                        return redirect()->to('/kirim');
                        break;

                    case 1:
                        session()->setFlashdata('pesan', 'Login berhasil, Selamat datang Admin.');
                        return redirect()->to('/admin');
                        break;
                    case 2:
                        return redirect()->to('/super');
                        break;
                }
            } else {
                session()->setFlashdata('pesan', 'Kombinasi email dan password tidak sesuai.');
                return redirect()->to('/login')->withInput();
            }
        }
        session()->setFlashdata('pesan', 'Akun belum terdaftar. Silahkan daftar akun terlebih dahulu.');
        return redirect()->to('/login');
    }

    public function daftar()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        return view('daftar', $data);
    }
    public function simpan_daftar()
    {
        if (!$this->validate([

            'nama' => [
                'rules' => 'trim|required|min_length[3]|max_length[40]',
                'errors' => [
                    'required' => 'Nama 3-40 karakter',
                    'min_length' => 'Nama 3-40 karakter',
                    'max_length' => 'Nama 3-40 karakter',
                ]
            ],
            'email' => [
                'rules' => 'trim|required|valid_email|is_unique[tb_user.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'valid_email' => 'Harus menggunakan format email yang benar.',
                    'is_unique' => 'Email sudah pernah didaftarkan.',
                ]
            ],
            'wa' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]|is_unique[tb_user.wa]',
                'errors' => [
                    'required' => 'Nomor Whatsapp 10-13 digit',
                    'min_length' => 'Nomor Whatsapp 10-13 digit',
                    'max_length' => 'Nomor Whatsapp 10-13 digit',
                    'is_unique' => 'Whatsapp sudah pernah didaftarkan.',
                ]
            ],
            'hp' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]|is_unique[tb_user.hp]',
                'errors' => [
                    'required' => 'Nomor HP 10-13 digit',
                    'min_length' => 'Nomor HP 10-13 digit',
                    'max_length' => 'Nomor HP 10-13 digit',
                    'is_unique' => 'Nomor HP sudah pernah didaftarkan.',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong.',
                ]
            ],
            'kodepos' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kode Pos tidak boleh kosong.',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong.',
                    'min_length' => 'Password minimal 6 digit',
                ]
            ],
            'setuju' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Mohon setuju syarat dan ketentuan.',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/daftar'))->withInput();
        }

        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $ref = substr(str_shuffle($permitted_chars), 0, 6);

        $nama = strtoupper($this->request->getVar('nama'));
        $hp = $this->request->getVar('hp');
        $wa = $this->request->getVar('wa');
        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);

        $kodepos = $this->request->getVar('kodepos');
        $alamat = $this->request->getVar('alamat');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $setuju = $this->request->getVar('setuju');


        $this->UserM->save([
            'ref' => $ref,
            'nama' => $nama,
            'wa' => $wa,
            'hp' => $hp,
            'alamat' => $alamat,
            'kodepos' => $kodepos,
            'email' => $email,
            'password' => $password,
            'setuju' => $setuju,
        ]);

        $cekemail = $this->UserM->where('email', $email)->get()->getRow();

        if ($cekemail) {
            $ses_data = [
                'id'            => $cekemail->id,
                'nama'          => $cekemail->nama,
                'wa'            => $cekemail->wa,
                'hp'            => $cekemail->hp,
                'email'         => $cekemail->email,
                'ref'           => $cekemail->ref,
                'aktif'         => $cekemail->aktif,
                'level'         => $cekemail->level,
                'logged_in'     => TRUE
            ];
            $this->session->set($ses_data);

            $this->session->setFlashdata('pesan', 'Selamat, kamu berhasil mendaftar, silahkan mengirim paket.');
            return redirect()->to('/kirim');
        }
    }
    public function simpan_profil()
    {
        if (!$this->validate([

            'nama' => [
                'rules' => 'trim|required|min_length[3]|max_length[40]',
                'errors' => [
                    'required' => 'Nama 3-40 karakter',
                    'min_length' => 'Nama 3-40 karakter',
                    'max_length' => 'Nama 3-40 karakter',
                ]
            ],
            'email' => [
                'rules' => 'trim|required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'valid_email' => 'Harus menggunakan format email yang benar.',
                    'is_unique' => 'Email sudah pernah didaftarkan.',
                ]
            ],
            'wa' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor Whatsapp 10-13 digit',
                    'min_length' => 'Nomor Whatsapp 10-13 digit',
                    'max_length' => 'Nomor Whatsapp 10-13 digit',
                    'is_unique' => 'Whatsapp sudah pernah didaftarkan.',
                ]
            ],
            'hp' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor HP 10-13 digit',
                    'min_length' => 'Nomor HP 10-13 digit',
                    'max_length' => 'Nomor HP 10-13 digit',
                    'is_unique' => 'Nomor HP sudah pernah didaftarkan.',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong.',
                ]
            ],
            'kodepos' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kodepos tidak boleh kosong.',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong.',
                    'min_length' => 'Password minimal 6 digit',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/profil-member'))->withInput();
        }

        $id = session()->get('id');

        $nama = strtoupper($this->request->getVar('nama'));
        $hp = $this->request->getVar('hp');
        $wa = $this->request->getVar('wa');
        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);
        $kodepos = $this->request->getVar('kodepos');
        $alamat = $this->request->getVar('alamat');
        $password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

        $cekemail = $this->UserM->where(['id !=' => $id, 'email' => $email])->get()->getRow();
        if ($cekemail) {
            $this->session->setFlashdata('pesan', 'Email sudah ada yang gunakan.');
            return redirect()->to(base_url('/profil-member'))->withInput();
        }
        $cekwa = $this->UserM->where(['id !=' => $id, 'wa' => $wa])->get()->getRow();
        if ($cekwa) {
            $this->session->setFlashdata('pesan', 'Nomor Whatsapp sudah ada yang gunakan.');
            return redirect()->to(base_url('/profil-member'))->withInput();
        }
        $cekhp = $this->UserM->where(['id !=' => $id, 'hp' => $hp])->get()->getRow();
        if ($cekhp) {
            $this->session->setFlashdata('pesan', 'Nomor HP sudah ada yang gunakan.');
            return redirect()->to(base_url('/profil-member'))->withInput();
        }


        $this->UserM->save([
            'id' => $id,
            'nama' => $nama,
            'wa' => $wa,
            'hp' => $hp,
            'alamat' => $alamat,
            'kodepos' => $kodepos,
            'email' => $email,
            'password' => $password,
        ]);

        $cekemail = $this->UserM->where('email', $email)->get()->getRow();

        if ($cekemail) {
            $ses_data = [
                'id'            => $cekemail->id,
                'nama'          => $cekemail->nama,
                'wa'            => $cekemail->wa,
                'hp'            => $cekemail->hp,
                'email'         => $cekemail->email,
                'ref'           => $cekemail->ref,
                'aktif'         => $cekemail->aktif,
                'level'         => $cekemail->level,
                'logged_in'     => TRUE
            ];
            $this->session->set($ses_data);

            $this->session->setFlashdata('pesan', 'Berhasil merubah data profil.');
            return redirect()->to('/profil-member');
        }
    }
    public function kirim()
    {
        return view('kirim');
    }
    public function kejerman()
    {
        $cek = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        $data = [
            'validation' => \Config\Services::validation(),
            'dataku' => $cek,
        ];
        return view('kejerman', $data);
    }
    public function kirim_kejerman()
    {
        if (!$this->validate([

            'nama_paket' => [
                'rules' => 'trim|required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'Nama Paket 3-50 karakter',
                    'min_length' => 'Nama Paket 3-50 karakter',
                    'max_length' => 'Nama Paket 3-50 karakter',
                ]
            ],
            'nama' => [
                'rules' => 'trim|required|min_length[3]|max_length[40]',
                'errors' => [
                    'required' => 'Nama 3-40 karakter',
                    'min_length' => 'Nama 3-40 karakter',
                    'max_length' => 'Nama 3-40 karakter',
                ]
            ],
            'email' => [
                'rules' => 'trim|required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'valid_email' => 'Harus menggunakan format email yang benar.',
                ]
            ],
            'wa' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor Whatsapp 10-13 digit',
                    'min_length' => 'Nomor Whatsapp 10-13 digit',
                    'max_length' => 'Nomor Whatsapp 10-13 digit',
                    'is_unique' => 'Whatsapp sudah pernah didaftarkan.',
                ]
            ],
            'hp' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor HP 10-13 digit',
                    'min_length' => 'Nomor HP 10-13 digit',
                    'max_length' => 'Nomor HP 10-13 digit',
                    'is_unique' => 'Nomor HP sudah pernah didaftarkan.',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong.',
                ]
            ],
            'kodepos' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kode Pos tidak boleh kosong.',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/kejerman'))->withInput();
        }

        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $kode_paket = substr(str_shuffle($permitted_chars), 0, 8);
        $nama_paket = ucfirst($this->request->getVar('nama_paket'));

        $nama = strtoupper($this->request->getVar('nama'));
        $hp = $this->request->getVar('hp');
        $wa = $this->request->getVar('wa');
        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);

        $kodepos = $this->request->getVar('kodepos');
        $alamat = $this->request->getVar('alamat');
        $catatan = $this->request->getVar('catatan');

        if (!$catatan == "") {
            $this->KirimanM->save([
                'kode_paket' => $kode_paket,
                'id_user' => session()->get('id'),
                'nama_paket' => $nama_paket,
                'nama_penerima' => $nama,
                'email_penerima' => $email,
                'wa_penerima' => $wa,
                'hp_penerima' => $hp,
                'alamat_penerima' => $alamat,
                'kodepos' => $kodepos,
                'negara' => "Jerman",
                'catatan' => $catatan,
            ]);
        } else {
            $this->KirimanM->save([
                'kode_paket' => $kode_paket,
                'id_user' => session()->get('id'),
                'nama_paket' => $nama_paket,
                'nama_penerima' => $nama,
                'email_penerima' => $email,
                'wa_penerima' => $wa,
                'hp_penerima' => $hp,
                'alamat_penerima' => $alamat,
                'kodepos' => $kodepos,
                'negara' => "Jerman",
            ]);
        }

        $this->session->setFlashdata('pesan', 'Berhasil mengirim paket, menunggu verifikasi.');
        return redirect()->to('/paketku');
    }
    public function keindonesia()
    {

        $cek = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        $data = [
            'validation' => \Config\Services::validation(),
            'dataku' => $cek,
        ];
        return view('keindonesia', $data);
    }
    public function kirim_keindonesia()
    {
        if (!$this->validate([

            'nama_paket' => [
                'rules' => 'trim|required|min_length[3]|max_length[50]',
                'errors' => [
                    'required' => 'Nama Paket 3-50 karakter',
                    'min_length' => 'Nama Paket 3-50 karakter',
                    'max_length' => 'Nama Paket 3-50 karakter',
                ]
            ],
            'nama' => [
                'rules' => 'trim|required|min_length[3]|max_length[40]',
                'errors' => [
                    'required' => 'Nama 3-40 karakter',
                    'min_length' => 'Nama 3-40 karakter',
                    'max_length' => 'Nama 3-40 karakter',
                ]
            ],
            'email' => [
                'rules' => 'trim|required|valid_email',
                'errors' => [
                    'required' => 'Email tidak boleh kosong.',
                    'valid_email' => 'Harus menggunakan format email yang benar.',
                ]
            ],
            'wa' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor Whatsapp 10-13 digit',
                    'min_length' => 'Nomor Whatsapp 10-13 digit',
                    'max_length' => 'Nomor Whatsapp 10-13 digit',
                    'is_unique' => 'Whatsapp sudah pernah didaftarkan.',
                ]
            ],
            'hp' => [
                'rules' => 'trim|required|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'Nomor HP 10-13 digit',
                    'min_length' => 'Nomor HP 10-13 digit',
                    'max_length' => 'Nomor HP 10-13 digit',
                    'is_unique' => 'Nomor HP sudah pernah didaftarkan.',
                ]
            ],
            'alamat' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong.',
                ]
            ],
            'kodepos' => [
                'rules' => 'trim|required',
                'errors' => [
                    'required' => 'Kode Pos tidak boleh kosong.',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/keindonesia'))->withInput();
        }

        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $kode_paket = substr(str_shuffle($permitted_chars), 0, 8);
        $nama_paket = ucfirst($this->request->getVar('nama_paket'));

        $nama = strtoupper($this->request->getVar('nama'));
        $hp = $this->request->getVar('hp');
        $wa = $this->request->getVar('wa');
        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);

        $kodepos = $this->request->getVar('kodepos');
        $alamat = ucfirst($this->request->getVar('alamat'));
        $catatan = ucfirst($this->request->getVar('catatan'));

        if (!$catatan == "") {
            $this->KirimanM->save([
                'id_user' => session()->get('id'),
                'kode_paket' => $kode_paket,
                'nama_paket' => $nama_paket,
                'nama_penerima' => $nama,
                'email_penerima' => $email,
                'wa_penerima' => $wa,
                'hp_penerima' => $hp,
                'alamat_penerima' => $alamat,
                'kodepos' => $kodepos,
                'negara' => "Indonesia",
                'catatan' => $catatan,
            ]);
        } else {
            $this->KirimanM->save([
                'id_user' => session()->get('id'),
                'kode_paket' => $kode_paket,
                'nama_paket' => $nama_paket,
                'nama_penerima' => $nama,
                'email_penerima' => $email,
                'wa_penerima' => $wa,
                'hp_penerima' => $hp,
                'alamat_penerima' => $alamat,
                'kodepos' => $kodepos,
                'negara' => "Indonesia",
            ]);
        }

        $this->session->setFlashdata('pesan', 'Berhasil mengirim paket, menunggu verifikasi.');
        return redirect()->to('/paketku');
    }
    public function profil_member()
    {
        $member = $this->UserM->where('id', session()->get('id'))->get()->getRow();
        $data = [
            'validation' => \Config\Services::validation(),
            'member' => $member,
        ];
        return view('profil_member', $data);
    }
    public function paketku()
    {
        $data['paketku'] = $this->KirimanM->where('id_user', session()->get('id'))->get()->getResult();
        return view('paketku', $data);
    }

    public function bayar($kode_paket)
    {
        $cek['bayar'] = $this->KirimanM->bayar($kode_paket)->getRow();
        return view('bayar', $cek);
    }
    public function hapus_paketku()
    {
        $id = $this->request->getVar('id_paket');
        $cek = $this->KirimanM->where('kode_paket', $id)->get()->getRow();
        if ($cek) {
            $this->KirimanM->where('id', $cek->id)->delete();
        }
        $this->session->setFlashdata('pesan', 'Berhasil menghapus Kiriman.');
        return redirect()->to('/paketku');
    }

    public function terms()
    {
        return view('terms');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
