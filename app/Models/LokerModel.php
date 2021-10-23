<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class LokerModel extends Model
{

    protected $table = 'loker';

    public function joinLoker()
    {
        $builder = $this->db->table('loker');
        $builder->select('loker.*, akun_perusahaan.nama_pt');
        $builder->join('akun_perusahaan','loker.id_perusahaan = akun_perusahaan.id_pt');
        return $builder;
    }

    public function getAllLoker()
    {
        $builder = $this->joinLoker();
        $builder->orderBy('id_loker', 'DESC');
        $builder->limit(6);
        return $builder->get()->getResultArray();
    }

    public function get6Loker()
    {
        $builder = $this->joinLoker();
        $builder->where('flag_loker', 1);
        $builder->orderBy('id_loker', 'DESC');
        $builder->limit(6);
        return $builder->get()->getResultArray();
    }
}