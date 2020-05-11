<?php namespace App\Models;

use CodeIgniter\Model;

class ModelKorisnik extends Model {
    protected $table      = 'korisnik';
    protected $primaryKey = 'idK';
    protected $returnType = 'App\Entities\Korisnik';
    protected $allowedFields = ['IdK', 'Imejl', 'Sifra', 'Ime', 'Prezime','Adresa','Grad','Drzava','PostBroj','IdR'];
    
    public function pretraga($tekst) {
        return $this->like('naslov', $tekst)
                ->orLike('sadrzaj', $tekst)->findAll();      
    }
    
    public function dohvatiImejl($imejl) {
        return $this->where('imejl', $imejl)->find();      
    }

    
}