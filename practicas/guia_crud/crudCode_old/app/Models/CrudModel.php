<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function listarNombres()
    {
        $nombres = $this->db->query('SELECT * FROM t_personas');

        return $nombres->getResult();
    }

    public function insertar($datos)
    {
        $nombres = $this->db->table('t_personas');
        $nombres->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerNombre($data)
    {
        $nombres = $this->db->table('t_personas');
        $nombres->where($data);

        return $nombres->get()->getResultArray();
    }

    public function actualizar($data, $idNombre)
    {
        $nombres = $this->db->table('t_personas');
        $nombres->set($data);
        $nombres->where('id_nombre', $idNombre);

        return $nombres->update();
    }

    public function eliminar($data)
    {
        $nombres = $this->db->table('t_personas');
        $nombres->where($data);

        return $nombres->delete();
    }
}
