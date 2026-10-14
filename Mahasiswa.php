
<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $ipk;

    public function __construct($nim, $nama, $prodi, $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function info()
    {
        return "NIM: " . $this->nim .
            "<br>Nama: " . $this->nama .
            "<br>Prodi: " . $this->prodi .
            "<br>IPK: " . number_format($this->ipk, 2);
    }

    public function predikat()
    {
        if ($this->ipk >= 3.75) {
            return "Cumlaude";
        } elseif ($this->ipk >= 3.50) {
            return "Sangat Memuaskan";
        } else {
            return "Memuaskan";
        }
    }
}
